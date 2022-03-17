<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Models\Collection;
use App\Models\CollectionCategory;
use App\Models\Event;
use App\Models\Kingdom;
use App\Models\News;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $kingdoms = Kingdom::limit(6)->get();
        $collection_category = CollectionCategory::all();
        $collections = Collection::latest()->limit(6)->get();
        $news = Event::latest()->limit(1)->first();
        $related_news = News::take(2)->get();
        return view('landings.home', compact('related_news', 'news', 'kingdoms', 'collection_category', 'collections'));
    }

    public function sendMessage(Request $req)
    {
        $req->validate([
            'name' => 'required',
            'email' => 'required|email',
            'comments' => 'required',
        ]);
    }

    public function kingdom()
    {
        $kingdoms = Kingdom::paginate(6);
        return view('landings.kingdom', compact('kingdoms'));
    }

    public function collection(Request $req)
    {
        $collections = Collection::where(function ($q) use ($req) {
            if ($req->cat !== 'most') {
                $q->where('collection_category_id', $req->cat);
            } else {
                $q->orderBy('view', 'DESC');
            }
        })->paginate(12);
        if (!$req->cat) {
            $collections = Collection::orderBy('view', 'ASC')->paginate(12);
        }
        $collection_category = CollectionCategory::all();
        return view('landings.collection', compact('collections', 'collection_category'));
    }

    public function CollectionDetail($id)
    {
        $collection = Collection::whereId($id)->firstOrFail();
        $collection->view = $collection->view + 1;
        $collection->save();
        $otherCollection = Collection::whereNotIn('id', [$collection->id])->take(4)->get();
        return view('landings.detail.collection-detail', compact('collection', 'otherCollection'));
    }

    public function news()
    {
        $news = News::paginate(6);
        return view('landings.news', compact('news'));
    }

    public function newsDetail($id)
    {
        $new = News::whereId($id)->firstOrFail();
        $related = News::whereNotIn('id', [$id])->inRandomOrder()->take(2)->get();
        return view('landings.detail.news-detail', compact('new', 'related'));
    }

    public function event()
    {
        $event = Event::paginate(6);
        return view('landings.event', compact('event'));
    }

    public function eventDetail($id)
    {
        $event = Event::whereId($id)->firstOrFail();
        $related = Event::whereNotIn('id', [$id])->inRandomOrder()->take(2)->get();
        return view('landings.detail.event-detail', compact('event', 'related'));
    }

    public function about()
    {
        return view('landings.about');
    }

    public function kingdomDetail($id)
    {
        $kingdom = Kingdom::whereId($id)->firstOrFail();
        $related = Kingdom::whereNotIn('id', [$id])->inRandomOrder()->take(2)->get();
        return view('landings.detail.kingdom-detail', compact('kingdom', 'related'));
    }

    public function privacy()
    {
        return view('landings.privacy-policy');
    }

    public function term()
    {
        return view('landings.term-condition');
    }
}
