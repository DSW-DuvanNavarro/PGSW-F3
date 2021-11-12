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
              <button class="nav-link active" id="insert-tab" data-bs-toggle="tab" data-bs-target="#insert" type="button" role="tab" aria-controls="insert" aria-selected="true">Ingresar Producto</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="update-tab" data-bs-toggle="tab" data-bs-target="#update" type="button" role="tab" aria-controls="update" aria-selected="false">Actualizar Producto</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="delete-tab" data-bs-toggle="tab" data-bs-target="#delete" type="button" role="tab" aria-controls="delete" aria-selected="false">Eliminar Producto</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="query-tab" data-bs-toggle="tab" data-bs-target="#query" type="button" role="tab" aria-controls="query" aria-selected="false">Consultar Producto</button>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="insert" role="tabpanel" aria-labelledby="insert-tab">
                <form class="pt-4 col-6 mx-auto">
                    <div class="mb-3">
                        <label for="txt1" class="form-label">Código de producto</label>
                        <input type="text" class="form-control" id="txt1" >
                    </div>
                    <div class="mb-3">
                        <label for="txt2" class="form-label">Nombre de producto</label>
                        <input type="text" class="form-control" id="txt2" >
                    </div>
                    <div class="mb-3">
                        <label for="txt3" class="form-label">Marca del producto</label>
                        <input type="text" class="form-control" id="txt3" >
                    </div>
                    <div class="mb-3">
                        <label for="txt4" class="form-label">Precio de compra</label>
                        <input type="number" min="1" class="form-control" id="txt4" >
                    </div>
                    <div class="mb-3">
                        <label for="txt5" class="form-label">Cantidad comprada</label>
                        <input type="number" min="1" class="form-control" id="txt5" >
                    </div>
                    <button type="submit" class="btn btn-primary">Registrar producto</button>
                </form>
                
            </div>
            <div class="tab-pane fade" id="update" role="tabpanel" aria-labelledby="update-tab">
                <form class="pt-4 col-6 mx-auto">
                    <div class="mb-3">
                        <label for="txtUp1" class="form-label">Código de producto</label>
                        <input type="text" class="form-control" id="txtUp1" >
                    </div>
                    <div class="mb-3">
                        <label for="txtUp2" class="form-label">Nombre de producto</label>
                        <input type="text" class="form-control" id="txtUp2" >
                    </div>
                    <div class="mb-3">
                        <label for="txtUp3" class="form-label">Marca del producto</label>
                        <input type="text" class="form-control" id="txtUp3" >
                    </div>
                    <div class="mb-3">
                        <label for="txtUp4" class="form-label">Precio de compra</label>
                        <input type="number" min="1" class="form-control" id="txtUp4" >
                    </div>
                    <div class="mb-3">
                        <label for="txtUp5" class="form-label">Cantidad comprada</label>
                        <input type="number" min="1" class="form-control" id="txtUp5" >
                    </div>
                    <button type="submit" class="btn btn-primary">Modificar producto</button>
                </form>
            </div>
            <div class="tab-pane fade" id="delete" role="tabpanel" aria-labelledby="delete-tab">
                <form class="pt-4 col-6 mx-auto">
                    <div class="mb-3">
                        <label for="txtDl1" class="form-label">Código de producto</label>
                        <input type="text" class="form-control" id="txtDl1" >
                    </div>
                    <button type="submit" class="btn btn-primary">Borrar producto</button>
                </form>
            </div>
            <div class="tab-pane fade" id="query" role="tabpanel" aria-labelledby="query-tab">
                <form class="pt-4 col-6 mx-auto">
                    <div class="mb-3">
                        <label for="txtQr1" class="form-label">Código de producto</label>
                        <input type="text" class="form-control" id="txtQr1" >
                    </div>
                    <button type="submit" class="btn btn-primary">Consultar producto</button>
                </form>
            </div>
        </div>

    </main>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>