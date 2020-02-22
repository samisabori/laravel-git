@extends('layouts.admin.master')
@section('content')
    <div class="col-md-12">
        <h1>لیست کاربران</h1>

        <div class="card">
            <div class="card-body">
                <div class="table-responsive" style="overflow: hidden; outline: currentcolor none medium;" tabindex="5">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">آواتار</th>
                            <th scope="col">نام</th>
                            <th scope="col">email</th>
                            <th scope="col">نقش</th>
                            <th scope="col">تاریخ ایجاد</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <th scope="row">{{$user->id}}</th>
                                <th>
                                    <figure class="avatar avatar-sm">
                                        <a href="#">
                                            <span class="avatar-title bg-success rounded-circle">{{$user->name}}</span>
                                        </a>
                                    </figure>
                                </th>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>
                                    <ul>
                                        @foreach($user->roles as $role)
                                            <li>{{$role->name}}</li>
                                            @endforeach
                                    </ul>
                                </td>
                                <td>
                                    <a href="#" class="btn btn-danger btn-sm">{{\Hekmatinasser\Verta\Verta::instance($user->created_at)->format('%B %d، %Y')}}</a>
                                    <a href="#" class="btn btn-danger btn-sm">{{\Hekmatinasser\Verta\Verta::instance($user->created_at)->formatDifference(\Hekmatinasser\Verta\Verta::today('Asia/tehran'))}}</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    @endsection
