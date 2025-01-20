<?php
use Youdemy\App\Controllers\CourseController;
use Youdemy\App\Services\CourseService;
use Youdemy\App\Models\Course;

$courseController = new CourseController();

// if(isset($_GET['id'])){
// $id=$_GET['id'];
// $courseController->deleteTag($id);
// }
$courses = $courseController->afficherCourses();


foreach ($courses as $course){
    echo CourseService::rendreCard($course);
}
    ?>