@extends('layouts.layout')

@section('content')
<div class="row justify-content-center">
    <div class="col-12 col-lg-8">
        <div class="card content-card">
            <div class="card-body p-3 p-md-4">
                <h2 class="h4 mb-3">Add Item</h2>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('items.store') }}" method="POST">
                    @csrf
                    <div class="row g-3">
                        <div class="col-12 col-md-6">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="price" class="form-label">Price</label>
                            <input type="number" name="price" class="form-control" required>
                        </div>
                        <div class="col-12">
                            <label for="category" class="form-label">Category</label>
                            <input type="text" name="category" class="form-control" required>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap gap-2 mt-4">
                        <button type="submit" class="btn btn-success">Save</button>
                        <a href="{{ route('items.index') }}" class="btn btn-secondary">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection