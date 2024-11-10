<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;
use App\Models\Author;

class PostsController extends Controller
{
    public function content()
    {
        return view('content');
    }

    public function listPost()
    {
        $data = Posts::query();
        $posts = $data->take(10)->latest()->get();
        $post_latest = $data->latest()->first();

        $top_authors = Author::withCount('post')
            ->orderBy('post_count', 'desc')
            ->take(5)
            ->get();

        return view('post', [
            'posts' => $posts,
            'post_latest' => $post_latest,
            'top_authors' => $top_authors
        ]);
    }

    public function create() {
        $authors = Author::all();
        return view('create-post', ['authors' => $authors]);
    }

    public function edit($id)
    {
        $post = Posts::find($id);
        $authors = Author::all();
        return view('edit-post', ['post' => $post, 'authors' => $authors]);
    }

    //crud

    public function store(Request $request)
    {
        $post = new Posts;
        $post->title = $request->title;
        $post->content = $request->content;
        $post->author_id = $request->author_id;
        $post->save();
        return redirect()->route('post.list')->with('success', 'Postingan berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $post = Posts::find($id);
        $post->title = $request->title;
        $post->content = $request->content;
        $post->author_id = $request->author_id;
        $post->save();
        return redirect()->route('post.list')->with('success', 'Postingan berhasil diupdate');
    }


    public function delete($id)
    {
        $post = Posts::find($id);
        $post->delete();
        return redirect()->route('post.list')->with('success', 'Postingan berhasil dihapus');
    }

    public function show($id)
    {
        $post = Posts::find($id);
        return view('show-post', ['post' => $post]);
    }
}
