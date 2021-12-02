<?php
require_once "include/conexion.php";

/*************
 * tipoForm = 1  -> Crear producto
 *            2  -> Actualizar producto
 *            3  -> Eliminar producto
 *            4  -> Consultar producto
 *            
 */

(isset($_POST['tipoForm'])) ? /* no hacer nada */ : /* Error */ message(11) ;

$data = [
    "IdProductoDt" => (isset($_POST['IdProductoForm'])) ? htmlspecialchars($_POST['IdProductoForm']) : "" ,
    "codigoDt" => (isset($_POST['codigoForm'])) ? htmlspecialchars($_POST['codigoForm']) : "",
    "nombreDt" => (isset($_POST['nombreForm'])) ? htmlspecialchars($_POST['nombreForm']) : "",
    "marcaDt" => (isset($_POST['marcaForm'])) ? htmlspecialchars($_POST['marcaForm']) : "",
    "precioDt" => (isset($_POST['precioForm'])) ? htmlspecialchars($_POST['precioForm']) : "",
    "cantidad_cDt" => (isset($_POST['cantidad_cForm'])) ? htmlspecialchars($_POST['cantidad_cForm']) : ""
];

switch ($_POST['tipoForm']) {
    case '1':
        CrearProducto($conn, $data);
        break;

    case '2':
        ActualizarProducto($conn, $data);
        break;

    case '3':
        EliminarProducto($conn, $data);
        break;

    case '4':
        ConsultarProducto($conn, $data);
        break;
    
    default:
        message(11);///parametros invalidos
        break;
}



function CrearProducto($conn, $data){

    try {
        // Prepare
        $stmt = $conn->prepare("INSERT INTO producto (codigo, nombre, marca, precio, cantidad_c) VALUES (:codigo, :nombre, :marca, :precio, :cantidad_c)");
        // Bind
        $stmt->bindParam(':codigo', $data["codigoDt"]);
        $stmt->bindParam(':nombre', $data["nombreDt"]);
        $stmt->bindParam(':marca', $data["marcaDt"]);
        $stmt->bindParam(':precio', $data["precioDt"]);
        $stmt->bindParam(':cantidad_c', $data["cantidad_cDt"]);
        // Excecute
        if ($stmt->execute()) {
            message(12);//ok
        }else{
            message(10);//error
        }        
    
    } catch(PDOException $e) {
        message(07);//error
    }

}

function ActualizarProducto($conn, $data){
    try {
        // Prepare
        $stmt = $conn->prepare("UPDATE producto
                                SET nombre=:nombre, marca=:marca, precio=:precio, cantidad_c=:cantidad_c  
                                WHERE codigo=:codigo");
        // Bind
        $stmt->bindParam(':codigo', $data["codigoDt"]);
        $stmt->bindParam(':nombre', $data["nombreDt"]);
        $stmt->bindParam(':marca', $data["marcaDt"]);
        $stmt->bindParam(':precio', $data["precioDt"]);
        $stmt->bindParam(':cantidad_c', $data["cantidad_cDt"]);
        // Excecute
        if ($stmt->execute()) {
            message(12);//ok
        }else{
            message(10);//error
        }        
    
    } catch(PDOException $e) {
        message(07);//error
    }
}

function EliminarProducto($conn, $data){
    try {
        // Prepare
        $stmt = $conn->prepare("DELETE FROM producto WHERE codigo=:codigo");
        // Bind
        $stmt->bindParam(':codigo', $data["codigoDt"]);
        // Excecute
        if ($stmt->execute()) {
            message(12);//ok
        }else{
            message(10);//error
        }        
    
    } catch(PDOException $e) {
        message(07);//error
    }
}

