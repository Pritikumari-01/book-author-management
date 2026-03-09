<!DOCTYPE html>
<html>

<head>

    <title>Authors List</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

    <div class="container mt-5">

        <div class="d-flex justify-content-between mb-3">

            <h3>Authors List</h3>

            <a href="/authors/create" class="btn btn-primary">Add Author</a>

        </div>

        <table class="table table-bordered table-striped">

            <thead class="table-dark">

                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>

            </thead>

            <tbody>

                @foreach($authors as $author)

                <tr>

                    <td>{{ $author->id }}</td>
                    <td>{{ $author->name }}</td>
                    <td>{{ $author->email }}</td>

                    <td>

                        <a href="/authors/view/{{ $author->id }}" class="btn btn-info btn-sm">View</a>

                        <a href="/authors/edit/{{ $author->id }}" class="btn btn-warning btn-sm">Edit</a>

                        <a href="/authors/delete/{{ $author->id }}" class="btn btn-danger btn-sm">Delete</a>

                    </td>

                </tr>

                @endforeach

            </tbody>

        </table>

    </div>

</body>

</html>