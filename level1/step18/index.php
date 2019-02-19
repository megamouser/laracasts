<?php
class Post 
{
    public $title;
    public $author;
    public $published;

    public function __construct($title, $author, $published)
    {
        $this->title = $title;
        $this->author = $author;
        $this->published = $published;
    }
}

$posts = [
    new Post('My First Post', 'JW', true),
    new Post('My Second Post', 'JW', true),
    new Post('My Third Post', 'AW', true),
    new Post('My Fourth Post', 'TR', false)
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

/** 
$posts = array_map(function($post) {
    return (array) $post;
}, $posts);
*/

//$titles = array_column($posts, 'title');

$authors = array_column($posts, 'author', 'title');
var_dump($authors);
