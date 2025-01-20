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
        if ($_SERVER['REQUEST_METHOD']==='POST' && isset($_POST['ajouterTag'])){
            $name=htmlspecialchars($_POST['tagName']);
 
            if(Validation::validateFields([$name])){
            // Vérifier si un autre ctegory avec ce nom existe
                if (Validation::columnExists('tag', 'name', $name, 'tag_id', 'not null')) {
                    $_SESSION['error'] = 'Un tag avec ce nom existe déjà.';
                    header("Location: /app/views/Dashboard/Admin/admin.php?page=tag");
                exit;
              }else{
                $tag=new Tag($name);
                $this->tagRepositorie->save($tag);
                $_SESSION['success']= 'Tag a été ajouter avec success';
                header("location:/app/views/Dashboard/Admin/admin.php?page=tag");
                exit;
                 }
            }else{
                $_SESSION['error']= 'Veuillez remplir tous les champs';
                header("location:/app/views/Dashboard/Admin/admin.php?page=tag");
                exit;
            }
        }
    }

    public function afficherTags() {
        $tags = $this->tagRepositorie->display();
        return $tags; 
    }

   

    // function delete tag
    public function deleteTag($id){
        $this->tagRepositorie->delete($id);
        $_SESSION['tagDeleted']='Tag a été supprimer';
            header("location:/app/views/Dashboard/Admin/admin.php?page=tag");
            exit;
    }

    // edit tag
    public function editTag($id){
            $tag=$this->tagRepositorie->findById($id);
            if($tag){
             if(isset($_POST['edit'])){
                 $name=htmlspecialchars($_POST['name']);
                 
                 if(Validation::validateFields([$name])){
                 // Vérifier si un autre tag avec ce nom existe
                  if (Validation::columnExists('tag', 'name', $name,'tag_id', $id)) {
                    $_SESSION['error'] = 'Un tag avec ce nom existe déjà.';
                     header("Location: /app/views/Dashboard/Admin/admin.php?page=modifier_tag&id=" . $id);
                  exit;
                 }else{
                 $tag->setName($name);
                 $this->tagRepositorie->edit($tag);
                 $_SESSION['success'] = 'Tag modifié avec succès';
                 header("Location: /app/views/Dashboard/Admin/admin.php?page=tag");
                 exit;
                 }
                }else{
                $_SESSION['error'] = 'Veuillez remplir tous les champs';
                header("Location: /app/views/Dashboard/Admin/admin.php?page=modifier_tag&id=".$id);
                exit;
              }
             }
            return $tag;
            }else{
                $_SESSION['error'] = 'Tag non trouvé';
                header("Location: /app/views/Dashboard/Admin/admin.php?page=tag");
            exit;
            }    
          }
         
    
}
?>