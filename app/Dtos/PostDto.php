<?php

class PostDto {
    public $titulo;
    public $post;

    public function __construct(string $titulo, string $post)
    {
        $this->titulo = $titulo; 
        $this->post = $post;
    }
}