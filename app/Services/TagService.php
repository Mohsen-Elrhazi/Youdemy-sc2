<?php 
namespace Youdemy\App\Services;

use Youdemy\Config\Database;
use Youdemy\App\Models\Tag;
use PDO;

class TagService{

    public static function rendreRow(Tag $tag) {
        return "
            <tr>
            <td>" . $tag->getTagID() . "</td>   
                <td>" . $tag->getName() . "</td>
                <td>
                    <a class='btn btn-warning text-light text-decoration-none px-4 me-4' 
                       href='?page=modifier_tag&id=" . $tag->getTagID() . "'>
                        Edit
                    </a>
                    <a class='btn btn-danger text-light text-decoration-none' 
                       href='?page=tag&id=" . $tag->getTagID() . "'>
                        Delete
                    </a>
                </td>
            </tr>";
    }

    public static function rendreCheckbox(Tag $tag) {
        return "<input type='checkbox' id={$tag->getTagID()} name={$tag->getName()}>
                <label for={$tag->getTagID()} >  {$tag->getName()} </label>
               ";
          
    }
}
?>