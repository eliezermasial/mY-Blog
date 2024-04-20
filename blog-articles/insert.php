<?php
/*
require_once("connect.php");
//recuperation des valeurs pouchés;
$nameUser= htmlspecialchars($_POST["name"]);
$mailuser= htmlspecialchars($_POST["email"]);
$passworduser= htmlspecialchars($_POST["password"]);

//on verifie si les camps n'est pas vide;
if(!empty($nameUser) && !empty($mailuser) && !empty($passworduser)){
    if(!filter_var($mailuser,FILTER_VALIDATE_EMAIL)){
        echo "email n'est pas valide";
    }
    
    //insertion des données dans langages SQl;
    $inserto = "INSERT INTO `stockageusers`(`nom`,`mail`,`code`) VALUES ( :nom, :mail, :code)";
    //preparer l'insertion;
    $prepareDn = $dataMysql -> prepare($inserto);
    //execute l'insertion;
    $executTo = $prepareDn -> execute( [":nom"=>$nameUser,":mail"=>$mailuser,":code"=>$passworduser]);
    //on verifie si le code s'execute;
    if($executTo){
        echo 'vous avez crée un compte';
    }
}else {
    echo "veillez remplir correctement les champs";
}
*/
?>