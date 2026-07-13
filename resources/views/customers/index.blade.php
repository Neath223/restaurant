@extends('layouts.layout')

@section('content')
<div class="card content-card">
    <div class="card-body p-3 p-md-4">
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-2 mb-3">
            <div>
                <h2 class="h4 mb-1">Customer List</h2>
                <p class="text-muted mb-0">Manage your customer records from any device.</p>
            </div>
            <a href="{{ route('customers.create') }}" class="btn btn-primary">Add Customer</a>
        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">{{ $message }}</div>
        @endif

        <div class="table-responsive">
            <table class="table table-bordered align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th>CustomerNo</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th class="text-nowrap">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($customers as $customer)
                        <tr>
                            <td>{{ $customer->customerno }}</td>
                            <td>{{ $customer->name }}</td>
                            <td>{{ $customer->phone }}</td>
                            <td>{{ $customer->address }}</td>
                            <td>
                                <div class="d-flex flex-wrap gap-2">
                                    <a href="{{ route('customers.edit', $customer->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('customers.destroy', $customer->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection