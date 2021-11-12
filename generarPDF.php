<?php
require_once "include/conexion.php";
require_once "./vendor/autoload.php";
use Dompdf\Dompdf;
 
$html = '<h1>Reporte Productos</h1>';
$html .= '<table border="1">';

$html .= '<tr>';
$html .= '<th>Codigo</th>';
$html .= '<th>Nombre</th>';
$html .= '<th>Marca</th>';
$html .= '<th>Precio</th>';
$html .= '<th>Cantidad</th>';
$html .= '</tr>';

$html .= '<tr>';

$stmt = $conn->prepare("SELECT * FROM producto");
$stmt->execute();
$productos = $stmt->fetchAll(PDO::FETCH_OBJ);
foreach ($productos as $producto){
    $html .= '<td>'.$producto->codigo.'</td>';
    $html .= '<td>'.$producto->nombre.'</td>';
    $html .= '<td>'.$producto->marca.'</td>';
    $html .= '<td>'.$producto->precio.'</td>';
    $html .= '<td>'.$producto->cantidad_c.'</td>';
}

$html .= '</tr>';

$html .= '</table>';

$pdf = new DOMPDF();
$pdf->set_paper("A4", "portrait");
$pdf->load_html(utf8_decode($html));
$pdf->render();

$pdf->stream('ReporteProductos.pdf');
