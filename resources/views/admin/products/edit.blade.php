@extends('layouts.admin')
@section('title') Edit Category @endsection
@section ('content')
<div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Update Prodcut!</h1>
                            </div>
                            <form method="POST" action="{{route('product.update' , $product->id)}}" class="user m-5" enctype="multipart/form-data">
                                <div class="form-group row">
                                    @csrf
                                    {{method_field('PUT')}}
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Upload Image</label>
                                        <input class="form-control" type="file" id="formFile" name="pimg">
                                    </div>
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user"
                                        name="pname" value="{{$product->pname}}">
                                        @error('pname')
                                        <small class="text-danger"> {{$message}} </small> 
                                        @enderror
                                </div>
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user"
                                        name="pprice" value="{{$product->pprice}}">
                                        @error('pprice')
                                        <small class="text-danger"> {{$message}} </small> 
                                        @enderror
                                    </div>
                                </div>
                                <input type="submit" value="Update Product" class="btn btn-primary btn-user btn-block">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
