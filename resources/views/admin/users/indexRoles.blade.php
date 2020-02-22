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
                            <th scope="col">نام</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($roles as $role)
                            <tr>
                               <td>{{$role->id}}</td>
                               <td>{{$role->name}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    @endsection
