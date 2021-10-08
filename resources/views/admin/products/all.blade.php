@extends('layouts.admin')
@section('title')all user @endsection
@section('content')
<div id="main-content" class="container-fluid">
    <div class="row all">
        <div class="col-lg-12">
            <div class="p-5">
                <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">All Products!</h1>
                </div>
                <a class="btn btn-primary" href="{{route('products.create')}}">Add Product!</a>
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
            <table class="table m-5">
                <thead>
                    <tr>
                        <th scope="col">Product Picture</th>
                        <th scope="col">Product name</th>
                        <th scope="col">Product Price</th>
                        <th scope="col">Product Category</th>
                        <th scope="col">Control</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                    <tr>
                        <td><img src="{{asset('uploads/products/' . $product->pimg)}}"
                                style="max-width: 68%; border-bottom-width:0"></td>
                        <th>{{$product->pname}}</th>
                        <th>{{$product->pprice}}</th>
                        <th>{{$product->category->cat_name}}</th>
                        <td class="d-flex tablestyle">
                            <a class="btn btn-info m-1" href="{{route('products.show' , $product->id)}}">Show</a>
                            <a class="btn btn-warning m-1"
                                href="{{route('products.edit' , $product->id)}}">Edit</a>
                            <form method="POST" action="{{route('products.destroy' , $product->id)}}">
                                @csrf
                                {{method_field('DELETE')}}
                                <input type="submit" class="btn btn-danger m-1" value="Delete">
                            </form>
                        </td>
                    </tr>
                    @endforeach
    
                </tbody>
            </table>
        </div>
    </div>
</div>

        {{-- {{$products->links()}} --}}
        @endsection




        