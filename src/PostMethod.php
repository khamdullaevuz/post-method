<?php

/**
 * @author Elbek Khamdullaev
 * @description php post method other site with curl
 * @license MIT
 * @repository https://github.com/KhamdullaevUz/post-method-curl
 */

namespace KhamdullaevUz\Post;

class PostMethod{

	public function createPost($url, $datas = []){
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_POST,1);
		curl_setopt($ch, CURLOPT_POSTFIELDS,$datas);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$output = curl_exec($ch);
		curl_close($ch);

		return $output;
	}
}