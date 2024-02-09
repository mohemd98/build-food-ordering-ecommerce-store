
@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="container">
                @if (\Session::has('update'))
                    <div class="alert alert-success">
                        <p>{!! \Session::get('update') !!}</p>
                    </div>
                @endif
            </div>
            <div class="card-body">
                <h5 class="card-title mb-4 d-inline">Orders</h5>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">first name</th>
                        <th scope="col">last name</th>
                        <th scope="col">email</th>
                        <th scope="col">country</th>
                        <th scope="col">status</th>
                        <th scope="col">price in USD</th>
                        <th scope="col">address</th>
                        <th scope="col">date</th>
                        <th scope="col">update</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($allorders as $order)
                    <tr>
                        <th scope="row">{{$order->id}}</th>
                        <td>{{$order->namee}}</td>
                        <td>{{$order->last_name}}</td>
                        <td>{{$order->email}}</td>
                        <td>{{$order->state}}</td>
                        <td>{{$order->status}}</td>
                        <td>{{$order->price}}</td>
                        <td>{{$order->address}}</td>

                        <td>{{$order->created_at}}</td>

                        <td>
                            <a href="{{route('orders.edit' ,$order->id )}}" class="btn btn-warning text-white mb-4 text-center">update status</a>
                        </td>

                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


@endsection
