<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        # code...
    }

    public function store(Request $request)
    {
        $request->validate([
            'comment' => 'required',
        ]);
        Comment::create([
            'comment' => $request->comment,
            'news_id' => $request->news,
            'user_id' => auth()->id(),
        ]);
        return redirect()->route('news.index')->with('suceess', 'comment added');
    }

    public function edit()
    {
        # code...
    }

    public function update()
    {
        # code...
    }

    public function destroy()
    {
        # code...
    }
}
