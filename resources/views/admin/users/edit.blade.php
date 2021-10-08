@extends('layouts.admin')
@section('title') Edit user @endsection
@section('content')
<div class="container">
    <div id="main-content" class="container-fluid">
        <div class="row all">
            <div class="col-lg-12">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Edit an User!</h1>
                    </div>
                    
                    <form method="POST" action="{{route('user.update',$users->id)}}" class="user">
                        <div class="row">
                            @if (Session::has('success'))
                            <div class="card col-lg-12 mb-4 py-3 border-left-success">
                                <div class="card-body">
                                    {{Session::get('success')}}
                                </div>
                            </div>
                            @endif
                        </div>

                        <div class="form-group row">
                            {{-- <input type="hidden" name="_token" value="{{csrf_token()}}"> --}}
                            @csrf
                            {{method_field('PUT')}}
                            <div class="col-sm-12 mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user" name="name"
                                    value="{{$users->name}}">
                                @error('name')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>

                        </div>
                        
                        <div class="form-group">
                            <input type="email" class="form-control form-control-user" name="email"
                            value="{{$users->email}}">
                            @error('email')
                            <small class=" text-danger">{{$message}}</small>
                            @enderror
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-12 mb-3 mb-sm-0">
                                <input type="password" class="form-control form-control-user" name="password"
                                    placeholder="Password">
                                @error('password')
                                <small class=" text-danger">{{$message}}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group " >
                            <label for="formFile" class="form-label">Upload Image</label>
                            <input class="form-control" type="file" id="formFile" name="uimg">
                        </div>
                        <input type="submit" value="Register Account" class="btn btn-primary btn-user btn-block">
                    </form>
                    <hr>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
