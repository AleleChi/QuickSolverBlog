<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BlogPost;

class BlogsController extends Controller
{
    /**
     * Display a listing of the blog posts.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $posts = BlogPost::all();

        return response()->json([
            'success' => true,
            'data' => $posts,
        ]);
    }

    /**
     * Display the specified blog post.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $post = BlogPost::find($id);

        if (!$post) {
            return response()->json([
                'success' => false,
                'message' => 'Blog post not found',
            ], 404);
        }

        return response()->json([
            'success' => true,
            'data' => $post,
        ]);
    }
}
