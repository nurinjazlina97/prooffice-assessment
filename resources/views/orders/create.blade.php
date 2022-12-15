@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="" method="post">
                @csrf
                <div class="form-group">
                        <label for="product_id">Product</label><br>
                        @foreach($products as $product)
                            <input type="checkbox" name="product_id[]" value="{{$product->id}}">
                            <span class="fw-bold ps-2 fs-6"> {{ $product->name }} - RM{{ $product->price }}</span>
                            <br>
                        @endforeach
                </div>
                <br>
                    <button type="submit" name="submit" value="submit" class="btn btn-primary mb-2">Create Order</button>
                    <a href="{{ route('orders')}}" class="btn btn-link">Cancel</a>
          </form>
        </div>
    </div>
</div>
@endsection