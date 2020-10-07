<?php

namespace App;

class Post{
    protected $title;
    protected $content;
    protected $category;

    public function add_title(string $title){
        $this->title = $title;
    }

    public function add_content(string $content){
        $this->content = $content;
    }

    public function add_category(Category $category){
        $this->category = $category;
    }

    public function get_post(): string{
        return "<p>Titulo: $this->title <br>
                Contenido: $this->content <br>
                Categoria: {$this->category->get_name()} </p>";
    }
}