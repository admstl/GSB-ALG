<?php /*
namespace App\Controllers;

use App\Models\GsbModel;

class ListeEtudiants extends BaseController
{
<<<<<<< HEAD
    protected GsbModel $gsb_model;
    protected array $menus;

    public function __construct()
    {
        $this->gsb_model = new GsbModel();
        // chargement des items du menu
        helper('menus');
        $this->menus = getMenus(); // récupère la liste dans le helper
    }
    public function uneClasse()
    {

        $listeClasses = $this->gsb_model->uneClasse();
    $data = [
            "accueil" => $this->menus,
            "gererfrais" => "Liste des étudiants",
            "etatfrais" => $listeClasses,

        ];
    }
    public function toutesClasses()
    {
        $elements = $this->gsb_model->getClasses();

        $data = [
            "menus" => $this->menus,
            "titre" => "Liste des étudiants",
            "elements_stats" => $elements,

        ];
        echo view("entete", $data);
        echo view("menus", $data);
        echo view("", $data);
    }
}
=======
    protected Etudiants_Model $etudiants_model;
    protected array $menus;
    
}
>>>>>>> eccb339495dc74e5ac21e23363d74713b66549d6
