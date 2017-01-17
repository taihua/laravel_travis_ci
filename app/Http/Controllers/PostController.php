<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{

    protected $post;

    public function __construct(Post $post)
    {
        $this->post = $post;
    }
    //
    public function index()
    {
        $data = [
            'posts' => $this->post->all(),
        ];

        return view('post', $data);
    }
}
