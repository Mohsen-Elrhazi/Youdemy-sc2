<?php 
namespace Youdemy\App\Repositories;

use Youdemy\App\Models\Tag;
use Youdemy\Config\Database;
use PDO;

class TagRepositorie {

    public function saveTag(Tag $tag){
        $conn=Database::getConnection();
        $stmt=$conn->prepare("INSERT INTO tag (name) values(:name)");
        $stmt->execute([
            ':name' => $tag->getName()
        ]);
    }

    public function displayTags() {
        $conn = Database::getConnection();
        $stmt = $conn->prepare("SELECT * FROM tag ORDER BY tag_id ASC");
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
        $conn = Database::getConnection();
        $stmt = $conn->prepare("DELETE FROM tag WHERE tag_id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

    // function edit tag
    // public function updateStatus($tagID) {
    //     $stmt = $this->$conn->prepare("UPDATE tag SET name = :tagName WHERE tag_id = :tagID");
    //     return $stmt->execute([
    //         ':tagname' => $anme,
    //         ':tagID' => $tagID
    //     ]);
    // }

    
    
}