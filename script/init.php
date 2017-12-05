<?php 
session_start();
include('functions.php');
include('config.php'); 


try{
    global $config;
    $dsn = 'mysql:dbname='.$config['dbname'].';host='.$config['dbhost'].'; charset=utf8';
    $db = new PDO($dsn, $config['dbuser'], $config['dbpassword'] );
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    return $db;
} 
catch(PDOException $e){
   
   $erreurDb = '<h1>Erreur</h1>';
   $erreurDb .= '<p> Erreur de connexion à la bdd: '.$e->getMessage().'</p>';
   echo $erreurDb;
   
    die();
}



