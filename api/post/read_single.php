<?php

    header('Access-Control-Allow-Origin:*');
    header('Content-Type:application/json');

    include_once '..\..\config\Database.php';
    include_once '..\..\Models\Post.php';

    $database = new Database();

    $db = $database->getConnection();

    $post = new Post($db);
	
    $post->id = isset($_GET['id']) ? $_GET['id'] : die();

    $post->read_single();

    $posts_arr = array(
    'id'=> $post->id,
    'email'=>$post->email,
    'password'=>$post->password,
    'title'=> $post->title,
    'body'=> $post->body,
    'author'=> $post->author,
    'category_id'=> $post->category_id
    );
    print_r(json_encode($posts_arr));
 ?>