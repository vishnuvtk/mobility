@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title mb-5 d-inline">Edit Products</h5>

                <form method="POST" action="{{ route('products.update', $product->id) }}" enctype="multipart/form-data">
                    @csrf

                    <div class="form-outline mb-4 mt-4">
                        <label>Name</label>
                        <input type="text" value="{{ $product->name }}" name="name" class="form-control" placeholder="Enter Product Name" required>
                    </div>

                    <div class="form-outline mb-4 mt-4">
                        <label>Price ($)</label>
                        <input type="text" value="{{ $product->price }}" name="price" class="form-control" placeholder="Enter Price" required>
                    </div>

                    <div class="form-outline mb-4 mt-4">
                        <label>Description</label>
                        <input type="text" value="{{ $product->description }}" name="description" class="form-control" placeholder="Enter Description" required>
                    </div>

                    <div class="form-outline mb-4 mt-4">
                        <label>Image</label>
                        <input type="file" name="image" class="form-control">
                    </div>

                    <button type="submit" name="submit" class="btn btn-primary mb-4 text-center">Update</button>
                </form>

                <script>
                    document.querySelector("form").addEventListener("submit", function (e) {
                        const name = document.querySelector('input[name="name"]').value.trim();
                        const price = document.querySelector('input[name="price"]').value.trim();
                        const description = document.querySelector('input[name="description"]').value.trim();
                        const image = document.querySelector('input[name="image"]');

                        let errorMessage = "";

                        if (!name || !price || !description || (!image.value && image.hasAttribute("required"))) {
                            errorMessage = "Please fill in all the fields before submitting.";
                        }

                        if (errorMessage) {
                            e.preventDefault();
                            alert(errorMessage);
                        }
                    });
                </script>

            </div>
        </div>
    </div>
</div>

@endsection
