<?php
session_start();

$host="localhost";//nom de l'hote
$user="root";//nom d'utilisateur de la db
$mdp="";//mot de passe
$db="db_cvs";//lien de connexon a la db
$link=mysqli_connect($host,$user,$mdp);
	mysqli_select_db($link,$db);


//try{
	//$strConnection='mysql:host=localhost;dbname=db_cvs';
	//$pdo= new PDO ($strConnection,'root',''); 
//}
//catch (PDOException $e) {
    // $msg= 'ERREUR PDO dans' . $e->getMessage();
    // die ($msg);
//}



?>
