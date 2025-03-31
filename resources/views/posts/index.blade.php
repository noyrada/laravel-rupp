<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 20px;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        a {
            text-decoration: none;
            color: #fff;
            background-color: #007bff;
            padding: 8px 12px;
            border-radius: 5px;
            transition: 0.3s;
        }

        a:hover {
            background-color: #0056b3;
        }

        ul {
            list-style: none;
            padding: 0;
            max-width: 600px;
            margin: 0 auto;
        }

        li {
            background: #fff;
            margin: 10px 0;
            padding: 15px;
            border-radius: 5px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .actions {
            display: flex;
            gap: 10px;
        }

        .delete-form {
            display: inline;
        }

        button {
            background-color: #dc3545;
            color: white;
            border: none;
            padding: 8px 12px;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background-color: #c82333;
        }
    </style>
</head>

<body>
    <h1>Posts</h1>
    <div style="text-align: center; margin-bottom: 20px;">
        <a href="{{ route('posts.create') }}">Create New Post</a>
    </div>
    <ul>
        @foreach ($posts as $post)
            <li>
                <span>{{ $post->title }}</span>
                <div class="actions">
                    <a href="{{ route('posts.edit', $post->id) }}">Edit</a>
                    <form class="delete-form" action="{{ route('posts.destroy', $post->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
</body>

</html>