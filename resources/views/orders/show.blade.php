@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label>Customer Name:</label>
                        <input type="text" value="{{ $order->user->name }}"class="form-control"readonly>
                    </div>
                    <div class="form-group">
                        <label>Products Ordered:</label>
                        @foreach($order->products as $product)
                            <input type="text" value="{{ $product->name }} - RM{{$product->price}}" class="form-control" readonly>
                        @endforeach
                    </div>
                    <a href="{{ route('orders')}}" class="btn btn-link">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection