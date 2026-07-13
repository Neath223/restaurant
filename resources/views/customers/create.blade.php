@extends('layouts.layout')

@section('content')
<div class="row justify-content-center">
    <div class="col-12 col-lg-8">
        <div class="card content-card">
            <div class="card-body p-3 p-md-4">
                <h2 class="h4 mb-3">Add Customer</h2>
                <form action="{{ route('customers.store') }}" method="POST">
                    @csrf
                    <div class="row g-3">
                        <div class="col-12 col-md-6">
                            <label for="customerno" class="form-label">CustomerNo</label>
                            <input type="text" name="customerno" class="form-control" required>
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="text" name="phone" class="form-control" required>
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" name="address" class="form-control" required>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap gap-2 mt-4">
                        <button type="submit" class="btn btn-success">Save</button>
                        <a href="{{ route('customers.index') }}" class="btn btn-secondary">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection