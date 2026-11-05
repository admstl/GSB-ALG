<?php

if (! function_exists('getMenus')) {
    function getMenus(): array
    {
        return [
            ['accueil', 'Accueil', ['title' => 'Accueil']],
            ['gererfrais', 'Saisie fiche de frais', ['title' => 'Saisie fiche de frais']],
            ['etatfrais', 'Mes fiches de frais', ['title' => 'Consultation de mes fiches de frais']]
        ];
    }
}