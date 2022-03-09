<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use DataTables;
use Illuminate\Http\Request;
use Illuminate\Support\HtmlString;

class EventController extends Controller
{
    public function index()
    {
        return view('admin.event.index');
    }

    public function eventTable()
    {
        $data = Event::all();
        return DataTables::of($data)
            ->editColumn('date', function ($row) {
                return $row->date->format('d, F Y - H:is');
            })
            ->editColumn('event', function ($row) {
                $mimes = '
                <div class="d-flex align-items-center">
                    <div class="mx-2">
                        <img height="70" width="70" src="' . asset('assets/admin/event-assets/' . $row->image) . '"/>
                    </div>
                    <div>
                    ' . $row->title . '
                    </div>
                </div>
            ';
                return new HtmlString($mimes);
            })
            ->editColumn('view', function ($row) {
                return '0';
            })
            ->editColumn('action', function ($row) {
                $update = '<a href="' . route('admin.event.edit', ['id' => $row->id]) . '" class="text-warning btn btn-sm"><i class="fas fa-edit"></i></a>';
                $delete = '<a href="' . route('admin.event.delete', ['id' => $row->id]) . '" class="text-danger btn btn-sm"><i class="fas fa-trash-alt"></i></a>';
                return new HtmlString($update . $delete);
            })
            ->make(true);
    }

    public function create()
    {
        return view('admin.event.create');
    }

    public function store(Request $req)
    {
        $req->validate([
            'title' => 'required',
            'image' => 'required|image|mimes:png,jpg,jpeg',
            'date' => 'required',
            'place' => 'required',
            'description' => 'required',
        ]);
        $image_client = $req->file('image');
        $file_name = \Str::slug($req->title . \Str::random(10), '-') . '.' . $image_client->getClientOriginalExtension();
        $file_moved = 'assets/admin/event-assets';
        $image_client->move($file_moved, $file_name);
        Event::create([
            'title' => $req->title,
            'image' => $file_name,
            'date' => $req->date,
            'place' => $req->place,
            'slug' => \Str::slug($req->title . \Str::random(20), '-'),
            'description' => $req->description,
        ]);
        return back()->with('success', 'Event has been created');
    }

    public function edit($id)
    {
        $event = Event::whereId($id)->firstOrFail();
        return view('admin.event.edit', compact('event'));
    }

    public function update(Request $req, $id)
    {
        $req->validate([
            'title' => 'required',
            'image' => 'image|mimes:png,jpg,jpeg',
            'place' => 'required',
            'description' => 'required',
        ]);
        $event = Event::whereId($id)->firstOrFail();
        $event->title = $req->title;
        $event->date = $req->date ? $req->date : $event->date;
        $event->place = $req->place;
        $event->description = $req->description;
        if ($req->hasFile('image')) {
            $image_client = $req->file('image');
            $file_name = \Str::slug($req->title . \Str::random(10), '-') . '.' . $image_client->getClientOriginalExtension();
            $file_moved = 'assets/admin/event-assets';
            \File::delete($file_moved . '/' . $event->image);
            $image_client->move($file_moved, $file_name);
            $event->image = $file_name;
        }
        $event->save();
        return back()->with('success', 'Event has been updated');
    }

    public function delete($id)
    {
        $event = Event::whereId($id)->firstOrFail();
        $file_moved = 'assets/admin/event-assets';
        \File::delete($file_moved . '/' . $event->image);
        $event->delete();
        return back()->with('success', 'Event has been deleted');
    }
}
