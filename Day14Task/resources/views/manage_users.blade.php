@extends('layouts.after_login_user.master')
@section('content')
    <div class="container-fluid">
        <table class="table table-striped table-hover ">
            <thead>
            <tr>
                <th>Id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Gender</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->firstname}}</td>
                    <td>{{$user->lastname}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->phone}}</td>
                    <td>{{$user->address}}</td>
                    <td>{{$user->gender}}</td>
                    <td><a href="{{route('user.editForm',[$user->id])}}">Edit</a>||
                        <a href="{{route('user.deleteRow',[$user->id])}}">Delete</a></td>

                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
@endsection
