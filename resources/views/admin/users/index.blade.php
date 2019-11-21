<?php

//require_once ('app/User.php');
use App\User;
//namespace App\User;
//
//public function index()
//{
  //$users = User::all();
////    //return view('admin.users.index');
//    return view('admin.users.index', compact('users'));
//

?>

@extends('layouts.admin')
@section('content')
    <h1>Users</h1>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Photo</th>
            <th scope="col">Name</th>
            <th scope="col">E-mail</th>
            <th scope="col">Role</th>
            <th scope="col">Active</th>
            <th scope="col">Created</th>
            <th scope="col">Updated</th>
        </tr>
        </thead>
        <tbody>
        @if($users)
            @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->photo_id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->role ? $user->role->name : 'User without role'}}</td>
                    <td>{{$user->is_active == 1 ? 'Active' : 'Not active'}}</td>
                    <td>{{$user->created_at}}</td>
                    <td>{{$user->updated_at}}</td>
                </tr>
                </tr>
            @endforeach

        @endif

        </tbody>

    </table>


@stop