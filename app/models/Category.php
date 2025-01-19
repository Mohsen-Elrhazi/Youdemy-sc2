<?php
namespace Youdemy\App\Models;

class Category{
    private $categoryID ;
    private $name;
    private $description;

    public function __construct($name, $description, $categoryID=null){
    $this->categoryID= $categoryID;
    $this->name= $name;
    $this->description= $description;
}

public function getCategoryID(){
    return $this->categoryID;
}

public function getName(){
    return $this->name;
}

public function getDescription(){
    return $this->description;
}

public function setName($name){
    $this->name=$name;
}

public function setDescription($description){
    $this->description= $description;
}

}