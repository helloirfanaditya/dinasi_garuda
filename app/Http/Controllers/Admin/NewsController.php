<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use DataTables;
use Illuminate\Http\Request;
use Illuminate\Support\HtmlString;

class NewsController extends Controller
{
    public function index()
    {
        return view('admin.news.index');
    }

    public function newsTable()
    {
        $data = News::all();
        return DataTables::of($data)
            ->editColumn('date', function ($row) {
                return $row->date->format('d, F Y - H:i');
            })
            ->editColumn('news', function ($row) {
                $mimes = '
                    <div class="d-flex align-items-center">
                        <div class="mx-2">
                            <img height="70" width="70" src="' . asset('assets/admin/news-assets/' . $row->image) . '"/>
                        </div>
                        <div>
                        ' . $row->title . '
                        </div>
                    </div>
                ';
                return new HtmlString($mimes);
            })
            ->editColumn('action', function ($row) {
                $update = '<a href="' . route('admin.news.edit', ['id' => $row->id]) . '" class="text-warning btn btn-sm"><i class="fas fa-edit"></i></a>';
                $delete = '<a href="' . route('admin.news.delete', ['id' => $row->id]) . '" class="text-danger btn btn-sm"><i class="fas fa-trash-alt"></i></a>';
                return new HtmlString($update . $delete);
            })
            ->make(true);
    }

    public function create()
    {
        return view('admin.news.create');
    }

    public function store(Request $req)
    {
        $req->validate([
            'title' => 'required',
            'date' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:png,jpg,jpeg',
        ]);
        $image_client = $req->file('image');
        $file_name = \Str::slug($req->title . \Str::random(10), '-') . '.' . $image_client->getClientOriginalExtension();
        $file_moved = 'assets/admin/news-assets';
        $image_client->move($file_moved, $file_name);
        News::create([
            'title' => $req->title,
            'image' => $file_name,
            'date' => $req->date,
            'description' => $req->description,
            'view' => 0,
            'slug' => \Str::slug($req->title . \Str::random(20), '-'),
        ]);
        return back()->with('success', 'News has been added');
    }

    public function edit($id)
    {
        $news = News::whereId($id)->firstOrFail();
        return view('admin.news.edit', compact('news'));
    }

    public function update(Request $req, $id)
    {
        $req->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:png,jpg,jpeg',
        ]);
        $news = News::whereId($id)->firstOrFail();
        $news->title = $req->title;
        $news->date = $req->date ? $req->date : $news->date;
        $news->description = $req->description;
        if ($req->hasFile('image')) {
            $image_client = $req->file('image');
            $file_name = \Str::slug($req->title . \Str::random(10), '-') . '.' . $image_client->getClientOriginalExtension();
            $file_moved = 'assets/admin/news-assets';
            \File::delete($file_moved . '/' . $news->image);
            $image_client->move($file_moved, $file_name);
            $news->image = $file_name;
        }
        $news->save();
        return back()->with('success', 'News has been updated');
    }

    public function delete($id)
    {
        $news = News::whereId($id)->firstOrFail();
        $file_moved = 'assets/admin/news-assets';
        \File::delete($file_moved . '/' . $news->image);
        $news->delete();
        return back()->with('success', 'News has been deleted');
    }
}
