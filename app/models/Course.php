<?php
namespace Youdemy\App\Models;

class Course {
    private $courseID;
    private $title;
    private $imageURL;
    private $description;
    private $contentURL;
    private $type_content;
    private $categoryID;
    private $price;
    private $status;


    public function __construct($title, $imageURL, $description, $contentURL, $type_content, $categoryID, $price, $status, $courseID = null) {
        $this->courseID = $courseID;
        $this->title = $title;
        $this->imageURL = $imageURL;
        $this->description = $description;
        $this->contentURL = $contentURL;
        $this->type_content = $type_content;
        $this->categoryID = $categoryID;
        $this->price = $price;
        $this->status=$status;
    }

    // Getters
    public function getCourseID() {
        return $this->courseID;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getImageURL() {
        return $this->imageURL;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getContentURL() {
        return $this->contentURL;
    }
    
    public function getTypeContent() {
        return $this->type_content;
    }

    public function getCategoryID() {
        return $this->categoryID;
    }

 

    public function getPrice() {
        return $this->price;
    }

    public function getStatus() {
        return $this->status;
    }

    // Setters
    public function setTitle($title) {
        $this->title = $title;
    }

    public function setImageURL($imageURL) {
        $this->imageURL = $imageURL;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function setContentURL($contentURL) {
        $this->contentURL = $contentURL;
    }
    
    public function setTypeContent($type_content) {
        $this->type_content = $type_content;
    }

    public function setCategorie($categoryID) {
        $this->category = $categoryID;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    public function setStatus($status) {
        $this->status = $status;
    }

}
?>