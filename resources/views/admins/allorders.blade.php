@extends('layouts.admin')

@section('content')


<div class="row">
    <div class="col">
      <div class="card">
        <div class="card-body">
          <div class="container">
            @if (\Session::has('update'))
                <div class="alert alert-success">
                        <p>{!! \Session::get('update') !!}</p>
                </div>
            @endif
        </div>
          <h5 class="card-title mb-4 d-inline">Orders</h5>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Email</th>
                <th scope="col">Country</th>
                <th scope="col">Status</th>
                <th scope="col">Price</th>
                <th scope="col">Address</th>
                <th scope="col">Date</th>
                <th scope="col">Update</th>
              </tr>
            </thead>
            <tbody>

                @foreach ($allOrders as $order)

                    <tr>
                        <th scope="row">{{$order->id}}</th>
                        <td>{{$order->name}}</td>
                        <td>{{$order->last_name}}</td>
                        <td>{{$order->email}}</td>
                        <td>{{$order->state}}</td>
                        <td>{{$order->status}}</td>
                        <td>${{$order->price}}</td>
                        <td>{{$order->address}}</td>
                        <td>{{$order->created_at}}</td>
                        <td>                
                            <a href="{{route('orders.edit', $order->id)}}" class="btn btn-warning text-white mb-4 text-center">Update Status</a>
                        </td>
                    
                    </tr>
                    
                @endforeach
              

            </tbody>
          </table> 
        </div>
      </div>
    </div>
  </div>



</div>

@endsection