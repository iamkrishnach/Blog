<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    #fetch all blogs 
    public function indexUser()
    {
        $cus = session()->get('cus-auth');

        $data = Post::get();
        return view('website.Blog.AllBlog', ['data' => $data, 'cus' => $cus]);
    }

    #fetch specific blog by id/slug
    public function blogdata($id)
    {
        $cus = session()->get('cus-auth');
        $data = Post::with('comments')->where('id', $id)->first();

        return view('website.Blog.BlogDetail', ['data' => $data, 'cus' => $cus]);
    }
}
