<!DOCTYPE html>
<html>

<head>

    <title>Books</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

    <div class="container mt-5">

        @if(session('success'))
        <div class="alert alert-success">{{session('success')}}</div>
        @endif

        <h3>Books List</h3>

        <a href="/books/create" class="btn btn-primary mb-3">Add Book</a>

        <table class="table table-bordered">

            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Author</th>
                <th>Year</th>
                <th>Action</th>
            </tr>

            @foreach($books as $book)

            <tr>

                <td>{{$book->id}}</td>

                <td>{{$book->title}}</td>

                <td>{{$book->author->name}}</td>

                <td>{{$book->published_year}}</td>

                <td>
                    <a href="/books/view/{{$book->id}}" class="btn btn-info btn-sm">View</a>

                    <a href="/books/edit/{{$book->id}}" class="btn btn-warning btn-sm">Edit</a>

                    <a href="/books/delete/{{$book->id}}" class="btn btn-danger btn-sm">Delete</a>

                </td>

            </tr>

            @endforeach

        </table>

    </div>

</body>

</html>