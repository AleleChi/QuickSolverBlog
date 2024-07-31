<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BlogPost;
use App\Models\Like;

class LikeController extends Controller
{
    public function store(Request $request, $postId)
    {
        $validated = $request->validate([
            'author_name' => 'required|string|max:255',
        ]);

        $post = BlogPost::findOrFail($postId);

        $like = $post->likes()->create([
            'author_name' => $validated['author_name'],
        ]);

        return response()->json([
            'success' => true,
            'data' => $like,
        ], 201);
    }

    public function destroy(Request $request, $postId)
    {
        $validated = $request->validate([
            'author_name' => 'required|string|max:255',
        ]);

        $post = BlogPost::findOrFail($postId);
        $post->likes()->where('author_name', $validated['author_name'])->delete();

        return response()->json([
            'success' => true,
            'message' => 'Like removed',
        ]);
    }
}
