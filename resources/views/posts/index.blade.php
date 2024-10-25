<!DOCTYPE html>
<html>
<head>
    <title>All Posts</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">All Posts</h1>
        <div class="text-right mb-3">
            <a href="/posts/create" class="btn btn-primary">Create New Post</a>
        </div>
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>Title</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td>{{ $post->title }}</td>
                        <td>
                            <a href="/posts/{{ $post->id }}" class="btn btn-info btn-sm">View</a>
                            <a href="/posts/{{ $post->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                            <form action="/posts/{{ $post->id }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
