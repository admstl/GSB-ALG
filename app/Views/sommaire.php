<?php 
$session = session();
$menus = getMenus();
?>

<div id="menuGauche">
    <div id="infosUtil">
        <div id="user">
            <img src="<?= base_url('assets/images/UserIcon.png') ?>" alt="Utilisateur" />
        </div>
        <div id="infos">
            <h2><?= esc($session->get('prenom') . ' ' . $session->get('nom')) ?></h2>
            <h3><?= esc($session->get('libelleRole')) ?></h3>  
        </div>
        <ul class="menuList">
            <li>
                <?= anchor('connexion/deconnexion', 'Déconnexion', ['title' => 'Se déconnecter']) ?>
            </li>
        </ul> 
    </div>  

    <ul id="menuPrincipal" class="menuList">
        <?php foreach ($menus as $item): ?>
            <li>
                <?= anchor($item[0], $item[1], $item[2]) ?>
            </li>
        <?php endforeach; ?>
    </ul>
</div>