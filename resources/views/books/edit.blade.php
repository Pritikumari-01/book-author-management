<!DOCTYPE html>
<html>

<head>

    <title>Edit Book</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

    <div class="container mt-5">

        <div class="card">

            <div class="card-header bg-warning">

                Edit Book

            </div>

            <div class="card-body">

                <form action="/books/update/{{$book->id}}" method="POST">

                    @csrf

                    <div class="mb-3">

                        <label>Title</label>

                        <input type="text" name="title"
                            value="{{$book->title}}"
                            class="form-control">

                    </div>

                    <div class="mb-3">

                        <label>Author</label>

                        <select name="author_id" class="form-control">

                            @foreach($authors as $author)

                            <option value="{{$author->id}}"
                                @if($book->author_id==$author->id) selected @endif>

                                {{$author->name}}

                            </option>

                            @endforeach

                        </select>

                    </div>

                    <div class="mb-3">

                        <label>Published Year</label>

                        <input type="number"
                            name="published_year"
                            value="{{$book->published_year}}"
                            class="form-control">

                    </div>

                    <button class="btn btn-primary">Update</button>

                    <a href="/books" class="btn btn-secondary">Back</a>

                </form>

            </div>

        </div>

    </div>

</body>

</html>