<?php
require_once "include/conexion.php";

try {

    $stmt=$conn->query("CREATE TABLE tabla01 (
                        id_tabla INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                        nombre VARCHAR(80) NOT NULL,
                        descripcion VARCHAR(200) NOT NULL
                        )"
    );

    message(05);

} catch(PDOException $e) {
    message(06);
    //echo "Connection failed: " . $e->getMessage();
    //die();
}
