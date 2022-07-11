<?php 

namespace App\Models;

class Article
{
    protected $id;
    protected $title;
    protected $text;
    protected $picture;

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

    public function getPicture()
    {
        return $this->picture;
    }

    // SET METHODS
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

    public function read(int $id)
    {
        $this->title = 'My first Product';
        $this->text = 'Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum ';
        $this->picture = 'https://via.placeholder.com/150';
    
        return $this;
    }

    public function update(int $id, array $data)
    {

    }

    public function delete(int $id)
    {

    }
}
