<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class PostController extends Controller
{
    public function create($id = null)
    {
        $value = null;
        // If an ID is provided, fetch the post with that ID
        if ($id) {
            $value = Post::where('id', $id)->first();
        }
        // Return the view with the fetched data
        return view('Backend.Blogs.AddBlogs', ['value' => $value]);
    }

    public function index()
    {
        $posts = Post::where('user_id', Auth::id())->get();
        return view('Backend.Blogs.BlogList', ['posts' => $posts]);
    }

    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);
        try {
            // Create a new post with the validated data
            Post::create([
                'user_id' => Auth::id(),
                'title' => $request->title,
                'content' => $request->content,
            ]);

            return redirect(url('posts/view'))->with('success', 'Post created successfully.');
            // Commit the transaction and redirect with a success message
            DB::commit();
        } catch (\Throwable $th) {
            // Rollback the transaction and redirect with an error message
            DB::rollBack();
            return redirect()->back()->with(['error' => 'OOPS somthings went wrong']);
        }
    }


    public function update(Request $request, $id)
    {

        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);
        try {
            // Find the post with the specified ID
            $post = Post::where('id', $id)->first();
            $post->update([
                'title' => $request->title,
                'content' => $request->content,
            ]);
            return redirect(url('posts/view'))->with('success', 'Post updated successfully.');
            // Commit the transaction and redirect with a success message
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect()->back()->with(['error' => 'OOPS somthings went wrong']);
        }
    }

    public function destroy($id)
    {

        try {
            // Delete the post with the specified ID
            $data = Post::where('id', $id)->delete();
            return redirect()->back()->with(['error' => 'Post Deleted Successfully']);
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect()->back()->with(['error' => 'OOPS somthings went wrong']);
        }
    }
}
