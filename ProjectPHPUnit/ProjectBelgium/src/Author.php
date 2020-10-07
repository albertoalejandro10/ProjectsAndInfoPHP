<?php

namespace App;

class Author extends User
{
    protected $created_posts;
    protected $posts = [];

    public function create_post(Post $post){
        $this->posts[] = $post;
    }

    public function get_post(): array{
        return $this->posts;
    }
}