@extends('layouts.frontend')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Product
                            <a href="{{ url('/products') }}" class="btn btn-danger float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('products.update', $product->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" value="{{ $product->name }}" autocomplete="off"/>
                            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="mb-3">
                            <label>Description</label>
                            <textarea name="description" rows="3" class="form-control" autocomplete="off">{{ $product->description }}</textarea>
                            @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="mb-3">
                            <label>Price</label>
                            <input type="text" name="price" class="form-control" value="{{ $product->price }}" autocomplete="off"/>
                            @error('price') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="mb-3">
                            <label>Quantity</label>
                            <input type="text" name="quantity" class="form-control" value="{{ $product->quantity }}" autocomplete="off"/>
                            @error('quantity') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                        
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
