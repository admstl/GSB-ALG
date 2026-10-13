<?php

namespace App\Libraries;

use DateTime;
use IntlDateFormatter;

class Gsb_lib
{
    public function __construct()
    {
        // session déjà disponible via service
        session();
        setlocale(LC_TIME, "fr_FR.utf8", "fra_fra");
    }

    /** Transforme une date yyyy-mm-dd en jj/mm/yyyy */
    public function date_vers_francais(string $maDate): string
    {
        [$annee, $mois, $jour] = explode('-', $maDate);
        return "$jour/$mois/$annee";
    }

    /** Retourne le couple annee/mois aaaamm selon une date jj/mm/aaaa (date du jour si non fournie) */
    public function get_annee_mois(?string $date = null): string
    {
        if ($date === null) {
            return date("Ym");
        }
        $dateObj = DateTime::createFromFormat('d/m/Y', $date);
        return $dateObj->format('Ym');
    }
    // public function get_annee_mois(?string $date): string
    // {
    //     return $date("Ym");
    // }

    /** Extrait l'année d'un couple annee_mois au format aaaamm */
    public function get_annee_from_anneemois(string $annee_mois): string
    {
        $num_annee = substr($annee_mois, 0, 4);
        return $num_annee;
    }

    /** Extrait le mois d'un couple annee_mois au format aaaamm */
    public function get_mois_from_anneemois(string $annee_mois): string
    {
        $num_mois = substr($annee_mois, 4, strlen($annee_mois) - 4);
        return $num_mois;
    }

    /** Nom complet du mois en français */
    public function get_nom_mois(int $unNoMois, string $locale = 'fr_FR'): string
    {
        $date = DateTime::createFromFormat('!m', $unNoMois);
        $formatter = new IntlDateFormatter(
            $locale,
            IntlDateFormatter::NONE,
            IntlDateFormatter::NONE,
            null,
            null,
            'MMMM'
        );
        return $formatter->format($date);
    }

    /** Formate un montant avec deux décimales */
    public function format_montant($montant): string
    {
        return number_format($montant, 2, ',', ' ');
    }

}
