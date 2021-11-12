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
              <button class="nav-link active" id="cal1-tab" data-bs-toggle="tab" data-bs-target="#cal1" type="button" role="tab" aria-controls="cal1" aria-selected="true">Calculadora de Ventas</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="cal2-tab" data-bs-toggle="tab" data-bs-target="#cal2" type="button" role="tab" aria-controls="cal2" aria-selected="false">Conversor de Unidades</button>
            </li>
        </ul>

        <div class="tab-content" id="myTabContent">

            <div class="tab-pane fade show active" id="cal1" role="tabpanel" aria-labelledby="cal1-tab">

                
                <form name="f1" action="" method="POST" class="col-8 mx-auto pt-4">

                    <div class="input-group">
                        
                        <div class="input-group">

                            <span class="input-group-text col-4" id="basic-addon1">Valor de Compra</span>
                            <input type="number" class="form-control" id="vc" placeholder="$5000" name="vc">

                        </div>

                        <div class="input-group">

                            <span class="input-group-text col-4" id="basic-addon2">Utilidad o Ganancia (%)</span>
                            <input type="number" class="form-control" id="ut" min="1" max="100" placeholder="30%" name="ut">

                        </div>

                        <div class="input-group">

                            <span class="input-group-text col-4" id="basic-addon3">IVA (%)</span>
                            <input type="number" class="form-control" id="i" min="1" max="100" placeholder="19%" name="i">

                        </div>



                        <div id="bConver">

                            
                            <button type="button" class="btn btn-primary btn-lg"  value="Calcular" onclick="CalcularVenta()">Calcular</button>
                            
                            <button type="reset" class="btn btn-primary btn-lg" value="Limpiar" onclick="Reset()">Limpiar</button>
                            
                            
                        </div>

                      
                        <div class="input-group">
                            

                            <span class="input-group-text col-4" id="basic-addon1">Valor de Venta ($)</span>
                            <input type="number" class="form-control" id="vv" placeholder="" name="vv" readonly>

                        </div>


                        <div class="input-group">

                            <span class="input-group-text col-4" id="basic-addon1">Ganancia ($)</span>
                            <input type="number" class="form-control" id="gn" placeholder="" name="gn" readonly>

                        </div>


                      </div>
                
                  </form>





            </div>

            <div class="tab-pane fade" id="cal2" role="tabpanel" aria-labelledby="cal2-tab">


                <form name="f2" action="" method="POST" class="col-3 mx-auto row pt-4">

                    <div class="input-group">

                    
                    <div class="input-group">
                        <input type="number" class="form-control" id="a" name="a" placeholder="Digite aquí el valor a convertir" style="width: 300px; text-align: center;">
                    </div>
                    
  
                    <div class="input-group">

                        <select name="b1" class="form-select"style="width: 300px; text-align: center;">
                            <option value="1000000000">BYTE (B)</option>
                            <option value="1000000">KILOBYTE (KB)</option>
                            <option value="1000">MEGABYTE (MB)</option>
                            <option value="1">GIGABYTE (GB)</option>
                            <option value="0.001">TERABYTE (TB)</option>
                        </select>

                    </div>

                    

                    <div class="d-grid gap-2" id="bConvertir">
                        <button type="button" class="btn btn-primary" onclick="Convertir()">Convertir</button> 
                    </div>

                    
                    <div class="input-group">

                        <select name="b2" class="form-select"style="width: 300px; text-align: center;">
                            <option value="1000000000">BYTE (B)</option>
                            <option value="1000000">KILOBYTE (KB)</option>
                            <option value="1000">MEGABYTE (MB)</option>
                            <option value="1">GIGABYTE (GB)</option>
                            <option value="0.001">TERABYTE (TB)</option>
                        </select>

                    </div>

                        <fieldset disabled>
                        <input type="text" class="form-control" id="c" name="c" placeholder="Resultado"style="width: 300px; text-align: center;">

                    </div>

	</div>

                </form>


            

            

        </div>

    </main>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="js/customscript.js"></script>

</body>
</html>