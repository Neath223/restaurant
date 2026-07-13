@extends('layouts.layout')

@section('content')
<div class="card content-card">
    <div class="card-body p-3 p-md-4">
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-2 mb-3">
            <div>
                <h2 class="h4 mb-1">Order List</h2>
                <p class="text-muted mb-0">Monitor orders comfortably on smaller screens.</p>
            </div>
            <a href="{{ route('orders.create') }}" class="btn btn-primary">Add Order</a>
        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">{{ $message }}</div>
        @endif

        <div class="table-responsive">
            <table class="table table-bordered align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th>Ordername</th>
                        <th>Customerno</th>
                        <th>Quantity</th>
                        <th>Amount</th>
                        <th>Status</th>
                        <th class="text-nowrap">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                        <tr>
                            <td>{{ $order->ordername }}</td>
                            <td>{{ $order->customerno }}</td>
                            <td>{{ $order->quantity }}</td>
                            <td>{{ $order->amount }}</td>
                            <td>{{ $order->status }}</td>
                            <td>
                                <div class="d-flex flex-wrap gap-2">
                                    <a href="{{ route('orders.edit', $order->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('orders.destroy', $order->id) }}" method="POST">
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