@extends('layouts.app')

@section('content')
<div id="page-content" class="page-content">
    <div class="banner">
        <div class="jumbotron jumbotron-bg text-center rounded-0" style="margin-top: -25px; background-image: url('{{asset('assets/img/bg-header.jpg')}}');">
            <div class="container">
                <h1 class="pt-5">
                    Checkout
                </h1>
                <p class="lead">
                    Discover the Latest Smartphones at Unbeatable Prices.
                </p>
            </div>
        </div>
    </div>

    <section id="checkout">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-7">
                    <h5 class="mb-3">BILLING DETAILS</h5>
                    <form action="{{route('products.proccess.checkout')}}" method="POST" class="bill-detail">
                        <fieldset>
                            @csrf
                            <div class="form-group row">
                                <div class="col">
                                    <input class="form-control" name="name" placeholder="Name" type="text" required>
                                </div>
                                <div class="col">
                                    <input class="form-control" name="last_name" placeholder="Last Name" type="text" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <textarea class="form-control" name="address" placeholder="Address" required></textarea>
                            </div>
                            <div class="form-group">
                                <input class="form-control" name="town" placeholder="Town / City" type="text" required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" name="state" placeholder="State / Country" type="text" required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" name="zip_code" placeholder="Postcode / Zip" type="text" required>
                            </div>
                            <div class="form-group row">
                                <div class="col">
                                    <input class="form-control" name="email" placeholder="Email Address" type="email" required>
                                </div>
                                <div class="col">
                                    <input class="form-control" name="phone_number" placeholder="Phone Number" type="tel" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col">
                                    <input class="form-control" name="user_id" value="{{Auth::user()->id}}" type="hidden">
                                </div>
                                <div class="col">
                                    <input class="form-control" name="price" value={{ $checkoutSubtotal + 20}} type="hidden">
                                </div>
                            </div>

                            <div class="form-group">
                                <textarea class="form-control" name="order_notes" placeholder="Order Notes" required></textarea>
                            </div>
                        </fieldset>

                        <div class="form-group">
                            <button class="btn btn-primary" style="width: 70px; height: 40px;" name="submit" type="submit">Submit</button>
                        </div>
                    </form>

                    <!-- JS Validation -->
                    <script>
                        document.querySelector(".bill-detail").addEventListener("submit", function(e) {
                            const fields = [
                                'name', 'last_name', 'address', 'town',
                                'state', 'zip_code', 'email', 'phone_number', 'order_notes'
                            ];

                            let hasError = false;

                            fields.forEach(field => {
                                const input = document.querySelector(`[name="${field}"]`);
                                if (!input || input.value.trim() === "") {
                                    hasError = true;
                                }
                            });

                            if (hasError) {
                                e.preventDefault();
                                alert("Please fill in all required fields before submitting.");
                            }
                        });
                    </script>
                </div>

                <div class="col-xs-12 col-sm-5">
                    <div class="holder">
                        <h5 class="mb-3">YOUR ORDER</h5>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Products</th>
                                        <th class="text-right">Subtotal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cartItems as $product)
                                    <tr>
                                        <td>{{$product->name}} x{{$product->qty}}</td>
                                        <td class="text-right">CAD {{$product->subtotal}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfooter>
                                    <tr>
                                        <td><strong>Cart Subtotal</strong></td>
                                        <td class="text-right">CAD {{$checkoutSubtotal}}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Shipping</strong></td>
                                        <td class="text-right">CAD 20</td>
                                    </tr>
                                    <tr>
                                        <td><strong>ORDER TOTAL</strong></td>
                                        <td class="text-right"><strong>CAD {{$checkoutSubtotal + 20}}</strong></td>
                                    </tr>
                                </tfooter>
                            </table>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
