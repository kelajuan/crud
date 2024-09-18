@extends('layouts.frontend')

@section('content')

<button>
    <a href="{{ url('dashboard') }}" class="btn btn-danger float-start margin-left:200px ">Back</a><br>
</button>
<div class="container">
    <div class="row">
        <div class="col-md-12">

            @session('status')
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endsession

            <div class="card">
                <div class="card-header">
                    <h4>Products List
                        <a href="{{ url('products/create') }}" class="btn btn-primary float-end">Add Products</a>
                    </h4>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td>{{ $product->id }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->description }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>{{ $product->quantity }}</td>
                                    <td>
                                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-success">Edit</a>
                                        <a href="{{ route('products.show', $product->id) }}" class="btn btn-info">Show</a>
                                        
                                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                        {{ $products->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection