@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="container">
                        @if (\Session::has('success'))
                            <div class="alert alert-success">
                                <p>{!! \Session::get('success') !!}</p>
                            </div>
                        @endif
                    </div>
                    <div class="container">
                        @if (\Session::has('delete'))
                            <div class="alert alert-success">
                                <p>{!! \Session::get('delete') !!}</p>
                            </div>
                        @endif
                    </div>
                    <h5 class="card-title mb-4 d-inline">Products</h5>
                    <a  href="{{route('products.create')}}" class="btn btn-primary mb-4 text-center float-right">Create Products</a>

                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">product</th>
                            <th scope="col">price in $$</th>
                            <th scope="col">expiration date</th>
                            <th scope="col">delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($allproducts as $allproduct)
                        <tr>
                            <th scope="row">{{$allproduct->id}}</th>
                            <td>{{$allproduct->name}}</td>
                            <td>{{$allproduct->price}}</td>
                            <td>{{$allproduct->exp_date}}</td>
                            <td><a href="{{route('products.delete' ,$allproduct->id )}}" class="btn btn-danger  text-center ">delete</a></td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
