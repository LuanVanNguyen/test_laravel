<?php

namespace App\Http\Controllers;
use App\Models\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{

    // Hiển thị danh sách bài viết
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    // Hiển thị form tạo bài viết mới
    public function create()
    {
        return view('posts.create');
    }

    // Lưu bài viết mới vào database
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        Post::create($request->all());

        return redirect()->route('posts.index')->with('success', 'Bài viết đã được tạo thành công!');
    }

    // Hiển thị chi tiết bài viết
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    // Hiển thị form chỉnh sửa bài viết
    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    // Cập nhật bài viết trong database
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        $post->update($request->all());

        return redirect()->route('posts.index')->with('success', 'Bài viết đã được cập nhật!');
    }

    // Xóa bài viết
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('posts.index')->with('success', 'Bài viết đã được xóa!');
    }
}
