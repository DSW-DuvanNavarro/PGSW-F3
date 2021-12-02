<?php
require_once "include/conexion.php";

$data = [
    "codigoDt" => "",
    "nombreDt" => "",
    "marcaDt" => "",
    "precioDt" => "",
    "cantidad_cDt" => ""
];
function ConsultarProducto($conn, $codigo, $data){
    try {
        // Prepare
        $stmt = $conn->prepare("SELECT * FROM producto WHERE codigo=:codigo");
        // Bind
        $stmt->bindParam(':codigo', $codigo);
        // Excecute
        if ($stmt->execute()) {
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                $data['codigoDt'] = $row['codigo'];
                $data['nombreDt'] = $row['nombre'];
                $data['marcaDt'] = $row['marca'];
                $data['precioDt'] = $row['precio'];
                $data['cantidad_cDt'] = $row['cantidad_c'];
            }
        }     
    } catch(PDOException $e) {
        message(07);//error
    }
    return $data;
}
if (isset($_POST['cdp'])) {
    $cdp = htmlspecialchars($_POST['cdp']);
    $data = ConsultarProducto($conn, $cdp, $data);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="css/styles.css">
    <title>App - PCElectronics</title>
</head>
<body>
    
<?php include_once "include/menumain.php"; ?>
    
    <main class="container">
      
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="insert-tab" data-bs-toggle="tab" data-bs-target="#insert" type="button" role="tab" aria-controls="insert" aria-selected="true">Ingresar Producto</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="update-tab" data-bs-toggle="tab" data-bs-target="#update" type="button" role="tab" aria-controls="update" aria-selected="false">Actualizar Producto</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="delete-tab" data-bs-toggle="tab" data-bs-target="#delete" type="button" role="tab" aria-controls="delete" aria-selected="false">Eliminar Producto</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="query-tab" data-bs-toggle="tab" data-bs-target="#query" type="button" role="tab" aria-controls="query" aria-selected="false">Consultar Producto</button>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade" id="insert" role="tabpanel" aria-labelledby="insert-tab">
                <form class="pt-4 col-6 mx-auto" method="post" action="gestionProducto.php">
                    <input type="hidden" name="tipoForm" value="1">
                    <div class="mb-3">
                        <label for="txt1" class="form-label">Código de producto</label>
                        <input type="number" name="codigoForm" class="form-control" id="txt1" required>
                    </div>
                    <div class="mb-3">
                        <label for="txt2" class="form-label">Nombre de producto</label>
                        <input type="text" name="nombreForm" class="form-control" id="txt2" required>
                    </div>
                    <div class="mb-3">
                        <label for="txt3" class="form-label">Marca del producto</label>
                        <input type="text" name="marcaForm" class="form-control" id="txt3" required>
                    </div>
                    <div class="mb-3">
                        <label for="txt4" class="form-label">Precio de compra</label>
                        <input type="number" name="precioForm" min="1" class="form-control" id="txt4" required>
                    </div>
                    <div class="mb-3">
                        <label for="txt5" class="form-label">Cantidad comprada</label>
                        <input type="number" name="cantidad_cForm" min="1" class="form-control" id="txt5" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Registrar producto</button>
                </form>
                
            </div>
            <div class="tab-pane fade" id="update" role="tabpanel" aria-labelledby="update-tab">
                <form class="pt-4 col-6 mx-auto" method="post" action="gestionProducto.php">
                    <input type="hidden" name="tipoForm" value="2">
                    <div class="mb-3">
                        <label for="txtUp1" class="form-label">Código de producto</label>
                        <input type="text" name="codigoForm" class="form-control" id="txtUp1" >
                    </div>
                    <div class="mb-3">
                        <label for="txtUp2" class="form-label">Nombre de producto</label>
                        <input type="text" name="nombreForm" class="form-control" id="txtUp2" >
                    </div>
                    <div class="mb-3">
                        <label for="txtUp3" class="form-label">Marca del producto</label>
                        <input type="text" name="marcaForm" class="form-control" id="txtUp3" >
                    </div>
                    <div class="mb-3">
                        <label for="txtUp4" class="form-label">Precio de compra</label>
                        <input type="number" name="precioForm" min="1" class="form-control" id="txtUp4" >
                    </div>
                    <div class="mb-3">
                        <label for="txtUp5" class="form-label">Cantidad comprada</label>
                        <input type="number" name="cantidad_cForm" min="1" class="form-control" id="txtUp5" >
                    </div>
                    <button type="submit" class="btn btn-primary">Modificar producto</button>
                </form>
            </div>
            <div class="tab-pane fade" id="delete" role="tabpanel" aria-labelledby="delete-tab">
                <form class="pt-4 col-6 mx-auto" method="post" action="gestionProducto.php">
                    <input type="hidden" name="tipoForm" value="3">
                    <div class="mb-3">
                        <label for="txtDl1" class="form-label">Código de producto</label>
                        <input type="text" name="codigoForm" class="form-control" id="txtDl1" >
                    </div>
                    <button type="submit" class="btn btn-primary">Borrar producto</button>
                </form>
            </div>
            <div class="tab-pane fade show active" id="query" role="tabpanel" aria-labelledby="query-tab">
                <form class="pt-4 col-6 mx-auto" method="post" action="">
                    <input type="hidden" name="tipoForm" value="4">
                    <div class="mb-3">
                        <label for="txtQr1" class="form-label">Código de producto</label>
                        <input type="number" name="cdp" class="form-control" id="txtQr1" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Consultar producto</button>
                </form>
                <br>
                <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Código</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Cantidad</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $data['codigoDt']; ?></td>
                        <td><?php echo $data['nombreDt']; ?></td>
                        <td><?php echo $data['marcaDt']; ?></td>
                        <td><?php echo $data['precioDt']; ?></td>
                        <td><?php echo $data['cantidad_cDt']; ?></td>
                    </tr>
                </tbody>
                </table>
            </div>
        </div>

    </main>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>