<?php 
namespace Youdemy\App\Repositories;

use Youdemy\App\Models\Tag;
use Youdemy\Config\Database;
use PDO;

class TagRepositorie {
    private $conn;

    public function __construct(){
        $this->conn=Database::getConnection();
    }

    public function saveTag(Tag $tag){
        $stmt=$this->conn->prepare("INSERT INTO tag (name) values(:name)");
        $stmt->execute([
            ':name' => $tag->getName()
        ]);
    }

    public function displayTags() {
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
    public function deleteTag($id) {
        $stmt = $this->conn->prepare("DELETE FROM tag WHERE tag_id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

    // function edit tag
    public function editTag(Tag $tag) {
        $stmt = $this->$conn->prepare("UPDATE tag SET name = :name WHERE tag_id = :id");
        return $stmt->execute([
            ':name' => $name,
            ':id' => $tagID
        ]);
    }

    
    
}