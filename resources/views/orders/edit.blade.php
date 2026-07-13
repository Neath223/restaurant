@extends('layouts.layout')

@section('content')
<div class="container mt-5">
    <h2>Edit Order</h2>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{ route('orders.update', $order->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="ordername">Order Name</label>
            <input type="text" name="ordername" class="form-control" value="{{ $order->ordername }}" required>
        </div>
        <div class="form-group">
            <label for="customerno">Customer No</label>
            <input type="text" name="customerno" class="form-control" value="{{ $order->customerno }}" required>
        </div>
        <div class="form-group">
            <label for="quantity">Quantity</label>
            <input type="number" name="quantity" class="form-control" value="{{ $order->quantity }}" required>
        </div>
        <div class="form-group">
            <label for="amount">Amount</label>
            <input type="number" name="amount" class="form-control" value="{{ $order->amount }}" required>
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <input type="text" name="status" class="form-control" value="{{ $order->status }}" required>
        </div>
        <button type="submit" class="btn btn-success mt-3">Update</button>
        <a href="{{ route('orders.index') }}" class="btn btn-secondary mt-3">Cancel</a>
    </form>
</div>
@endsection