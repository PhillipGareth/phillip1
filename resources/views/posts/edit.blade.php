<!DOCTYPE html>
<html>
<head>
    <title>Edit Post</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Edit Post</h1>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form method="POST" action="/posts/{{ $post->id }}">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control" id="title" value="{{ $post->title }}" required>
                    </div>
                    <div class="form-group">
                        <label for="content">Content</label>
                        <textarea name="content" class="form-control" id="content" rows="5" required>{{ $post->content }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-success btn-block">Update Post</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
