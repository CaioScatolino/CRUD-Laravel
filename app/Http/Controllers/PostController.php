<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create(Request $r)
    {
        $new_post = [
            'title' => 'Segundo Post',
            'content' => 'Dois conteúdo',
            'author' => 'Caio2',
        ];

        //Forma mais convencional de criar um registro num banco
        $post = new Post($new_post);
        $post->save();

        dd($post);
    }

    public function read(Request $r)
    {
        $post = new Post();
        $post = $post->find(1);

        return $post;
    }
    public function all(Request $r)
    {
        $posts = Post::all();

        return $posts;
    }
}
