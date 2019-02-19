<?php
class Post 
{
    public $title;
    public $published;

    public function __construct($title, $published)
    {
        $this->title = $title;
        $this->published = $published;
    }
}

$posts = [
    new Post('My First Post', true),
    new Post('My Second Post', true),
    new Post('My Third Post', true),
    new Post('My Fourth Post', false)
];

foreach ($posts as $post) 
{
    $post->published = true;
}



/**
$unpublishedPosts = array_filter($posts, function($post) {
    return !$post->published;
});
*/

/*
$modified = array_map(function($post) {
    $post->published = true;
    return $post;
}, $posts);
*/

/*
$modified = array_map(function($post) {
    return (array) $post;
}, $posts);
*/

/*
$modified = array_map(function($post) {
    return ['title' => $post->title];
}, $posts);
*/

/*
$modified = array_map(function($post) {
    return $post->title;
}, $posts);
*/

// $titles = array_column($posts, 'title');

/*
$titles = array_map(function($post) {
    return $post->title;
}, $posts);
*/

$posts = array_map(function($post) {
    return (array) $post;
}, $posts);

var_dump($posts);
