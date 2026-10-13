<?php
foreach ($tableau as $ligne)
    {
    ?>
    <section class="card p-3">
        <img src="<?= $ligne["image"] ?>" class="card-img-top mb-3">
        <h4 class="card-title"><?= $ligne["titre"] ?></h4>
        <p><?= $ligne["description"] ?></p>
        <a href="<?= $ligne["lien"] ?>" class="btn-solid pb-4">Lire l'article</a>
        <div class="card-footer"><h6><?= $ligne["date"] ?></h6></div>
        
    </section>
    <br>
<?php
}
?>