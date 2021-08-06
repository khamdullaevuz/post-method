<?php

require_once __DIR__."/../src/PostMethod.php";

use KhamdullaevUz\Post\PostMethod;

$post = new PostMethod();

$array = $post->createPost('https://api.mypage.uz/', ['ok'=>true]);

print($array);
