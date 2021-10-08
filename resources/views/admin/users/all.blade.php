@extends('layouts.admin')
@section('title')all user @endsection
@section('content')
<div id="main-content" class="container-fluid">
    <div class="row all">
        <div class="col-lg-12">
            <div class="p-5">
                <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">All User!</h1>
                </div>
                <a class="btn btn-primary" href="{{route('user.create')}}">Add user!</a>
            </div>
        </div>
    </div>
    <div class="row">
        @if (Session::has('success'))
        <div class="card col-lg-12 mb-4 py-3 border-left-success">
            <div class="card-body">
                {{Session::get('success')}}
            </div>
        </div>
        @endif
        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Product Picture</th>
                        <th scope="col">Username</th>
                        <th scope="col">email</th>
                        <th scope="col">Controll</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td><img src="{{asset('uploads/users/' . $user->uimg)}}" style="max-width: 68%; border-bottom-width:0"></td>
                        <th>{{$user->name}}</th>
                        <td>{{$user->email}}</td>
                        <td class="box">
                            <a class="btn btn-info" href="">show</a>
                            <a class="btn btn-warning" href="{{route('user.edit' , $user->id)}}">Edit</a>
                            {{--<a class="btn btn-danger" href="">Delete</a>--}}
                            <form method="post" action="{{route('user.destroy' , $user->id)}}">
                                @csrf
                                {{method_field('DELETE')}}
                                <input type="submit" class="btn btn-danger" value="Delete">
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
</div>

        {{$users->links()}}
        @endsection
