<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Post</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 20px;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .container {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        h1 {
            color: #d9534f;
        }

        p {
            font-size: 16px;
            color: #333;
        }

        .actions {
            margin-top: 20px;
            display: flex;
            justify-content: space-between;
        }

        button {
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: 0.3s;
        }

        .cancel {
            background-color: #6c757d;
            color: white;
        }

        .cancel:hover {
            background-color: #5a6268;
        }

        .delete {
            background-color: #dc3545;
            color: white;
        }

        .delete:hover {
            background-color: #c82333;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Delete Post</h1>
        <p>Are you sure you want to delete this post?</p>
        <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <div class="actions">
                <a href="{{ route('posts.index') }}" class="cancel">Cancel</a>
                <button type="submit" class="delete">Delete</button>
            </div>
        </form>
    </div>
</body>

</html>
