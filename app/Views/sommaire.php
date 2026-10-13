<?php $session = session(); ?>

<div id="menuGauche">
    <div id="infosUtil">
        <div id="user">
            <img src="<?= base_url('assets/images/UserIcon.png') ?>" alt="Utilisateur" />
        </div>
        <div id="infos">
            <h2><?= esc($session->get('prenom') . ' ' . $session->get('nom')) ?></h2>
            <h3>Visiteur médical</h3>  
        </div>
        <ul class="menuList">
            <li>
                <?= anchor('connexion/deconnexion', 'Déconnexion', ['title' => 'Se déconnecter']) ?>
            </li>
        </ul> 
    </div>  

    <ul id="menuPrincipal" class="menuList">
        <li>
            <?= anchor('accueil', 'Accueil', ['title' => 'Accueil']) ?>
        </li>
        <li>
            <?= anchor('gererfrais', 'Saisie fiche de frais', ['title' => 'Saisie fiche de frais']) ?>
        </li>
        <li>
            <?= anchor('etatfrais', 'Mes fiches de frais', ['title' => 'Consultation de mes fiches de frais']) ?>
        </li>
    </ul>
</div>
