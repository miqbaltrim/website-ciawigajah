<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'body' => 'required',
            'post_id' => 'required|exists:posts,id',
        ]);

        Comment::create($validatedData);

        return redirect()->back()->with('success', 'Comment created successfully.');
    }
}

