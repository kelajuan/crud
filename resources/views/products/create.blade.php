@extends('layouts.frontend')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Create Product
                            <a href="{{ url('/products')}}" class="btn btn-danger float-end" >Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('products.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" autocomplete="off"/>
                            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="mb-3">
                            <label>Description</label>
                            <textarea name="description" rows="3" class="form-control" autocomplete="off"></textarea>
                            @error('description') <span class="text-danger">{{ $message }}</span>  @enderror
                        </div>
                        <div class="mb-3">
                            <label>Price</label>
                            <input type="text" name="price" class="form-control" autocomplete="off"/>
                            @error('price') <span class="text-danger">{{ $message }}</span>  @enderror
                        </div>

                        <div class="mb-3">
                            <label>Quantity</label>
                            <input type="text" name="quantity" class="form-control" autocomplete="off"/>
                            @error('price') <span class="text-danger">{{ $message }}</span>  @enderror
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection