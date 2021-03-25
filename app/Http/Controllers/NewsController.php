<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $newses = News::all();
        return view('news.index', compact('newses'));
    }

    // public function create()
    // {
    //     return view('news.create');
    // }

    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'title' => 'required',
    //         'body' => 'required',
    //     ]);
    //     News::create($request->validated());
    //     return redirect()->route('news.index')->with('success', 'News added successfully.');
    // }

    // public function edit(News $news)
    // {
    //     return view('news.show', compact('news'));
    // }

    // public function update()
    // {
    //     # code...
    // }

    // public function destroy(News $news)
    // {
    //     $news->delete();
    //     return redirect()->route('news.index')->with('success', 'News deleted successfully');
    // }
}
