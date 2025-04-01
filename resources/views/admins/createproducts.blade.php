@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title mb-5 d-inline">Create Products</h5>

          <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
            @csrf

            <div class="form-outline mb-4 mt-4">
              <label>Name</label>
              <input type="text" name="name" id="form2Example1" class="form-control" placeholder="name" required />
            </div>

            <div class="form-outline mb-4 mt-4">
              <label>Price</label>
              <input type="text" name="price" id="form2Example1" class="form-control" placeholder="price" required />
            </div>

            <div class="form-group">
              <label for="exampleFormControlTextarea1">Description</label>
              <textarea name="description" placeholder="description" class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
            </div>

            <div class="form-group">
              <label for="exampleFormControlSelect1">Select Category</label>
              <select name="category_id" class="form-control" id="exampleFormControlSelect1" required>
                <option value="">-- Select Category --</option>
                @if(isset($allCategories) && count($allCategories) > 0)
                  @foreach ($allCategories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                  @endforeach
                @else
                  <option value="">No categories found</option>
                @endif
              </select>
            </div>

            <div class="form-outline mb-4 mt-4">
              <label>Image</label>
              <input type="file" name="image" id="form2Example1" class="form-control" placeholder="image" required />
            </div>

            <button type="submit" name="submit" class="btn btn-primary mb-4 text-center">Create</button>
          </form>

          <script>
            document.querySelector("form").addEventListener("submit", function (e) {
              const name = document.querySelector('input[name="name"]').value.trim();
              const price = document.querySelector('input[name="price"]').value.trim();
              const description = document.querySelector('textarea[name="description"]').value.trim();
              const category = document.querySelector('select[name="category_id"]').value;
              const image = document.querySelector('input[name="image"]').value;

              if (!name || !price || !description || !category || !image) {
                  e.preventDefault();
                  alert("Please fill in all fields before submitting the form.");
              }
            });
          </script>

        </div>
      </div>
    </div>
</div>

@endsection
