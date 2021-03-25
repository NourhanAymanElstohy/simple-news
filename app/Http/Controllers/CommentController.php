<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
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
        return redirect()->route('news.index')->with('suceess', 'comment added successfully');
    }

    public function update(Request $request)
    {
        $request->validate([
            'comment' => 'required'
        ]);

        $comment = Comment::find($request->comment_id);
        $comment->update(['comment' => $request->comment]);
        return redirect()->route('news.index')->with('success', 'Comment updated successfully');
    }

    public function destroy($id)
    {
        $comment = Comment::findOrFail($id);
        $comment->delete();
        return redirect()->route('news.index')->with('success', 'comment deleted successfully');
    }
}
