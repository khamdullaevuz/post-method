<?php

require_once __DIR__."/../vendor/autoload.php";

use Method\Post;

$post = new Post();

$array = $post->createPost('https://api.mypage.uz/', ['ok'=>true]);

var_dump($array);