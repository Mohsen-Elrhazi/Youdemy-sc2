<?php
namespace Youdemy\App\Repositories;

use Youdemy\App\Models\Course;
use Youdemy\Config\Database;
use PDO;
use InvalidArgumentException;

class CourseRepositorie extends BaseRepositorie {

    public function save(object $object) {
        if ($object instanceof Course) {
            $stmt = $this->conn->prepare("INSERT INTO course (title, description, content_url, type_content, image_url, category_id, price, status) 
                                          VALUES (:title, :description, :content_url, :type_content, :image_url, :category_id, :price, :status)");
            $stmt->execute([
                ':title' => $object->getTitle(),
                ':description' => $object->getDescription(),
                ':content_url' => $object->getContentUrl(),
                ':type_content' => $object->getTypeContent(),
                ':image_url' => $object->getImageUrl(),
                ':category_id' => $object->getCategoryId(),
                ':price' => $object->getPrice(),
                ':status' => $object->getStatus(),
            ]);
        } else {
            throw new InvalidArgumentException("L'objet passé n'est pas une instance de Course.");
        }
    }

    public function display() {
        $stmt = $this->conn->prepare("SELECT * FROM course ORDER BY course_id ASC");
        $stmt->execute();
        $courses = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $data = [];
        foreach ($courses as $course) {
            $data[] = new Course(
                $course['title'],
                $course['description'],
                $course['content_url'],
                $course['image_url'],
                $course['category_id'],
                $course['price'],
                $course['status'],
                $course['course_id']
            );
        }
        return $data;
    }

    public function delete($id) {
        $stmt = $this->conn->prepare("DELETE FROM course WHERE course_id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

    public function edit(object $object) {
        if ($object instanceof Course) {
            $stmt = $this->conn->prepare("UPDATE course SET title = :title, description = :description, content_url = :content_url, 
                                          image_url = :image_url, category_id = :category_id, price = :price, status = :status 
                                          WHERE course_id = :id");
            $stmt->execute([
                ':title' => $object->getTitle(),
                ':description' => $object->getDescription(),
                ':content_url' => $object->getContentUrl(),
                ':image_url' => $object->getImageUrl(),
                ':category_id' => $object->getCategoryId(),
                ':price' => $object->getPrice(),
                ':status' => $object->getStatus(),
                ':id' => $object->getId(),
            ]);
        } else {
            throw new InvalidArgumentException("L'objet passé n'est pas une instance de Course.");
        }
    }

    public function findById($id) {
        $stmt = $this->conn->prepare("SELECT * FROM course WHERE course_id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $course = $stmt->fetch(PDO::FETCH_ASSOC);

        return new Course(
            $course['title'],
            $course['description'],
            $course['content_url'],
            $course['image_url'],
            $course['category_id'],
            $course['price'],
            $course['status'],
            $course['course_id']
        );
    }
}