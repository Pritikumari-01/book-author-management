<!DOCTYPE html>
<html>

<head>

    <title>Author Details</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

    <div class="container mt-5">

        <div class="card">

            <div class="card-header bg-info text-white">
                <h4>Author Details</h4>
            </div>

            <div class="card-body">

                <p><strong>Name:</strong> {{ $author->name }}</p>

                <p><strong>Email:</strong> {{ $author->email }}</p>

                <p><strong>Bio:</strong> {{ $author->bio }}</p>

                <h5>Books</h5>

                <ul class="list-group">

                    @foreach($author->books as $book)

                    <li class="list-group-item">{{ $book->title }}</li>

                    @endforeach

                </ul>

                <br>

                <a href="/authors-ui" class="btn btn-secondary">Back</a>

            </div>

        </div>

    </div>

</body>

</html>