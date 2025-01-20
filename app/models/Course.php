<?php
namespace Youdemy\App\Models;

class Course {
    private $courseID;
    private $title;
    private $imageURL;
    private $description;
    private $contentURL;
    private $category;
    private $tags = [];
    private $price;
    private $status;


    public function __construct($title, $imageURL, $description, $contentURL, $category, $tags = [], $price, $status, $courseID = null) {
        $this->courseID = $courseID;
        $this->title = $title;
        $this->imageURL = $imageURL;
        $this->description = $description;
        $this->contentURL = $contentURL;
        $this->category = $category;
        $this->tags = $tags;
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

    public function getCategory() {
        return $this->category;
    }

    public function getTags() {
        return $this->tags;
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

    public function setCategorie($category) {
        $this->category = $category;
    }

    public function setTags($tags) {
        $this->tags = $tags;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    public function setStatus($status) {
        $this->status = $status;
    }

}
?>