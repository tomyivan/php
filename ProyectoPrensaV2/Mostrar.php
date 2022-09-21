<?php

// if(isset($_POST['Ingresar'])){
class Mostrar extends Conectar {

    public function mostrarD() {
        global $result;
        $sql = "SELECT periodismo.Id, periodismo.Fecha, presentador.NombrePresentador, periodismo.Edicion, periodismo.Emitido, productor.Nombre, periodismo.Descripcion, periodismo.Formato, periodismo.Ciudad, periodista.NombrePeriodista, editor.NombreEditor, periodismo.Contenido, periodismo.Duracion, periodismo.Bloque, periodismo.mm_ss, periodismo.Hora_Prog FROM periodismo INNER JOIN presentador ON periodismo.IdPresentador=presentador.IdPresentador INNER JOIN productor ON periodismo.IdProductor=productor.IdProductor INNER JOIN periodista ON periodismo.IdPeriodista=periodista.IdPeriodista INNER JOIN editor ON periodismo.IdEditor = editor.IdEditor";
        //$sql = "SELECT *FROM periodismo";
        $result = $this->conectar()->query($sql);
        if (empty($result)) {
            echo 'error';
        }
        $this->imprimir();
    }

    public function Buscar($fecha) {
        global $result;
        $sql = "SELECT periodismo.Id, periodismo.Fecha, presentador.NombrePresentador, periodismo.Edicion, periodismo.Emitido, productor.Nombre, periodismo.Descripcion, periodismo.Formato, periodismo.Ciudad, periodista.NombrePeriodista, editor.NombreEditor, periodismo.Contenido, periodismo.Duracion, periodismo.Bloque, periodismo.mm_ss, periodismo.Hora_Prog FROM periodismo INNER JOIN presentador ON periodismo.IdPresentador=presentador.IdPresentador INNER JOIN productor ON periodismo.IdProductor=productor.IdProductor INNER JOIN periodista ON periodismo.IdPeriodista=periodista.IdPeriodista INNER JOIN editor ON periodismo.IdEditor = editor.IdEditor WHERE periodismo.Fecha='$fecha'";
        // $sql = "SELECT * FROM periodismo WHERE Fecha='$fecha'";
        $result = $this->conectar()->query($sql);
        if (empty($result)) {
            echo 'error';
        }
        $this->imprimir();
    }

    public function imprimir() {
        global $result;
        $con = new selectList();
        while ($registro = $result->fetch_array(MYSQLI_BOTH)) {

            echo "<tr>
                <td>" . $registro['Id'] . "</td>
                <td id='fecha' data-id_fecha='".$registro['Id']."' contenteditable>" . $registro['Fecha'] . "</td>
                <td>" . $registro['NombrePresentador'] . "</td>
                <td contenteditable>" . $registro['Edicion'] . "</td>
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
                
                <td>"
            ?> <div class='btn-group' role='group' aria-label='Basic mixed styles example'>
                <!--modal-->
                <?php
                include('modalEditar.php');?>
                <button type="button" class="btn btn-danger" onclick="confirmaEliminar(<?php echo $registro['Id']; ?>)">Eliminar</button>
            </div></td>
            <td> <span class='arriba'><img src="img/chevron-up.svg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top"></span>  <span class='abajo'> <img src="img/chevron-down.svg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top"></span>  </td>

            </tr>
            <?php
        }
    }
}
$con = new Mostrar();
if (isset($_POST['Buscar'])) {
    $con->Buscar($_POST['Bfecha']);
} else if (isset($_POST['Cancelar'])) {
    $con->mostrarD();
} else {
    $con->mostrarD();
}
                    
                   
