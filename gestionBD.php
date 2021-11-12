<?php
require_once "include/conexion.php";

try {
   
    $stmt=$conn->query("CREATE DATABASE ".$nombreBD);

    $conn->query("USE ".$nombreBD);

    $stmt=$conn->query("CREATE TABLE producto (
                        id_producto INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                        codigo VARCHAR(30) NOT NULL,
                        nombre VARCHAR(80) NOT NULL,
                        marca VARCHAR(80) NOT NULL,
                        precio VARCHAR(80) NOT NULL,
                        cantidad_c VARCHAR(10) NOT NULL
                        )"
    );

    message(04);

} catch(PDOException $e) {
    message(02);
    //echo "Connection failed: " . $e->getMessage();
    //die();
}
