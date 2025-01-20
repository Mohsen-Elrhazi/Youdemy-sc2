<?php 
namespace Youdemy\App\Services;

use Youdemy\Config\Database;
use Youdemy\App\Models\Category;
use PDO;

class CategoryService{

    public static function rendreRow(Category $category) {
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

    public static function rendreOption(Category $category) {
        return "<option value='{$category->getCategoryID()}'>{$category->getName()}</option>";
    }
}
?>