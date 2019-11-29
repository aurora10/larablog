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
            <th scope="row">ID</th>
            <th scope="row">User</th>
            <th scope="row">Category</th>
            <th scope="row">Photo</th>
            <th scope="row">Title</th>
            <th scope="row">Body</th>
            <th scope="row">Created At</th>
            <th scope="row">Updated</th>
        </tr>
        </thead>
        <tbody>
        @if($posts)
            @foreach($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td><a href="{{route('posts.edit', $post->id)}}">{{$post->user->name}}</a></td>
                    <td>{{$post->category ? $post->category->name : 'Uncategorized'}}</td>
                    <td>{{$post->category_id}}</td>
                    <td><img height="50" src="{{$post->photo ? asset($post->photo->file) : 'http://placehold.it/400x400'}}" alt=""></td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->body}}</td>
                    <td>P{{$post->created_at}}</td>
                    <td>{{$post->updated_at}}</td>

                </tr>
            @endforeach
        @endif


        </tbody>

    </table>


@stop