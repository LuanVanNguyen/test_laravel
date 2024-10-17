<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Thêm Bài Post</title>
  <style>
        * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        }

        body {
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        }

        .container {
        width: 400px;
        background-color: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        h1 {
        text-align: center;
        margin-bottom: 20px;
        color: #333;
        }

        .form-group {
        margin-bottom: 15px;
        }

        label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
        }

        input, textarea {
        width: 100%;
        padding: 10px;
        margin-top: 5px;
        border: 1px solid #ccc;
        border-radius: 5px;
        }

        button {
        width: 100%;
        padding: 10px;
        background-color: #28a745;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        }

        button:hover {
        background-color: #218838;
        }

        .error-message {
        color: red;
        font-size: 14px;
        margin-top: 5px;
        display: none;
        }

  </style>
</head>
<body>
  <div class="container">
    <h1>Thêm Bài Post Mới</h1>
    <form id="postForm" action="{{route('post.store')}}" method="POST">
      <div class="form-group">
        <label for="title">Tiêu đề:</label>
        <input type="text" id="title" placeholder="Nhập tiêu đề bài viết">
        <span class="error-message" id="titleError"></span>
      </div>

      <div class="form-group">
        <label for="content">Nội dung:</label>
        <textarea id="content" rows="5" placeholder="Nhập nội dung bài viết"></textarea>
        <span class="error-message" id="contentError"></span>
      </div>

      <button type="submit">Đăng bài</button>
    </form>
  </div>
</body>
</html>
