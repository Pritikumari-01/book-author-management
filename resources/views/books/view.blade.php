<!DOCTYPE html>
<html>

<head>

    <title>View Book</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

    <div class="container mt-5">

        <div class="card">

            <div class="card-header bg-info text-white">
                <h4>Book Details</h4>
            </div>

            <div class="card-body">

                <p>
                    <strong>Title:</strong> {{ $book->title }}
                </p>

                <p>
                    <strong>Author:</strong> {{ $book->author->name }}
                </p>

                <p>
                    <strong>Published Year:</strong> {{ $book->published_year }}
                </p>

                <a href="/books" class="btn btn-secondary">Back</a>

            </div>

        </div>

    </div>

</body>

</html>