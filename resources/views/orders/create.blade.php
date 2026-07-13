@extends('layouts.layout')

@section('content')
<div class="row justify-content-center">
    <div class="col-12 col-lg-8">
        <div class="card content-card">
            <div class="card-body p-3 p-md-4">
                <h2 class="h4 mb-3">Order Item</h2>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('orders.store') }}" method="POST">
                    @csrf
                    <div class="row g-3">
                        <div class="col-12 col-md-6">
                            <label for="ordername" class="form-label">Order Name</label>
                            <input type="text" name="ordername" class="form-control" required>
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="customerno" class="form-label">Customer No</label>
                            <input type="text" name="customerno" class="form-control" required>
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="quantity" class="form-label">Quantity</label>
                            <input type="number" name="quantity" class="form-control" required>
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="amount" class="form-label">Amount</label>
                            <input type="number" name="amount" class="form-control" required>
                        </div>
                        <div class="col-12">
                            <label for="status" class="form-label">Status</label>
                            <input type="text" name="status" class="form-control" required>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap gap-2 mt-4">
                        <button type="submit" class="btn btn-success">Save</button>
                        <a href="{{ route('orders.index') }}" class="btn btn-secondary">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection