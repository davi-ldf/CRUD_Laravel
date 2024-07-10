<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function create(Request $request) {
        $new_post = [
            'title' => 'Meu Primeiro Post',
            'content' => 'Conteúdo Qualquer',
            'author' => 'Davi'
        ];
        // Forma mais convencional de criar um registro no Database
        // $post = new Post($new_post);
        // $post->save();

        $post = new Post();

        $post->title = 'Meu Segundo Post';
        $post->content = 'Conteúdo do post';
        $post->author = 'Nikola Tesla';
        $post->save();
        dd($post);
    }
}
