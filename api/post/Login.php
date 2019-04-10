<?php
// required headers
header("Access-Control-Allow-Origin: http://localhost:8181/get_api/api/post/");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
 
// files needed to connect to database
include_once '..\..\config\Database.php';
include_once '..\..\Models\Post.php';
 
// get database connection
$database = new Database();
$db = $database->getConnection();
 
// instantiate post object
$post = new Post($db);
 
// get posted data
$data = json_decode(file_get_contents("php://input"));
 
// set product property values
$post->email = $data->email;
$email_exists = $post->Emailexists();
 
// generate json web token
include_once '..\..\core.php';
include_once '..\..\libs\php-jwt-master\src\BeforeValidException.php';
include_once '..\..\libs\php-jwt-master\src\ExpiredException.php';
include_once '..\..\libs\php-jwt-master\src\SignatureInvalidException.php';
include_once '..\..\libs\php-jwt-master\src\JWT.php';
use \Firebase\JWT\JWT;
 
// check if email exists and if password is correct
if($email_exists && password_verify($data->password, $post->password)){
 
    $token = array(
       "iss" => $iss,
       "aud" => $aud,
       "iat" => $issuedAt,
       "exp"=> $expirationTime,

       "data" => array(
           "id" => $post->id,
           "email" => $post->email,
           "title" => $post->title,
           "author" => $post->author,
           "password"=>$post->password
       )
    );
 
    // set response code
    http_response_code(200);
 
    // generate jwt
    $jwt = JWT::encode($token, $key,'HS256');
    echo json_encode(
            array(
                "message" => "Successful login.",
                "jwt" => $jwt
            )
        );
 
}
 
// login failed
else{
 
    // set response code
    http_response_code(401);
 
    // tell the user login failed
    echo json_encode(array("message" => "Login failed."));
}
?>