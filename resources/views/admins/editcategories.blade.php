@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title mb-5 d-inline">Edit Categories</h5>

          <form method="POST" action="{{route('categories.update', $category->id)}}" enctype="multipart/form-data">
            @csrf

            <div class="form-outline mb-4 mt-4">
              <label for="catName">Name</label>
              <input type="text" value="{{$category->name}}" name="name" id="catName" class="form-control" placeholder="name" required />
            </div>

            <div class="form-outline mb-4 mt-4">
              <label for="catIcon">Icon</label>
              <input type="text" name="icon" value="{{$category->icon}}" id="catIcon" class="form-control" placeholder="icon" required />
            </div>

            <div class="form-outline mb-4 mt-4">
              <label for="catImage">Image</label>
              <input type="file" name="image" id="catImage" class="form-control" placeholder="image" required />
            </div>

            <button type="submit" name="submit" class="btn btn-primary mb-4 text-center">Update</button>
          </form>

          <script>
            document.querySelector("form").addEventListener("submit", function (e) {
              const name = document.querySelector('input[name="name"]').value.trim();
              const icon = document.querySelector('input[name="icon"]').value.trim();
              const image = document.querySelector('input[name="image"]').value.trim();

              if (!name || !icon || !image) {
                e.preventDefault();
                alert("Please fill in all fields before submitting.");
              }
            });
          </script>

        </div>
      </div>
    </div>
</div>

@endsection
