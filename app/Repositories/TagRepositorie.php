<?php 
namespace Youdemy\App\Repositories;

use Youdemy\App\Models\Tag;
use Youdemy\Config\Database;
use PDO;

class TagRepositorie extends BaseRepositorie {

    public function save(object $object){
        if($object instanceof Tag){
             $stmt=$this->conn->prepare("INSERT INTO tag (name) values(:name)");
        $stmt->execute([
            ':name' => $object->getName()
        ]);
        }else {
            // Si l'objet n'est pas une instance de Tag, gérer l'erreur ou exception
            throw new InvalidArgumentException("L'objet passé n'est pas une instance de Tag.");
        }
        
    }
// function afficher lastags
    public function display() {
        $stmt = $this->conn->prepare("SELECT * FROM tag ORDER BY tag_id ASC");
        $stmt->execute(); 
        $tags = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $data = [];

        foreach ($tags as $tag) {
            $data[] = new Tag($tag['name'], $tag['tag_id']);
        }
        return $data;
    }

    // delete tag
    public function delete($id) {
        $stmt = $this->conn->prepare("DELETE FROM tag WHERE tag_id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

    // function edit tag
    public function edit(object $object) {
        if($object instanceof Tag){
              $stmt = $this->conn->prepare("UPDATE tag SET name = :name WHERE tag_id = :id");
             $stmt->execute([
              ':name' => $object->getName(),
              ':id' => $object->getTagID()
             ]);
        }else {
            throw new InvalidArgumentException("L'objet passé n'est pas une instance de Tag.");
        }
    }

    // function trouver un objet par son id
    public function findById($id){
        $stmt=$this->conn->prepare("select * from tag where tag_id= :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $tag = $stmt->fetch(PDO::FETCH_ASSOC);
        return new Tag($tag['name'], $tag['tag_id']);
    }
 
    
}