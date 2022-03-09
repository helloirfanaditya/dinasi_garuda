<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Collection;
use App\Models\CollectionCategory;
use DataTables;
use Illuminate\Http\Request;
use Illuminate\Support\HtmlString;

class CollectionController extends Controller
{
    public function index()
    {
        return view('admin.collection.index');
    }

    public function collectionTable()
    {
        $data = Collection::with(['category'])->get();
        return DataTables::of($data)
            ->editColumn('no', function ($row) {
                $row = 0;
                $row++;
                return $row;
            })
            ->editColumn('collection', function ($row) {
                $mimes = '
                    <div class="d-flex align-items-center">
                        <div class="mx-2">
                            <img height="70" width="70" src="' . asset('assets/admin/collection-assets/' . $row->image) . '"/>
                        </div>
                        <div>
                        ' . $row->collection . '
                        </div>
                    </div>
                ';
                return new HtmlString($mimes);
            })
            ->editColumn('category', function ($row) {
                return $row->category->collection_category;
            })
            ->editColumn('view', function ($row) {
                return number_format($row->view);
            })
            ->editColumn('action', function ($row) {
                $update = '<a href="' . route('admin.collection.edit', ['id' => $row->id]) . '" class="text-warning btn btn-sm"><i class="fas fa-edit"></i></a>';
                $delete = '<a href="' . route('admin.collection.delete', ['id' => $row->id]) . '" class="text-danger btn btn-sm"><i class="fas fa-trash-alt"></i></a>';
                $goto = '<a href="' . $row->url_link . '" target="blank" class="text-success btn btn-sm"><i class="fas fa-arrow-right"></i></a>';
                return new HtmlString($update . $delete . $goto);
            })
            ->make(true);
    }

    public function edit($id)
    {
        $collection = Collection::with(['category'])->whereId($id)->firstOrFail();
        $category = CollectionCategory::all();
        return view('admin.collection.edit', compact('collection', 'category'));
    }

    public function update(Request $req, $id)
    {
        $req->validate([
            'title' => 'required',
            'url_link' => 'required|url',
            'category' => 'required',
            'image' => 'image|mimes:png,jpg,jpeg',
            'description' => 'required',
        ]);
        $collection = Collection::whereId($id)->firstOrFail();
        $collection->collection_category_id = $req->category;
        $collection->collection = $req->title;
        $collection->url_link = $req->url_link;
        $collection->description = $req->description;
        if ($req->hasFile('image')) {
            $image_client = $req->file('image');
            $file_name = \Str::slug($req->title . \Str::random(10), '-') . '.' . $image_client->getClientOriginalExtension();
            $file_moved = 'assets/admin/collection-assets';
            \File::delete($file_moved . '/' . $collection->image);
            $image_client->move($file_moved, $file_name);
            $collection->image = $file_name;
        }
        $collection->save();
        return back()->with('success', 'Collection has been updated');
    }

    public function delete($id)
    {
        $collection = Collection::whereId($id)->firstOrFail();
        $file_moved = 'assets/admin/collection-assets';
        \File::delete($file_moved . '/' . $collection->image);
        $collection->delete();
        return back()->with('success', 'Collection has been deleted');
    }

    public function create()
    {
        $category = CollectionCategory::all();
        return view('admin.collection.create', compact('category'));
    }

    public function store(Request $req)
    {
        $req->validate([
            'title' => 'required',
            'url_link' => 'required|url',
            'category' => 'required',
            'image' => 'required|image|mimes:png,jpg,jpeg',
            'description' => 'required',
        ]);
        $image_client = $req->file('image');
        $file_name = \Str::slug($req->title . \Str::random(10), '-') . '.' . $image_client->getClientOriginalExtension();
        $file_moved = 'assets/admin/collection-assets';
        $image_client->move($file_moved, $file_name);
        Collection::create([
            'collection_category_id' => $req->category,
            'collection' => $req->title,
            'url_link' => $req->url_link,
            'image' => $file_name,
            'description' => $req->description,
        ]);
        return back()->with('success', 'Collection has been created');
    }

    public function collectionCategoryTable()
    {
        $data = CollectionCategory::all();
        return DataTables::of($data)
            ->editColumn('no', function ($row) {
                $row = 0;
                $row++;
                return $row;
            })
            ->editColumn('created', function ($row) {
                return $row->created_at->format('d, F Y');
            })
            ->editColumn('action', function ($row) {
                $update = '<a href="' . route('admin.collection.category.edit', ['id' => $row->id]) . '" class="text-warning btn btn-sm"><i class="fas fa-edit"></i></a>';
                $delete = '<a href="' . route('admin.collection.category.delete', ['id' => $row->id]) . '" class="text-danger btn btn-sm"><i class="fas fa-trash-alt"></i></a>';
                return new HtmlString($update . $delete);
            })
            ->make(true);
    }

    public function createCategory()
    {
        return view('admin.collection-category.create');
    }

    public function storeCategory(Request $req)
    {
        $req->validate([
            'title' => 'required|unique:collection_categories,collection_category',
        ]);
        CollectionCategory::create([
            'collection_category' => $req->title,
        ]);
        return back()->with('success', 'Collection Category has been created');
    }

    public function editCategory($id)
    {
        $category = CollectionCategory::whereId($id)->firstOrFail();
        return view('admin.collection-category.edit', compact('category'));
    }

    public function updateCategory(Request $req, $id)
    {
        $category = CollectionCategory::whereId($id)->firstOrFail();
        $category->collection_category = $req->title;
        $category->save();
        return back()->with('success', 'Category has been updated');
    }

    public function deleteCategory($id)
    {
        $category = CollectionCategory::whereId($id)->firstOrFail();
        $category->delete();
        return back()->with('success', 'Category has been deleted');
    }
}
