<?php 

namespace App\Models;

class Article
{
    protected $id;
    protected $title;
    protected $text;
    protected $picture;
    protected $created_at;
    protected $dbConnection;
    protected $errorMessage;


    function __construct()
    {
        // Create connection
        $this->dbConnection = new \mysqli('db', 'root', 'root', 'myDB');

        // Check connection
        if ($this->dbConnection->connect_error) 
        {
            $this->errorMessage = "Connection failed" . $this->dbConnection->connect_error;
        }
    }

    // GET METHODS
    public function getId()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getText()
    {
        return $this->text;
    }

    //TODO: trying to use accessor methods
    public function getPicture()
    {
        return $this->picture;
    }

    public function getCreatedAt()
    {
        return $this->created_at;
    }

    // SET METHODS
    public function setId($id)
    {
        $this->id = $id;
    }

    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    public function setText(string $description)
    {
        $this->text = $description;
    }

    public function setPicture(string $image)
    {
        $this->picture = $image;
    }

    public function setCreatedAt(string $unix)
    {
        $this->created_at = $unix;
    }

    // CRUD OPERATIONS
    public function create(array $data)
    {
        //qucik hack 
        // use 1 for author
        // later on we will get this detail from session 
        $author = 1;
        $created_at = time();

        extract($data);
        //TODO: exception handling
        $sql = "INSERT INTO articles (`title`, `text`, `picture`, `author`, `created_at`) 
        VALUES ('$title', '$text', '$picture', $author, $created_at)";

        if ($this->dbConnection->query($sql) === TRUE) 
        {
            $location = BASE_URL.'overview';
            header("Location: $location");
        } 
        else 
        {
            throw new Exception("Error: " . $sql . "<br>" . $conn->error);
        }
    }

    public function readAll()
    {
        $resposne = [];
        $sql = "SELECT * FROM articles ORDER BY created_at DESC LIMIT 0, 3";
        //TODO: pagination remanining now
        $result = $this->dbConnection->query($sql);

        if ($result->num_rows > 0) 
        {
            //TODO: try to use exception class 
            // output data of each row
            while($row = $result->fetch_assoc()) 
            {
                //TODO: instead of ID get name of author 
                //$row['author'];

                $resposne[] = $row;
                //TODO: database connection information should not part of object while sending for views
            }
        }
        return $resposne;
    }

    public function read(int $id)
    {

        $sql = "SELECT * FROM articles WHERE id = $id";
        $result = $this->dbConnection->query($sql);

        if ($result->num_rows > 0) 
        {
            // output data of each row
            while($row = $result->fetch_assoc()) 
            {
                $this->setTitle($row['title']);
                $this->setText($row['text']);
                $this->setPicture($row['picture']);
                $this->setCreatedAt($row['created_at']);
                //TODO: instead of ID get name of author 
                //$row['author'];

            }
        }
    
        return $this;
    }

    public function update(int $id, array $data)
    {

    }

    public function delete(int $id)
    {

    }
}
