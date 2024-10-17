<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh Sách Bài Viết</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        /* Reset mặc định */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Roboto', sans-serif;
        }

        body {
            background-color: #f4f4f4;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        a {
            text-decoration: none;
            color: #fff;
            background-color: #007bff;
            padding: 8px 12px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        a:hover {
            background-color: #0056b3;
        }

        ul {
            list-style: none;
            max-width: 800px;
            margin: 20px auto;
            padding: 0;
        }

        li {
            background-color: #fff;
            margin-bottom: 15px;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .post-title {
            font-size: 20px;
            font-weight: 700;
            margin-bottom: 5px;
            color: #333;
        }

        .post-content {
            font-size: 16px;
            color: #555;
            margin-bottom: 10px;
        }

        .actions {
            display: flex;
            gap: 10px;
        }

        button {
            background-color: #dc3545;
            color: #fff;
            border: none;
            padding: 8px 12px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #c82333;
        }

        .create-post {
            display: block;
            text-align: center;
            margin: 10px 0 20px;
        }
    </style>
</head>
<body>
    <h1>Danh Sách Bài Viết</h1>

    <a href="{{ route('posts.create') }}" class="create-post">Tạo bài viết mới</a>

    @if (session('success'))
        <p style="text-align: center; color: #28a745;">{{ session('success') }}</p>
    @endif

    <ul>
        @foreach ($posts as $post)
            <li>
                <a style="padding:0;backroud-color:while;" href="{{ route('posts.show', $post->id) }}">
                <div class="post-title">{{ $post->title }}</div>
                </a>
                <div class="post-content">{{ $post->content }}</div>
                <div class="actions">
                    <a href="{{ route('posts.show', $post->id) }}">Xem</a>
                    <a href="{{ route('posts.edit', $post->id) }}">Sửa</a>
                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Xóa</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
</body>
</html>
