<?php
require_once '../../../model/database.php';

$id =$_GET["id"];
$tag = getEntity("tag", $id);
require_once '../../layout/header.php'; ?>

<h1>Modification d'un Tag</h1>

<form action="update_query.php" method="POST">
    <div class="form-group">
        <label>Libellé</label>
        <input type="text" name="libelle" value="<?php echo $tag["libelle"]; ?>" placeholder="Tag" class="form-control">
    </div>
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <button class="btn btn-success">
        <i class="fa fa-check"></i>
        Enregistrer    
    </button>
</form>

<?php require_once '../../layout/footer.php'; ?>
