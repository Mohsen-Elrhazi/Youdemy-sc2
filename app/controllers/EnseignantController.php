<?php  

namespace Youdemy\App\Controllers;

use Youdemy\App\Models\Enseignant;
use Youdemy\App\Repositories\EnseignantRepositorie;
use Youdemy\App\Services\Validation;

class EnseignantController{
    private $enseignantRepositorie;

    public function __construct(){
        $this->enseignantRepositorie=new EnseignantRepositorie();
    }

}
?>