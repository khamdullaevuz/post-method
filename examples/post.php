<?php

require_once __DIR__."/../vendor/autoload.php";

use PostMethod\PostMethod;

$post = new PostMethod();

$array = $post->createPost('https://api.mypage.uz/', ['ok'=>true]);

var_dump($array);