<?php 

namespace App\Models;

class Article
{
    protected $id;
    protected $title;
    protected $text;
    protected $picture;
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

    // CRUD OPERATIONS
    public function create(array $data)
    {

    }

    public function readAll()
    {
        $resposne = [];
        $sql = "SELECT * FROM articles LIMIT 0, 3";
        //TODO: pagination remanining now
        $result = $this->dbConnection->query($sql);

        if ($result->num_rows > 0) 
        {
            //TODO: try to use exception class 
            // output data of each row
            while($row = $result->fetch_assoc()) 
            {
                $this->setId($row['id']);
                $this->setTitle($row['title']);
                $this->setText($row['text']);
                $this->setPicture($row['picture']);
                //TODO: instead of ID get name of author 
                //$row['author'];

                $resposne[] = $this;
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
