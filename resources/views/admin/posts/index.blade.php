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
{{--    @if(Session::has('deleted_user'))--}}
{{--        <p class="bg-danger">{{session('deleted_user')}}</p>--}}
{{--    @endif--}}

    <h1>Posts</h1>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Photo</th>
            <th scope="col">Owner</th>
            <th scope="col">Category</th>
            <th scope="col">Title</th>
            <th scope="col">Body</th>
            <th scope="col">Post Link</th>
            <th scope="col">Comments</th>
            <th scope="col">Created At</th>
            <th scope="col">Updated</th>
        </tr>
        </thead>
        <tbody>
            <td>ID</td>
            <td>Photo</td>
            <td>Owner</td>
            <td>Category</td>
            <td>Title</td>
            <td>Body</td>
            <td>Post Link</td>
            <td>Comments</td>
            <td>Created At</td>
            <td>Updated</td>



        </tbody>

    </table>


@stop