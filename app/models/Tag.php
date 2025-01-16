<?php
namespace Youdemy\App\Models;

class Tag{
    private $tagID ;
    private $name;

public function __construct($name, $tagID){
    $this->name=$name;
    $this->tagID=$tagID;
}

public function getTagID(){
    return $this->$tagID;
}

public function getName(){
    return $this->$name;
}

}