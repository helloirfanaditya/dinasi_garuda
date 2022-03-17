<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use DataTables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        if (auth('admin')->check()) {
            return redirect('/admin/dashboard');
        } else {
            return view('admin.auth.login');
        }
    }

    public function doLogin(Request $req)
    {
        $filtering = filter_var($req->email, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        if ($filtering == 'username') {
            $data = Admin::where('username', $req->email)->first();
            if ($data) {
                $type = $data->email;
            } else {
                return back()->with('info', 'Invalid Credentials');
            }
        } else {
            $type = $req->email;
        }
        $credentials = [
            'email' => $type,
            'password' => $req->password,
        ];
        if (auth('admin')->attempt($credentials)) {
            return redirect('/admin/dashboard');
        } else {
            return back()->with('info', 'Invalid Credentials');
        }
    }

    public function listAdmin()
    {
        return view('admin.auth.list-admin');
    }

    public function listAdminTable()
    {
        $data = Admin::with(['roles'])->get();
        return DataTables::of($data)
            ->editColumn('roles', function ($row) {
                return $row->roles->roles;
            })
            ->make(true);
    }

    public function myAccount()
    {
        return view('admin.auth.my-account');
    }

    public function myAccountStore(Request $req)
    {
        $req->validate([
            'fullname' => 'required',
            'password' => 'nullable|confirmed',
        ]);
        $admin = auth('admin')->user();
        $admin->fullname = $req->fullname;
        $admin->password = $req->password ? Hash::make($req->password) : $admin->password;
        $admin->save();
        return back()->With('success', 'Account has been updated');
    }

    public function logout()
    {
        auth('admin')->logout();
        return redirect('/admin/login')->with('success', 'Logout Success');
    }

    public function addAdmin()
    {
        return view('admin.auth.add-admin');
    }

    public function addAdminStore(Request $req)
    {
        $req->validate([
            'username' => 'required|unique:admins,username',
            'fullname' => 'required',
            'email' => 'required|unique:admins,email',
            'password' => 'required|confirmed',
        ]);
        Admin::create([
            'admin_role_id' => 2,
            'username' => $req->username,
            'fullname' => $req->fullname,
            'email' => $req->email,
            'password' => Hash::make($req->password),
            'token' => \Str::random(50),
        ]);
        return back()->with('success', 'new Admin has been added');
    }
}
