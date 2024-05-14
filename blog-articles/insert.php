<?php
require_once("connect.php");
//recuperation des valeurs pouchés;
$id= htmlspecialchars($_POST["id"]);
$title= htmlspecialchars($_POST["titre"]);
$titleTwo= htmlspecialchars($_POST["titre2"]);
$contenus= htmlspecialchars($_POST["story"]);

//on verifie si les camps n'est pas vide;
if(!empty($id) && !empty($title) && !empty($titleTwo) && !empty($contenus)){

    //insertion des données dans langages SQl;
    $insertTo = "INSERT INTO `articles`(`id`,`titre`,`deuxieme_titre`,`contenus`) VALUES ( :id, :titre, :deuxieme_titre, :contenus)";
    //preparer l'insertion;
    $prepareDn = $dataMysql -> prepare($insertTo);
    //execute l'insertion;
    $executTo = $prepareDn -> execute([":id"=>$id,":titre"=>$title,"deuxieme_titre"=>$titleTwo,":contenus"=>$contenus]);
    //on verifie si le code s'execute;
    if($executTo){

        echo '<h1>vous avez ajouté un article</h1>';
    }

}else {
    echo "veillez remplir correctement les champs";
} 

?>