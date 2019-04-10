<?php

    header('Access-Control-Allow-Origin:*');
    header('Content-Type:application/json');
    header('Access-Control-Allow-Methods:DELETE');
    header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization,X-Request-With');

    include_once '..\..\config\Database.php';
    include_once '..\..\Models\Post.php';

    $database = new Database();

    $db = $database->getConnection();

    $post = new Post($db);

    $data = json_decode(file_get_contents("php://input"));

    $post->id = $data->id;

	if ($post->delete()) {
            echo json_encode(
                array('message'=>'Post Deleted')
            );
          } else{
            echo json_encode(
                array('message'=>'Post Not Deleted'));
          }        
?>