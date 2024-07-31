<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index($postId)
    {
        $post = BlogPost::findOrFail($postId);
        $comments = Comment::findOrFail($post->id);
        if ($comments->isEmpty()) {
            return response()->json([
                'success' => false,
                'data' => $comments,
            ], 404);
        }

        return response()->json([
            'success' => true,
            'data' => $comments,
        ]);
    }

    public function store(Request $request, $postId)
    {
        $validated = $request->validate([
            'author_name' => 'required|string|max:255',
            'body' => 'required|string',
        ]);

        $post = BlogPost::findOrFail($postId);

        $comment = $post->comments()->create([
            'author_name' => $validated['author_name'],
            'body' => $validated['body'],
        ]);

        return response()->json([
            'success' => true,
            'data' => $comment,
        ], 201);
    }

    public function destroy(Request $request, $postId, $commentId)
    {
        $validated = $request->validate([
            'author_name' => 'required|string|max:255',
        ]);

        $comment = Comment::findOrFail($commentId);

        if ($comment->post_id != $postId || $comment->author_name != $validated['author_name']) {
            return response()->json([
                'success' => false,
                'message' => 'Unauthorized',
            ], 403);
        }

        $comment->delete();

        return response()->json([
            'success' => true,
            'message' => 'Comment deleted',
        ]);
    }
}
