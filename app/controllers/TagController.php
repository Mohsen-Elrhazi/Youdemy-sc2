<?php  
namespace Youdemy\App\Controllers;

use Youdemy\App\Models\Tag;
use Youdemy\App\Repositories\TagRepositorie;
use Youdemy\App\Services\Validation;

class TagController{
    private $tagRepositorie;

    public function __construct(){
        $this->tagRepositorie=new TagRepositorie();
    }

    public function ajouterTag(){
        session_start();
        if ($_SERVER['REQUEST_METHOD']==='POST' && isset($_POST['ajouterTag'])){
            $name=htmlspecialchars($_POST['tagName']);
            
            if(Validation::validateFields([$name])){
                $tag=new Tag($name);
                $this->tagRepositorie->saveTag($tag);
                $_SESSION['success']= 'Tag a été ajouter avec success';
                header("location:/app/views/Dashboard/Admin/admin.php?page=tag");
                exit;
            }else{
                $_SESSION['error']= 'Veuillez remplir tous les champs';
                header("location:/app/views/Dashboard/Admin/admin.php?page=tag");
                exit;
            }
        }
        
    }
}
?>