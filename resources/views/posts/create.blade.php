<!DOCTYPE html>
<html>
<head>
    <title>Create Post</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Create New Post</h1>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form method="POST" action="/posts">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control" id="title" placeholder="Post Title" required>
                    </div>
                    <div class="form-group">
                        <label for="content">Content</label>
                        <textarea name="content" class="form-control" id="content" rows="5" placeholder="Post Content" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-success btn-block">Create Post</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
