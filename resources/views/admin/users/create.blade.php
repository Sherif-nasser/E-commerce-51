@extends('layouts.admin')
@section('title') Create user @endsection
@section('content')
<div class="container">
    <div id="main-content" class="container-fluid">
        <div class="row all">
            <div class="col-lg-12">
                <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Create an User!</h1>
                </div>
                {{-- {{}} => echo --}}
                {{-- {{url('admin/user')}} --}}
                <form method="POST" action="{{route('user.store')}}" class="user" enctype="multipart/form-data">
                    <div class="row">
                        @if (Session::has('success'))
                        <div class="card form-group  border-left-success">
                            <div class="card-body">
                                {{Session::get('success')}}
                            </div>
                        </div>
                        @endif
                    </div>
                    <div class="form-group row">
                        {{-- <input type="hidden" name="_token" value="{{csrf_token()}}"> --}}
                        @csrf
                        <div class="col-sm-12 mb-3 mb-sm-0">
                            <input type="file" class="form-control form-control-user" name="uimg"
                                placeholder="user image">
                            @error('uimg')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="col-sm-12 mb-3 mb-sm-0">
                            <input type="text" class="form-control form-control-user" name="name"
                                placeholder="username">
                            @error('name')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>

                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control form-control-user" name="email"
                            placeholder="Email Address">
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
                    <input type="submit" value="Register Account" class="btn btn-primary btn-user btn-block">
                </form>
                <hr>
            </div>
        </div>
    </div>
</div>
@endsection
