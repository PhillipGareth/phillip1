<!DOCTYPE html>
<html>
<head>
    <title>View Post</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">{{ $post->title }}</h1>
        <div class="card">
            <div class="card-body">
                <p>{{ $post->content }}</p>
            </div>
        </div>
        <div class="mt-3 text-right">
            <a href="/posts" class="btn btn-secondary">Back to All Posts</a>
        </div>
    </div>
</body>
</html>
