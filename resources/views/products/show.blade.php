@extends('layouts.frontend')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Show Product Details
                            <a href="{{ url('/products') }}" class="btn btn-danger float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <div class="mb-3">
                            <label>Name</label>
                            <p>
                                {{ $product->name }}
                            </p>
                        </div>

                        <div class="mb-3">
                            <label>Description</label>
                            <p>
                            {{ $product->description }}
                            </p>
                        </div>

                        <div class="mb-3">
                            <label>Price</label>
                            <p>
                            {{ $product->price }}
                            </p>
                        </div>

                        <div class="mb-3">
                            <label>Quantity</label>
                            <p>
                            {{ $product->quantity }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
