<?php 
namespace App\Controllers;

use App\Models\Etudiants_Modele;

class Menu extends BaseController
{
    protected Etudiants_Model $etudiants_model;
    protected array $menus;