<?php 

use Youdemy\App\Controllers\CategoryController;
use Youdemy\App\Models\Category;
use Youdemy\App\Services\CategoryService;


$categoryController = new CategoryController();

if(isset($_GET['id'])){
    $id=$_GET['id'];
    $categoryController->deleteCategory($id); 
}
$categorys = $categoryController->afficherCategorys();

include './forms/ajouter_categorie.php';
?>
<table class="table table-bordered mt-2 text-center align-middle">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        foreach ($categorys as $category){
        echo CategoryService::rendreRow($category);
        }
          ?>
    </tbody>
</table>