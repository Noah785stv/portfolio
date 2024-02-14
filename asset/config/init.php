<?php
//fichier core du système. Il doit être appelé sur tous les fichiers. Il intégrera la configuration du site : les urls, l'accès à la base de données etc. 
//gestion des erreurs : 
ini_set('display_errors', 1);
error_reporting(E_ALL);

//intialisation de la session
// session_start();

//configuration de la base de données
$options = [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,//on affiche les erreurs. En prod, on met ERRMODE_SILENT
      PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',//on définit le charset
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,//on récupère les données sous forme de tableau associatif
];

// define('CONNECTBDD',array(
//       'type'=>'mysql',//type de bdd
//       'host'=>'localhost',//hôte
//       'user'=>'buha3187',//utilisateur
//       'pass'=>'fGnq-Qbmv-Dkj]',//mot de passe Sous MAC & LAMP : 'root' Sous Windows : ''
//       'database' => 'buha3187_portfolio'//nom de la base de données
// ));
define('CONNECTBDD',array(
      'type'=>'mysql',//type de bdd
      'host'=>'localhost',//hôte
      'user'=>'root',//utilisateur
      'pass'=>'',//mot de passe Sous MAC & LAMP : 'root' Sous Windows : ''
      'database' => 'portfolio'//nom de la base de données
));

try{
      $pdo = new PDO(CONNECTBDD['type'].':host='.CONNECTBDD['host'].';dbname='.CONNECTBDD['database'],CONNECTBDD['user'],CONNECTBDD['pass'],$options);
}catch(PDOException $e){
      die('<p>Erreur lors de la connexion à la base de données : '.$e->getMessage() . '</p>');
}

//variable d'affichage : 
// $content = ""; contenu de la page

//inclusion des fonctions
// require('fonctions.php');

//constante d'url : 
// define("URL","http://localhost/php/crud/");

//déconnexion + suppression de la session : 
// if(isset($_GET['logout']) && $_GET['logout'] == 'true')
// {
//       session_destroy();
//       header('location:'.URL.'login.php');
//       exit();
// }