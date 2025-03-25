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
          @if (\Session::has('update'))
              <div class="alert alert-success">
                      <p>{!! \Session::get('update') !!}</p>
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
          <h5 class="card-title mb-4 d-inline">Categories</h5>
         <a  href="{{route('categories.create')}}" class="btn btn-primary mb-4 text-center float-right">Create Categories</a>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Update</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($allCategories as $category)
                <tr>
                    <th scope="row">{{$category->id}}</th>
                    <td>{{$category->name}}</td>
                    <td><a  href="{{route('categories.edit', $category->id)}}" class="btn btn-warning text-white text-center ">Update </a></td>
                    <td><a href="{{route('categories.delete', $category->id)}}" class="btn btn-danger  text-center ">Delete </a></td>
                  </tr>
                    
                @endforeach
              
              
            </tbody>
          </table> 
        </div>
      </div>
    </div>
  </div>

  @endsection