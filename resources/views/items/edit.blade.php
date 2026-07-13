<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Item</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-4">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0">Edit Item</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('items.update', $item->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="name" class="form-label">Name:</label>
                        <input type="text" id="name" name="name" value="{{ $item->name }}" class="form-control" placeholder="Enter Name" required>
                    </div>

                    <div class="mb-3">
                        <label for="phone" class="form-label">Price:</label>
                        <input type="number" id="price" name="price" value="{{ $item->price }}" class="form-control" placeholder="Enter Price" required>
                    </div>

                    <div class="mb-3">
                        <label for="address" class="form-label">Category:</label>
                        <input type="text" id="category" name="category" value="{{ $item->category }}" class="form-control" placeholder="Enter Category" required>
                    </div>

                    
                    

                    <div class="text-end">
                        <button type="submit" class="btn btn-success">Update Item</button>
                        <a href="{{ route('items.index') }}" class="btn btn-secondary">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (Optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>