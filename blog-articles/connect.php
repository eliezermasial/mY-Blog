<?php
require_once('config.php');
//connect base des données;
$mysql="mysql:host=$host;dbname=$namDbd";
try {
    $dataMysql= new PDO($mysql,$user,$motPass);
} catch (PDOEXCEPTION $th) {
    echo 'Err :'.$sth -> getMessage();
}
?>