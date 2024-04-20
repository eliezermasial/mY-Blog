<?php
require_once('connect.php');
//selection de tout les contenus dans le bdb article;
$select= "SELECT * FROM `articles`";
$query= $dataMysql->query($select);
$recupArticles= $query->fetchAll();

?>