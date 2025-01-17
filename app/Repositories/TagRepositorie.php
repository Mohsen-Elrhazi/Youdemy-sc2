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
    
}