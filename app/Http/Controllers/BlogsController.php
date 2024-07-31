<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogPost;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Toastr;

class BlogsController extends Controller
{
    public function index() {
        $page_title = 'Blogs Page';
        $posts = BlogPost::orderBy('updated_at', 'DESC')->get();
        return view('blog.index', compact('page_title', 'posts'));
    }

    public function show($id)
    {
        $page_title = 'Blogs Page';
        $post = BlogPost::findOrFail($id);
        return view('blog.edit', compact('post', 'page_title'));
    }

    public function create() {
        $page_title = 'New Blog Post';
        return view('blog.create', compact('page_title'));
    }

    public function upload(Request $request)
    {
        
        if ($request->hasFile('upload')) {
            $originalName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originalName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;
            $request->file('upload')->move(public_path('media'), $fileName);
            $url = asset('media/' . $fileName);

            return response()->json([
                'fileName' => $fileName, 'uploaded' => 1, 'url' => $url
            ]);
        }

        return response()->json(['error' => 'No file uploaded'], 400);
    }

    public function store(Request $request)
    {
        //dd($request->all());
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'body' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $body = $validated['body'];
        $bodyBase64 = base64_encode($body);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images'), $filename);
            $imagePath = 'images/' . $filename;
        }

        BlogPost::create([
            'title' => $validated['title'],
            'author' => $validated['author'],
            'body' => $bodyBase64,
            'image' => $imagePath ? $imagePath : null,
        ]);

        toastr()->success('Blog post created successfully.');
        return back();
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'body' => 'required|string',
        ]);

        $post = BlogPost::findOrFail($id);
        $post->title = $request->input('title');
        $post->author = $request->input('author');

        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($post->image && file_exists(public_path($post->image))) {
                unlink(public_path($post->image));
            }
    
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images'), $filename);
            $post->image = 'images/' . $filename;
        }

        $post->body = base64_encode($request->input('body'));
        $post->updated_at = Carbon::now();
        $post->save();

        toastr()->success('success', 'Post updated successfully.');
        return back();
    }

    public function destroy($id)
    {
        $post = BlogPost::findOrFail($id);

        // Delete the image if it exists
        if ($post->image && file_exists(public_path('images/' . $post->image))) {
            unlink(public_path('images/' . $post->image));
        }

        // Delete the post
        $post->delete();

        toastr()->success('Blog post deleted successfully.');
        return back(); 
    }
}
