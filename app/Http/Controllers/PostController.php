<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();

        return $posts;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // No futuro, vai só exibir um formulário

        // $new_post = [
        //     'title' => 'Meu Primeiro Post',
        //     'content' => 'Conteúdo Qualquer',
        //     'author' => 'Davi'
        // ];
        // Forma mais convencional de criar um registro no Database
        // $post = new Post($new_post);
        // $post->save();


        // Forma menos convencional
        $post = new Post();

        $post->title = 'Meu Novo Post';
        $post->content = 'Conteúdo do post';
        $post->author = 'Nikola Tesla';
        $post->save();
        
        return $post;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // No futuro, receberá um post com um novo recurso.
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $post = new Post();

        $post = $post->find($id);
        //O find busca pela Primary Key (id).

        return $post;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //$post = Post::find(1);
        //$post->content = 'Meu conteúdo atualizado';
        //$post->save();
        $posts = Post::find($id)->update([
            'author' => 'Alessandro',
            'title' => 'Alterado'
        ]);
        return $posts;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
