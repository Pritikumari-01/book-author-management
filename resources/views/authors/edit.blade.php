<!DOCTYPE html>
<html>

<head>

    <title>Edit Author</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

    <div class="container mt-5">

        <div class="card">

            <div class="card-header bg-warning">
                <h4>Edit Author</h4>
            </div>

            <div class="card-body">

                <form action="/authors/update/{{ $author->id }}" method="POST">

                    @csrf

                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" name="name" value="{{ $author->name }}" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" value="{{ $author->email }}" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Bio</label>
                        <textarea name="bio" class="form-control">{{ $author->bio }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>

                    <a href="/authors-ui" class="btn btn-secondary">Back</a>

                </form>

            </div>

        </div>

    </div>

</body>

</html>