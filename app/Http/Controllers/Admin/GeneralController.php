<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\General;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function index()
    {
        return view('admin.general.index');
    }

    public function logoDark(Request $req)
    {
        $req->validate([
            'logo_dark' => 'required|image|mimes:png,jpg,jpeg',
        ]);
        $image_client = $req->file('logo_dark');
        $file_name = \Str::slug('logo-dark' . \Str::random(10), '-') . '.' . $image_client->getClientOriginalExtension();
        $file_moved = 'assets/landings/asseting';
        $image_client->move($file_moved, $file_name);
        General::updateOrCreate(
            ['name' => 'LOGO_DARK'],
            ['value' => $file_name]
        );
        return back()->with('success', 'Success Change Logo Dark');
    }

    public function logoLight(Request $req)
    {
        $req->validate([
            'logo_light' => 'required|image|mimes:png,jpg,jpeg',
        ]);
        $image_client = $req->file('logo_light');
        $file_name = \Str::slug('logo-light' . \Str::random(10), '-') . '.' . $image_client->getClientOriginalExtension();
        $file_moved = 'assets/landings/asseting';
        $image_client->move($file_moved, $file_name);
        General::updateOrCreate(
            ['name' => 'LOGO_LIGHT'],
            ['value' => $file_name]
        );
        return back()->with('success', 'Success Change Logo Light');
    }
    public function logoSm(Request $req)
    {
        $req->validate([
            'logo_icon' => 'required|image|mimes:png,jpg,jpeg',
        ]);
        $image_client = $req->file('logo_icon');
        $file_name = \Str::slug('logo-icon' . \Str::random(10), '-') . '.' . $image_client->getClientOriginalExtension();
        $file_moved = 'assets/landings/asseting';
        $image_client->move($file_moved, $file_name);
        General::updateOrCreate(
            ['name' => 'LOGO_ICON'],
            ['value' => $file_name]
        );
        return back()->with('success', 'Success Change Logo Icon');
    }

    public function logoFavicon(Request $req)
    {
        $req->validate([
            'favicon' => 'required|image|mimes:png,jpg,jpeg',
        ]);
        $image_client = $req->file('favicon');
        $file_name = \Str::slug('logo-favicon' . \Str::random(10), '-') . '.' . $image_client->getClientOriginalExtension();
        $file_moved = 'assets/landings/asseting';
        $image_client->move($file_moved, $file_name);
        General::updateOrCreate(
            ['name' => 'LOGO_FAVICON'],
            ['value' => $file_name]
        );
        return back()->with('success', 'Success Change Logo Favicon');
    }

    public function settingTitle(Request $req)
    {
        General::updateOrCreate(
            ['name' => 'TITLE'],
            ['value' => $req->title]
        );
        return back()->with('success', 'Success Change Title');
    }

    public function settingAppUrl(Request $req)
    {
        General::updateOrCreate(
            ['name' => 'APP_URL'],
            ['value' => $req->app_url]
        );
        return back()->with('success', 'Success Change App URL');
    }

    public function settingDescription(Request $req)
    {
        General::updateOrCreate(
            ['name' => 'DESCRIPTION'],
            ['value' => $req->description]
        );
        return back()->with('success', 'Success Change Description');
    }

    public function settingPhone(Request $req)
    {
        General::updateOrCreate(
            ['name' => 'PHONE'],
            ['value' => $req->phone]
        );
        return back()->with('success', 'Success Change Phone');
    }

    public function settingEmail(Request $req)
    {
        General::updateOrCreate(
            ['name' => 'EMAIL'],
            ['value' => $req->email]
        );
        return back()->with('success', 'Success Change Email');
    }

    public function titleHeader(Request $req)
    {
        General::updateOrCreate(
            ['name' => 'TITLE_HEADER'],
            ['value' => $req->header_title]
        );
        return back()->with('success', 'Success Change Title Header');
    }

    public function youtubeLink(Request $req)
    {
        General::updateOrCreate(
            ['name' => 'YOUTUBE_LINK'],
            ['value' => $req->youtube_link]
        );
        return back()->with('success', 'Success Change Youtube Link');
    }

    public function aboutStore(Request $req)
    {
        General::updateOrCreate(
            ['name' => 'ABOUT'],
            ['value' => $req->about]
        );
        return back()->with('success', 'Success Change About Section');
    }

    public function visiPage(Request $req)
    {
        General::updateOrCreate(
            ['name' => 'VISI_PAGE'],
            ['value' => $req->visi_page]
        );
        return back()->with('success', 'Success Change Visi Section');
    }

    public function misiPage(Request $req)
    {
        General::updateOrCreate(
            ['name' => 'MISI_PAGE'],
            ['value' => $req->misi_page]
        );
        return back()->with('success', 'Success Change Misi Section');
    }
}
