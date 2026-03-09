<!DOCTYPE html>
<html>

<head>
    <title>Add Author</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

    <div class="container mt-5">

        <div class="card">

            <div class="card-header bg-primary text-white">
                <h4>Add Author</h4>
            </div>

            <div class="card-body">

                <form action="/authors/store" method="POST">

                    @csrf

                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter author name">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter email">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Bio</label>
                        <textarea name="bio" class="form-control" rows="3" placeholder="Short bio"></textarea>
                    </div>

                    <button type="submit" class="btn btn-success">Save Author</button>

                    <a href="/authors-ui" class="btn btn-secondary">Back</a>

                </form>

            </div>

        </div>

    </div>

</body>

</html>