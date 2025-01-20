<?php 
namespace Youdemy\App\Controllers;

use Youdemy\App\Models\Course;
use Youdemy\App\Repositories\CourseRepositorie;
use Youdemy\App\Services\Validation;


class CourseController {
    private $courseRepositorie;

    public function __construct() {
        $this->courseRepositorie = new CourseRepositorie();
    }
    
    public function ajouterCourse(){
        if ($_SERVER['REQUEST_METHOD']==='POST' && isset($_POST['ajouterCours'])){
            $title=htmlspecialchars($_POST['title']);
            $imageURL=htmlspecialchars($_POST['imageURL']);
            $description=htmlspecialchars($_POST['description']);
            $contentURL=htmlspecialchars($_POST['contentURL']);
            $typeContent=htmlspecialchars($_POST['typeContent']);
            $categoryID=htmlspecialchars($_POST['categoryID']);
            $price=htmlspecialchars($_POST['price']);
            $tag_ids = $_POST['tags'];
                        
            if(Validation::validateFields([$title, $imageURL, $description, $contentURL, $typeContent, $categoryID, $price ])){
                $course=new Course($title, $imageURL, $description, $contentURL,$typeContent, $categoryID, $price, 'draft');
                $this->courseRepositorie->save($course);
                $_SESSION['success']= 'Course a été ajouter avec success';
                header("location:/app/views/Dashboard/Enseignant/enseignant.php?page=ajouter_cours");
                exit;
            }else{
                $_SESSION['error']= 'Veuillez remplir tous les champs';
                header("location:/app/views/Dashboard/Enseignant/enseignant.php?page=ajouter_cours");
                exit;
            }
        }
    }

    public function afficherCourses() {
        $courses = $this->courseRepositorie->display();
        return $courses; 
    }
}
?>