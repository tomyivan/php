<?php
include_once '../php/conexion.php';
header("Content-Type:application/xls");
header("Content-Disposition:attachment; filename=Prensa".date('Y-m-d').".xls");
?>
<table id="dtHorizontalExample" class="table table-striped table-bordered table-sm" cellspacing="0"
       width="100%">
    <thead>
        <tr><th>Id</th>
            <th>Fecha</th>
            <th>Presentador</th>
            <th>Edicion</th>
            <th>Emitido</th>
            <th>Productor</th>
            <th>Descripcion</th>
            <th>Formato</th>
            <th>Ciudad</th>
            <th>Periodista</th>
            <th>Editor</th>
            <th>Contenido</th>
            <th>Duracion</th>
            <th>Bloque</th>
            <th>mm_ss</th>
            <th>Hora Prog</th>
        </tr>
    </thead>
    <?php

class GenerarExcel extends Conectar {    
        public function imprimir() {
            global $result;
             $sql = "SELECT periodismo.Id, periodismo.Fecha, presentador.NombrePresentador, periodismo.Edicion, periodismo.Emitido, productor.Nombre, periodismo.Descripcion, periodismo.Formato, periodismo.Ciudad, periodista.NombrePeriodista, editor.NombreEditor, periodismo.Contenido, periodismo.Duracion, periodismo.Bloque, periodismo.mm_ss, periodismo.Hora_Prog FROM periodismo INNER JOIN presentador ON periodismo.IdPresentador=presentador.IdPresentador INNER JOIN productor ON periodismo.IdProductor=productor.IdProductor INNER JOIN periodista ON periodismo.IdPeriodista=periodista.IdPeriodista INNER JOIN editor ON periodismo.IdEditor = editor.IdEditor";
            $result = $this->conectar()->query($sql);
            while ($registro = $result->fetch_array(MYSQLI_BOTH)) {

                echo "<tr>
                <td>" . $registro['Id'] . "</td>
                <td>" . $registro['Fecha'] . "</td>
                <td>" . $registro['NombrePresentador'] . "</td>
                <td>" . $registro['Edicion'] . "</td>
                <td>" . $registro['Emitido'] . "</td>
                <td>" . $registro['Nombre'] . "</td>
                <td>" . $registro['Descripcion'] . "</td>
                <td>" . $registro['Formato'] . "</td>
                <td>" . $registro['Ciudad'] . "</td>
                <td>" . $registro['NombrePeriodista'] . "</td>
                <td>" . $registro['NombreEditor'] . "</td>
                <td>" . $registro['Contenido'] . "</td>
                <td>" . $registro['Duracion'] . "</td>
                <td>" . $registro['Bloque'] . "</td>
                <td>" . $registro['mm_ss'] . "</td>
                <td>" . $registro['Hora_Prog'] . "</td>
                <td></tr>";
            }
        }

    }
$con=new GenerarExcel(); 
$con->imprimir();
    ?>
                    