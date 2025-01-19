<?php 
namespace Youdemy\App\Repositories;

use Youdemy\App\Models\Category;
use Youdemy\Config\Database;
use PDO;

class CategoryRepositorie extends BaseRepositorie {

    public function save(object $object){
        if($object instanceof Category){
             $stmt=$this->conn->prepare("INSERT INTO category (name, description) values(:name, :description)");
        $stmt->execute([
            ':name' => $object->getName(),
            ':description' => $object->getDescription()
        ]);
        }else {
            throw new InvalidArgumentException("L'objet passé n'est pas une instance de Category.");
        }
    }
   // function afficher les categories
    public function display() {
        $stmt = $this->conn->prepare("SELECT * FROM category ORDER BY category_id ASC");
        $stmt->execute(); 
        $categorys = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $data = [];

        foreach ($categorys as $category) {
            $data[] = new Category ($category['name'],$category['description'], $category['category_id']);
        }
        return $data;
    }

    // delete category
    public function delete($id) {
        $stmt = $this->conn->prepare("DELETE FROM category WHERE category_id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

    // function edit category
    public function edit(object $object) {
        if($object instanceof Category){
              $stmt = $this->conn->prepare("UPDATE category SET name = :name, description= :description WHERE category_id = :id");
             $stmt->execute([
              ':name' => $object->getName(),
              ':description' => $object->getDescription(),
              ':id' => $object->getCategoryID()
             ]);
        }else {
            throw new InvalidArgumentException("L'objet passé n'est pas une instance de category.");
        }
    }

    // function trouver un objet par son id
    public function findById($id){
        $stmt=$this->conn->prepare("select * from category where category_id= :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $category = $stmt->fetch(PDO::FETCH_ASSOC);
        return new Category($category['name'], $category['description'], $category['category_id']);
    }

     // recuperer tous les categoryes
     public function getAll() {
        $stmt = $this->conn->query("SELECT * FROM category");
        $categorys = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
        $categoryObjects = [];
        foreach ($categorys as $category) {
            $categoryObjects[] = new Category($category['name'], $category['description'], $category['category_id']);
        }
    
        return $categoryObjects;
    }

    

    
    
}