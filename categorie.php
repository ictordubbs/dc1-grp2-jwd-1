<?php

require_once 'functions.php';
require_once 'model/database.php';

$id = $_GET["id"];
$categorie = getEntity("categorie", $id);
$liste_photos = getAllPhotosByCategorie($id);

getHeader($categorie["libelle"], "Une catégorie");
?>

<header>
    <div class="row col_center">
        <?php getMenu(); ?>
    </div>
</header>

<section id="gallery_content" class="row col_center flex_wrapper">
        <?php foreach ($liste_photos as $photo) : ?>
           <?php include 'include/photo.inc.php'; ?>
        <?php endforeach; ?>
    </section>

<h1><?php echo $categorie["libelle"] ?></h1>

<?php getFooter(); ?>
