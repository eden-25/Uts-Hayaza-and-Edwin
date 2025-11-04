<?php

namespace App\Models;

class Post
{
    private static $posts = [
        [
            'id' => 1,
            'title' => 'Belajar Laravel Framework',
            'author' => 'Ahmad Ridwan',
            'date' => '2024-11-01',
            'category' => 'Laravel',
            'excerpt' => 'Laravel adalah framework PHP yang populer dengan arsitektur MVC yang elegan.'
        ],
        [
            'id' => 2,
            'title' => 'Pengenalan Blade Templating',
            'author' => 'Siti Nurhaliza',
            'date' => '2024-11-02',
            'category' => 'Blade',
            'excerpt' => 'Blade adalah template engine bawaan Laravel yang powerful dan mudah digunakan.'
        ],
    ];

    public static function all()
    {
        return self::$posts;
    }

    public static function count()
    {
        return count(self::$posts);
    }

    public static function find($id)
    {
        $posts = array_filter(self::$posts, function($post) use ($id) {
            return $post['id'] == $id;
        });
        
        return reset($posts) ?: null;
    }
}