@extends('layouts.admin')
@section('title') Add Product @endsection
@section ('content')

<div class="container">

    <div id="main-content" class="container-fluid">
        <!-- Nested Row within Card Body -->
        <div class="row all">
            {{-- <div class="col-lg-5 d-none d-lg-block bg-register-image"></div> --}}
            <div class="col-lg-12">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Create New Prodcut!</h1>
                    </div>
                    <form method="POST" action="{{route('products.store')}}" class="user mx-5"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="formFile" class="form-label">Upload Image</label>
                            <input class="form-control" type="file" id="formFile" name="pimg">
                        </div>
                        <div class="form-group row">
                            <input type="text" class="form-control form-control-user" name="pname"
                                placeholder="Product name">
                            @error('pname')
                            <small class="text-danger"> {{$message}} </small>
                            @enderror
                        </div>
                        <div class="form-group row">
                            <input type="text" class="form-control form-control-user" name="pprice"
                                placeholder="Product price">
                            @error('pprice')
                            <small class="text-danger"> {{$message}} </small>
                            @enderror
                        </div>
                        <div class="form-group row">
                            @foreach($categories as $category)
                                <input type="radio" class="form-control form-control-user" name="cat_id"
                                placeholder="Category" value="{{$category->id}}">{{$category->cat_name}}
                            {{-- @error('cat_id')
                                <small class="text-danger"> {{$message}} </small>
                            @enderror --}}
                            @endforeach
                            
                        </div>
                        <input type="submit" value="Add Product" class="btn btn-primary btn-user btn-block">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection