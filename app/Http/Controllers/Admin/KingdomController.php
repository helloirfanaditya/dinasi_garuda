<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kingdom;
use DataTables;
use Illuminate\Http\Request;
use Illuminate\Support\HtmlString;

class KingdomController extends Controller
{
    public function index()
    {
        return view('admin.kingdom.index');
    }

    public function create()
    {
        return view('admin.kingdom.create');
    }

    public function kingdomTable()
    {
        $data = Kingdom::all();
        return DataTables::of($data)
            ->editColumn('no', function ($row) {
                $row = 0;
                $row++;
                return $row;
            })
            ->editColumn('kerajaan', function ($row) {
                $mimes = '
                    <div class="d-flex align-items-center">
                        <div class="mx-2">
                            <img height="70" width="70" src="' . asset('assets/admin/kingdom-assets/' . $row->image) . '"/>
                        </div>
                        <div>
                        ' . $row->title . '
                        </div>
                    </div>
                ';
                return new HtmlString($mimes);
            })
            ->editColumn('action', function ($row) {
                $update = '<a href="' . route('admin.kingdom.edit', ['id' => $row->id]) . '" class="text-warning btn btn-sm"><i class="fas fa-edit"></i></a>';
                $delete = '<a href="' . route('admin.kingdom.delete', ['id' => $row->id]) . '" class="text-danger btn btn-sm"><i class="fas fa-trash-alt"></i></a>';
                return new HtmlString($update . $delete);
            })
            ->make(true);
    }

    public function edit($id)
    {
        $kingdom = Kingdom::whereId($id)->firstOrFail();
        return view('admin.kingdom.edit', compact('kingdom'));
    }

    public function update(Request $req, $id)
    {
        $req->validate([
            'title' => 'required',
            'period' => 'required',
            'image' => 'nullable|image|mimes:png,jpg,jpeg',
            'description' => 'required',
        ]);
        $kingdom = Kingdom::whereId($id)->firstOrFail();
        $kingdom->title = $req->title;
        $kingdom->period = $req->period;
        $kingdom->description = $req->description;
        if ($req->hasFile('image')) {
            $image_client = $req->file('image');
            $file_name = \Str::slug($req->title . \Str::random(10), '-') . '.' . $image_client->getClientOriginalExtension();
            $file_moved = 'assets/admin/kingdom-assets';
            \File::delete($file_moved . '/' . $kingdom->image);
            $image_client->move($file_moved, $file_name);
            $kingdom->image = $file_name;
        }
        $kingdom->save();
        return back()->with('success', 'Kingdom has been updated');
    }

    public function delete($id)
    {
        $kingdom = Kingdom::whereId($id)->firstOrFail();
        $file_moved = 'assets/admin/kingdom-assets';
        \File::delete($file_moved . '/' . $kingdom->image);
        $kingdom->delete();
        return back()->with('success', 'Kingdom has been Deleted');
    }

    public function store(Request $req)
    {
        $req->validate([
            'title' => 'required',
            'period' => 'required',
            'image' => 'required|image|mimes:png,jpg,jpeg',
            'description' => 'required',
        ]);
        $image_client = $req->file('image');
        $file_name = \Str::slug($req->title . \Str::random(10), '-') . '.' . $image_client->getClientOriginalExtension();
        $file_moved = 'assets/admin/kingdom-assets';
        $image_client->move($file_moved, $file_name);
        Kingdom::create([
            'title' => $req->title,
            'period' => $req->period,
            'image' => $file_name,
            'description' => $req->description,
        ]);
        return back()->with('success', 'Kingdom has been created');
    }
}
