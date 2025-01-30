<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Details</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons (Optional) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
    @if (session('success'))
    <p style="color: green;">{{ session('success') }}</p>
    @endif
    <div class="container mt-5">
        <h1 class="text-center mb-4">Admin Details</h1>
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Address</th>
                        <th scope="col">Actions</th> <!-- Optional: Column for actions -->
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $abc)
                    <tr>
                        <th scope="row">{{ $abc['id'] }}</th>
                        <td>{{ $abc['name'] }}</td>
                        <td>{{ $abc['address'] }}</td>
                        <td>
                            <!-- Optional: Add action buttons with icons -->
                            <a href="#" class="btn btn-sm btn-primary"><i class="bi bi-pencil"></i> Edit</a>
                            <a href="#" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i> Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
