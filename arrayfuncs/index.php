<?php

class Post
{
    public $title;

    public $published;

    public $author;

    public function __construct($title, $author, $published)
    {
        $this->title = $title;
        $this->author = $author;
        $this->published = $published;
    }

}

$posts = [
    new Post('my first post', 'sw', true),
    new Post('second post', 'sw', true),
    new Post('third post', 'rr', true),
    new Post('4th post', 'fa', false),
];

// $unpublishedPosts = array_filter($posts, function ($post) {

//     return !$post->published;

// });

// $publishedPosts = array_filter($posts, function ($post) {

//     return $post->published;

// });

// $modified = array_map(function ($post) {

//     $post->title = 'yay';

//     return $post;

// }, $posts);

// $col = array_map(function ($post) {

//     return $post->title;

// }, $posts);

// foreach ($posts as $index => $post) {

//     $posts[$index] = (array) $post;

// }

$posts = array_map(function ($post) {
    return (array) $post;
}, $posts);

$cols = array_column($posts, 'author', 'title');

var_dump($cols);
