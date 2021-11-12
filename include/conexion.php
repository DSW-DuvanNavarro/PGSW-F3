<?php
require_once "include/headcnx.php";

function message($msg){
    header("Location: notif.php?msg=".$msg);
    exit;
}

function valBD($conn, $nombreBD){
    // Prepare
    $stmt = $conn->prepare("SELECT schema_name FROM information_schema.schemata WHERE schema_name = :nombreBD");
    // Bind
    $stmt->bindParam(':nombreBD', $nombreBD);
    // Excecute
    $stmt->execute();
    $num_rows = $stmt->fetchColumn();

    if($num_rows > 0){
        return true;
    }else{
        return false;
    }
}

try {
    $conn = new PDO("mysql:host=".$servername, $username, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''));
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

    // Validar BD Existe
    $valBd = valBD($conn, $nombreBD);
    
    if(!$valBd){
        message(01); //no existe bd
    }else{
        $conn->query("USE ".$nombreBD);
    }

} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    //message("Connection failed: " . $e->getMessage() . " - Espere por favor...");
    die();
}
