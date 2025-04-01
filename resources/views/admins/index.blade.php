@extends('layouts.admin')

@section('content')


<div class="row">
    <div class="col-md-3">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Products</h5>
          <!-- <h6 class="card-subtitle mb-2 text-muted">Bootstrap 4.0.0 Snippet by pradeep330</h6> -->
          <p class="card-text">Number of Products: {{$productsCount}}</p>
         
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Orders</h5>
          <!-- <h6 class="card-subtitle mb-2 text-muted">Bootstrap 4.0.0 Snippet by pradeep330</h6> -->
          <p class="card-text">Number of Orders: {{$ordersCount}}</p>
         
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Categories</h5>
          
          <p class="card-text">Number of Categories: {{$categoriesCount}}</p>
          
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Admins</h5>
          
          <p class="card-text">Number of Admins: {{$adminsCount}}</p>
          
        </div>
      </div>
    </div>
  </div>


  @endsection