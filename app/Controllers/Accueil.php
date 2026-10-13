<?php

namespace App\Controllers;

class Accueil extends BaseController
{
    public function __construct()
    {
        // On charge le helper URL et HTML
        helper(['url', 'html']);
    }

    /** Méthode par défaut */
    public function index()
    {
        // Vérifie si l’utilisateur est connecté
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/');
        }

        $data['titre'] = "Bienvenue sur l'intranet GSB";

        $flux = simplexml_load_file('https://www.lemonde.fr/international/rss_full.xml');

        $rss = $flux->channel->item;

        $tableau = array();
        $i = 0;
        foreach ($rss as $valeur) {

            $image = $valeur->children('media', true)->content->attributes()['url'];
            $titre = $valeur->title;
            $description = $valeur->description;
            $date = date("d/m/Y",strtotime($valeur->pubDate));
            $lien = $valeur->link;
            $tableau[$i] = array(
            'image' => $image,
            'titre' => $titre,
            'description' => $description,
            'date' => $date,
            'lien' => $lien
            );
            $i++;
        }
        $data["tableau"] = $tableau;

        return view('structures/page_entete')
            . view('structures/messages')
            . view('sommaire')
            . view('structures/contenu_entete', $data)
            . view ('flux_rss', $data)
            . view('structures/page_pied');
    }
}
