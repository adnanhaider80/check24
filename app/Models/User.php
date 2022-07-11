<?php 

namespace App\Models;

class User
{
    protected $id;
    protected $dbConnection;
    protected $errorMessage;


    function __construct()
    {
        //TODO: database connection should be created once
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

    

    // CRUD OPERATIONS
    public function create(array $data)
    {

    }

    public function readAll()
    {
        $resposne = [];
        $sql = "SELECT * FROM user LIMIT 0, 3";
        //TODO: pagination remanining now
        $result = $this->dbConnection->query($sql);

        if ($result->num_rows > 0) 
        {
            //TODO: try to use exception class 
            // output data of each row
            while($row = $result->fetch_assoc()) 
            {
                // $this->setId($row['id']);
                // $this->setTitle($row['title']);
                // $this->setText($row['text']);
                // $this->setPicture($row['picture']);
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

        $sql = "SELECT * FROM user WHERE id = $id";
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
