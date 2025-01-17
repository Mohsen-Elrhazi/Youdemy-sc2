<?php  
namespace Youdemy\App\Controllers;

use Youdemy\App\Models\Tag;
use Youdemy\App\Repositories\TagRepositorie;

class TagController{
    private $tagRepositorie;

    public function __construct(){
        $this->tagRepositorie=new TagRepositorie();
    }

    public function ajouterTag(){
        if ($_SERVER['REQUEST_METHOD']==='POST' && isset($_POST['ajouterTag'])){
            $name=htmlspecialchars($_POST['tagName']);
            echo $name;

            $tag=new Tag($name);
            $this->tagRepositorie->saveTag($tag);
        }
        
    }
}
?>