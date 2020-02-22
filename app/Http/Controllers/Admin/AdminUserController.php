<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Photo;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::with('roles')->get();
        return view('admin.users.index',compact(['users']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles=Role::pluck('name','id');
        return view('admin.users.create',compact(['roles']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
//        if($file = $request->file('avatar')) { میاد میبینه آیا کارربر فایلی رو به نام اواتار فرستاده یا نه ؟ اگر بله return کنه
//              $name= time() . $file->getClientOriginalName();
//            return "فایل وجود دارد";
//        }
//        if($file = $request->file('avatar')) {تست نام فایل به علاوه ی time()
//            dd(time().$file->getClientOriginalName());
//            return "فایل وجود دارد";
//        }
        $user= new User();
        if($file = $request->file('avatar')) {
            $name= time() . $file->getClientOriginalName();
            $file->move('images',$name);
            $photo= new Photo();
            $photo->name=$file->getClientOriginalName();
            $photo->path =$name;
            $photo->user_id = Auth::id();
            $photo->save();
            $user->photo_id = $photo->id;
        }
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->status = $request->input('status');
        $user->save();
        $user->roles()->attach($request->input('roles'));
        return redirect('/admin/users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user=User::findorfail($id);
        $roles=Role::pluck('name','id');
        return view('admin.users.edit',compact(['user','roles']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
