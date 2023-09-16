<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Symfony\Contracts\Service\Attribute\Required;

class PostController extends Controller
{
    public function index(){
        // dd(Request()->has('search'));
        return view('posts.index', [
            'posts' => Post::latest()->filter(request(['search', 'category', 'author']))
            ->paginate(15)->withQueryString(),
        ]);
    }

    public function show(Post $post){
        
        return view('posts.show', [
            'post' => $post,
        ]);
    }
}
