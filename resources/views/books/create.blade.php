<!DOCTYPE html>
<html>

<head>

    <title>Add Book</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

    <div class="container mt-5">

        <div class="card">

            <div class="card-header bg-primary text-white">

                Add Book

            </div>

            <div class="card-body">

                <form action="/books/store" method="POST">

                    @csrf

                    <div class="mb-3">

                        <label>Title</label>

                        <input type="text" name="title" class="form-control">

                    </div>

                    <div class="mb-3">

                        <label>Author</label>

                        <select name="author_id" class="form-control">

                            @foreach($authors as $author)

                            <option value="{{$author->id}}">{{$author->name}}</option>

                            @endforeach

                        </select>

                    </div>

                    <div class="mb-3">

                        <label>Published Year</label>

                        <input type="number" name="published_year" class="form-control">

                    </div>

                    <button class="btn btn-success">Save</button>

                    <a href="/books" class="btn btn-secondary">Back</a>

                </form>

            </div>

        </div>

    </div>

</body>

</html>