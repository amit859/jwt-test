<?php 
class Post{
    private $conn;
    private $table = 'posts';
    public $id;
    public $email;
    public $password;
    public $category_id;
    public $title;
    public $author;
    public $created_at;
    public $body;
    public function __construct($db)
    {
        $this->conn = $db;
    }
    public function read(){
         //$query = "SELECT * FROM posts ";
        $stmt = $this->conn->prepare("SELECT * FROM posts ");
        $stmt->execute();
    return  $stmt->fetchAll(); 
        //$stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function read_single()
    {
        //$query = 'SELECT * FROM posts WHERE id = ?';
        
        //$stmt = $this->conn->prepare($query);
        $stmt = $this->conn->prepare("SELECT * FROM posts WHERE id = ? LIMIT 0,1");
        $stmt->bindParam(1,$this->id);
        $stmt->execute();
      //  $stmt->fetchAll(PDO::FETCH_ASSOC);

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->title = $row['title'];
        $this->body = $row['body'];
        $this->email = $row['email'];
        $this->password = $row['password'];
        $this->author = $row['author'];
        $this->category_id = $row['category_id'];
    }   

    public function create()
    {
        $query = 'INSERT INTO posts  SET title = :title,body = :body,email = :email,password = :password,author = :author, category_id = :category_id';
        $stmt = $this->conn->prepare($query);

        $this->title = htmlspecialchars(strip_tags($this->title));
        $this->body = htmlspecialchars(strip_tags($this->body));
        $this->email = htmlspecialchars(strip_tags($this->email));
        $this->password = htmlspecialchars(strip_tags($this->password));
        $this->author = htmlspecialchars(strip_tags($this->author));
        $this->category_id = htmlspecialchars(strip_tags($this->category_id));


        $stmt->bindParam(':title', $this->title);
        $stmt->bindParam(':body', $this->body);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':author', $this->author);
        $stmt->bindParam(':category_id', $this->category_id);
        $password_hash = password_hash($this->password, PASSWORD_BCRYPT);
        $stmt->bindParam(':password', $password_hash);

        if ($stmt->execute()) {
            return true;
        }
        printf("error:%s.\n",$stmt->error);


        return false;
    }
    function Emailexists(){
 
        $query = "SELECT id, title, body, password ,author,category_id
                FROM  posts 
                WHERE email = ?
                LIMIT 0,1";
     
        $stmt = $this->conn->prepare( $query );
     
        $this->email=htmlspecialchars(strip_tags($this->email));
     
        $stmt->bindParam(1, $this->email);
     
        $stmt->execute();
     
        $num = $stmt->rowCount();
     
        if($num>0){
     
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
     
            $this->id = $row['id'];
            $this->title = $row['title'];
            $this->body = $row['body'];
            $this->password = $row['password'];
            $this->author = $row['author'];
            $this->category_id = $row['category_id'];
     
            return true;
        }
     
        return false;
    }

/*
    public function Emailexists()
    {

        $stmt = $this->conn->prepare("SELECT * FROM posts WHERE email = ? LIMIT 0,1");
        
        $this->email=htmlspecialchars(strip_tags($this->email));
 
        $stmt->bindParam(1,$this->id);
        $stmt->execute();
        $num = $stmt->rowCount();
 
        if($num>0){
 
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
 
        $this->id = $row['id'];
        $this->title = $row['title'];
        $this->body = $row['body'];
        $this->password = $row['password'];
        $this->author = $row['author'];
        $this->category_id = $row['category_id'];
 
        return true;
    }
 
    return false;
}
*/
    public function update()
    {
        $query = 'UPDATE posts  SET title = :title,body = :body,email = :email, password = :password, author = :author, category_id = :category_id WHERE id = :id';
        $stmt = $this->conn->prepare($query);

        $this->title = htmlspecialchars(strip_tags($this->title));
        $this->body = htmlspecialchars(strip_tags($this->body));
        $this->email = htmlspecialchars(strip_tags($this->email));
        $this->password = htmlspecialchars(strip_tags($this->password));
        
        $this->author = htmlspecialchars(strip_tags($this->author));
        $this->category_id = htmlspecialchars(strip_tags($this->category_id));
        $this->id = htmlspecialchars(strip_tags($this->id));

        $stmt->bindParam(':title', $this->title);
        $stmt->bindParam(':body', $this->body);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':author', $this->author);
        $stmt->bindParam(':category_id', $this->category_id);
        $stmt->bindParam(':id', $this->id);
        $password_hash = password_hash($this->password, PASSWORD_BCRYPT);
        $stmt->bindParam(':password', $password_hash);

        if ($stmt->execute()) {
            return true;
        }
        printf("error:%s.\n",$stmt->error);


        return false;
    }


    public function delete()
    {
        $query = 'DELETE FROM posts WHERE id = :id';


        $stmt = $this->conn->prepare($query);

        $this->id = htmlspecialchars(strip_tags($this->id));
        $stmt->bindParam(':id',$this->id);



        if ($stmt->execute()) {
             return true;
         } printf("error:%s.\n",$stmt->error);

         return false;
    }
}


?>