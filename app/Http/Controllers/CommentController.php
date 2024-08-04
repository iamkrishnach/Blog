<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function postComment(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'comment' => 'required',
        ]);
        $cus = session()->get('cus-auth');
        // Create a new comment for the specified post
        Comment::create([
            'post_id' => $request->id,
            'customer_id' => $cus->name,
            'comment' => $request->comment,
        ]);

        // Redirect back to the post with a success message
        return redirect(url('/'))->with('success', 'Comment added successfully.');
    }
}
