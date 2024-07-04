<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dtos\PostDto;

class MainController extends Controller
{
    public function index()
    {
        $posts = [
            new PostDto('Título 1', 'Conteúdo 1'),
            new PostDto('Título 2', 'Conteúdo 2'),
            new PostDto('Título 3', 'Conteúdo 3'),
        ];

        return view('indexap', ['post'=> $posts]);
    }
}
