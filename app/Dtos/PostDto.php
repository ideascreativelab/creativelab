<?php

namespace App\Dtos;

class PostDto {
    public string $titulo;
    public string $post;

    public function __construct(string $titulo, string $post)
    {
        $this->titulo = $titulo; 
        $this->post = $post;
    }
}