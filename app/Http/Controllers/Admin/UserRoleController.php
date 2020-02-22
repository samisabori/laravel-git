<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Role;
use Illuminate\Http\Request;

class UserRoleController extends Controller
{
    public function show()
    {
        return view('admin.users.main');
    }
    public function index()
    {
        $role=Role::all();

        return view('admin/users/indexRoles')->with('roles',$role);
    }
    public function edit()
    {
        return view('admin/users/editroles');

    }
    public function create()
    {
        return view('admin/users/addroles');
    }

    public function PostCreate(Request $request)
    {
        dd('hiiiiiii');
    }
    public function PostEdit(Request $request)
    {
        dd('hiiiiiii');
    }

}
