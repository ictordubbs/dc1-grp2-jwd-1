<?php

require_once '../../security.php';
require_once '../../../model/database.php';

$libelle = $_POST["libelle"];

insertTags($libelle);

header("Location: index.php");