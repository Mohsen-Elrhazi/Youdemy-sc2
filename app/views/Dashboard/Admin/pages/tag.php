<?php
use Youdemy\App\Controllers\TagController;
use Youdemy\App\Models\Tag;

$tagController = new TagController();

if(isset($_GET['id'])){
$id=$_GET['id'];
$tagController->deleteTag($id);
}
$tags = $tagController->afficherTags();

require_once './forms/ajouter_tag.php';

?>
<table class="table table-bordered mt-2 text-center align-middle">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        foreach ($tags as $tag){
        echo $tagController->rendreRow($tag);
        }
          ?>
    </tbody>
</table>