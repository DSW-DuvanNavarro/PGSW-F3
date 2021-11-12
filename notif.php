<?php
//mensajes
/*
msg = 01 -> La base de datos no existe para realizar esta acción.
msg = 02 -> No se ha podido crear la base de datos. Verifique si la base de datos ya existe o hubo un error desconocido.
msg = 03 -> No se ha podido crear la tabla Producto. 
msg = 04 -> LA BASE DE DATOS FUE CREADA CON ÉXITO. 
msg = 05 -> TABLA CREADA CON ÉXITO.
msg = 06 -> No se ha podido crear la tabla. Verifique si ya existe o hubo un error desconocido.
*/
$msg = "";
$color = "alert-danger";
if(isset($_GET['msg'])){ $msg = $_GET['msg']; }
switch ($msg) {
    case 01:
        $msg = "La base de datos no existe para realizar esta acción.";
        break;
    case 02:
        $msg = "No se ha podido crear la base de datos. Verifique si la base de datos ya existe o hubo un error desconocido.";
        break;
    case 03:
        $msg = "No se ha podido crear la tabla Producto.";
        break;
    case 04:
        $msg = "LA BASE DE DATOS FUE CREADA CON ÉXITO. ";
        $color = "alert-success";
        break;
    case 05:
        $msg = "TABLA CREADA CON ÉXITO. ";
        $color = "alert-success";
        break;
    case 06:
        $msg = "No se ha podido crear la tabla. Verifique si ya existe o hubo un error desconocido.";
        break;
            
    default:
        $msg = "*************************";
        break;
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
        
    <div class="alert <?php echo $color; ?>" role="alert">
        <?php echo $msg; ?>
    </div>

    </main>
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
