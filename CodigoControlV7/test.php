<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<div id="contenedor">
            <form id="form1" method="get">      
                    <span style="color: #FFF">
                        <input id="Generar" name="Generar" type="submit" value="Generar"  />
                        <input id="Limpiar"  name="Limpiar" type="submit" value="Limpiar" onclick="" />
                    </span>
                
            </form>
        </body>
</html>
<?php
require_once('CodigoControlV7.php');
$txt_file = '5000CasosPruebaCCVer7.txt';
$lines = file($txt_file);
$generar = "";
if($_SERVER['REQUEST_METHOD'] == "GET" and isset($_GET['Generar']))$generar = $_GET['Generar'];
if($generar){
	echo "<table border=1 cellspacing=0s>";
	echo "<tr>";
	echo "  <th> Registro  </th>";
	echo "  <th> Codigo S.I.N </th>";
	echo "  <th> Codigo Generado</th>";
	echo "  <th> Resultado </th>";
	echo "</tr>";

	foreach ($lines as $num=>$line)
		{
			$datos = explode("|", $line);
			$numero_autorizacion = $datos[0];//
			$numero_factura = $datos[1];
			$nit_cliente = $datos[2];
			$fecha_compra = str_replace("/","",$datos[3]);
			$monto_compra = $datos[4];
			$clave = $datos[5];
			$codigoGenerado= CodigoControlV7::generar($numero_autorizacion, $numero_factura, $nit_cliente, $fecha_compra, $monto_compra, $clave);
			if($codigoGenerado == $datos[10]){
				$verificacion = "IGUALES";
			}
			else{
				$verificacion = "NO IGUALES";
			}
			$num = $num+1;
			echo "<tr>";
			echo "<td>".$num."</td><td>".$datos[10]."</td><td> " . $codigoGenerado . "</td><td>".$verificacion."</td>";
			echo "</tr>";

	}
	echo "</table>";
}

?>


