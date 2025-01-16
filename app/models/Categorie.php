<?php
namespace Youdemy\App\Models;

class Categorie{
    private $categorieID ;
    private $name;
    private $description;

public function __construct($name, $description, $tagID){
    $this->name=$name;
    $this->description=$description;
    $this->tagID=$tagID;
}

public function getTagID(){
    return $this->$tagID;
}

public function getName(){
    return $this->$name;
}

public function getDescription(){
    return $this->$description;
}

}