<?php
namespace Youdemy\App\Models;

class Tag{
    private $tagID ;
    private $name;

public function __construct($name,$tagID=null){
    $this->tagID=$tagID;
    $this->name=$name;
}

public function getTagID(){
    return $this->tagID;
}

public function getName(){
    return $this->name;
}

public function setTName($name){
    $this->name=$name;
}

}