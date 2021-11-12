<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
    <a class="navbar-brand" href="index.php">PCElectronics </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Administrador
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="gestionBD.php">Crear Base de datos</a></li>
            <li><a class="dropdown-item" href="crearTablaBD.php">Crear Tabla</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="generarPDF.php">Generar Reporte PDF</a></li>
            <li><a class="dropdown-item" href="backUpBD.php">Generar BackUp</a></li>
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="inventario.php">Inventario</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="utilidad.php">Utilidades</a>
        </li>
        </ul>
    </div>
    </div>
</nav>