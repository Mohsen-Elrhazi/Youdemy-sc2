<?php  

namespace Youdemy\App\Controllers;

use Youdemy\App\Models\Category;
use Youdemy\App\Repositories\CategoryRepositorie;
use Youdemy\App\Services\Validation;

class CategoryController{
    private $categoryRepositorie;

    public function __construct(){
        $this->categoryRepositorie=new CategoryRepositorie;
    }

    public function ajouterCategory(){
        if ($_SERVER['REQUEST_METHOD']==='POST' && isset($_POST['ajouterCategory'])){
            $name=htmlspecialchars($_POST['name']);
            $description=htmlspecialchars($_POST['description']);

            
            if(Validation::validateFields([$name, $description])){
                // Vérifier si un autre ctegory avec ce nom existe
                if (Validation::columnExists('category', 'name', $name, 'category_id', null)) {
                   $_SESSION['error'] = 'Un category avec ce nom existe déjà.';
                   header("Location: /app/views/Dashboard/Admin/admin.php?page=categorie");
                exit;
            }else{
                $category=new Category($name, $description);
                $this->categoryRepositorie->save($category);
                $_SESSION['success']= 'Category a été ajouter avec success';
                header("location:/app/views/Dashboard/Admin/admin.php?page=categorie");
                exit;
            }
            
            }else{
                $_SESSION['error']= 'Veuillez remplir tous les champs';
                header("location:/app/views/Dashboard/Admin/admin.php?page=categorie");
                exit;
            }
        }
    }

    public function afficherCategorys() {
        $categorys = $this->categoryRepositorie->display();
        return $categorys; 
    }

    public function rendreRow(Category $category) {
        return "
            <tr>
            <td>" . $category->getCategoryID() . "</td>   
                <td>" . $category->getName() . "</td>
                <td>" . $category->getDescription() . "</td>
                <td>
                    <a class='btn btn-warning text-light text-decoration-none px-4 me-4' 
                       href='?page=modifier_categorie&id=" . $category->getCategoryID() . "'>
                        Edit
                    </a>
                    <a class='btn btn-danger text-light text-decoration-none' 
                       href='?page=categorie&id=" . $category->getCategoryID() . "'>
                        Delete
                    </a>
                </td>
            </tr>";
    }

    // function delete category
    public function deleteCategory($id){
        $this->categoryRepositorie->delete($id);
        $_SESSION['deleted']='Categorie a été supprimer';
            header("location:/app/views/Dashboard/Admin/admin.php?page=categorie");
            exit;
    }

    // edit tag
    public function editCategory($id){
            $category=$this->categoryRepositorie->findById($id);
            if($category){
             if(isset($_POST['edit'])){
             $name=htmlspecialchars($_POST['name']);
             $description=htmlspecialchars($_POST['description']);
            if(Validation::validateFields([$name, $description])){
                  // Vérifier si un autre ctegory avec ce nom existe
                  if (Validation::columnExists('category', 'name', $name, 'category_id', $id)) {
                    $_SESSION['error'] = 'Un category avec ce nom existe déjà.';
                    header("Location: /app/views/Dashboard/Admin/admin.php?page=modifier_categorie&id=".$id);
                exit;
                }else{
                $category->setName($name);
                $category->setDescription($description);
                
                $this->categoryRepositorie->edit($category);
                $_SESSION['success'] = 'Categorie modifié avec succès';
                header("Location: /app/views/Dashboard/Admin/admin.php?page=categorie");
                exit;
                }
              }else{
                $_SESSION['error'] = 'Veuillez remplir tous les champs';
                header("Location: /app/views/Dashboard/Admin/admin.php?page=modifier_categorie&id=".$id);
                exit;
              }
             }
            return $category;
            }else{
                $_SESSION['error'] = 'Category non trouvé';
                header("Location: /app/views/Dashboard/Admin/admin.php?page=categorie");
            exit;
            }    
    }
    
}
?>