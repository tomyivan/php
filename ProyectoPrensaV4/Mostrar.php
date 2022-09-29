<?php

class Mostrar extends Conectar {

    public function mostrarD() {
        global $result;
        $sql = "SELECT periodismo.Id, periodismo.Fecha, presentador.NombrePresentador, periodismo.Edicion, periodismo.Emitido, productor.Nombre, periodismo.Descripcion, periodismo.Formato, periodismo.Ciudad, periodista.NombrePeriodista, editor.NombreEditor, periodismo.Contenido, periodismo.Duracion, periodismo.Bloque, periodismo.mm_ss, periodismo.Hora_Prog FROM periodismo INNER JOIN presentador ON periodismo.IdPresentador=presentador.IdPresentador INNER JOIN productor ON periodismo.IdProductor=productor.IdProductor INNER JOIN periodista ON periodismo.IdPeriodista=periodista.IdPeriodista INNER JOIN editor ON periodismo.IdEditor = editor.IdEditor";
        $result = $this->conectar()->query($sql);
        if (empty($result)) {
            echo 'error';
        }
        $this->imprimir();
    }

    public function Buscar($fecha) {
        global $result;
        $sql = "SELECT periodismo.Id, periodismo.Fecha, presentador.NombrePresentador, periodismo.Edicion, periodismo.Emitido, productor.Nombre, periodismo.Descripcion, periodismo.Formato, periodismo.Ciudad, periodista.NombrePeriodista, editor.NombreEditor, periodismo.Contenido, periodismo.Duracion, periodismo.Bloque, periodismo.mm_ss, periodismo.Hora_Prog FROM periodismo INNER JOIN presentador ON periodismo.IdPresentador=presentador.IdPresentador INNER JOIN productor ON periodismo.IdProductor=productor.IdProductor INNER JOIN periodista ON periodismo.IdPeriodista=periodista.IdPeriodista INNER JOIN editor ON periodismo.IdEditor = editor.IdEditor WHERE periodismo.Fecha='$fecha'";
        $result = $this->conectar()->query($sql);
        if (empty($result)) {
            echo 'error';
        }
        $this->imprimir();
    }
   
    
    public function imprimir() {
        global $result,$contador,$cont;
        $cont=0;
        $contador[]=0;
        $con = new selectList();
        while ($registro = $result->fetch_array(MYSQLI_BOTH)) {
            $cont = $cont+1;
            echo "<tr>
                <td>" . $registro['Id'] . "</td>
                <td>" . $cont . "</td>
                <td>" . $registro['Fecha'] . "</td>
                <td>" . $registro['NombrePresentador'] . "</td>
                <td>" . $registro['Emitido'] . "</td>
                <td>" . $registro['Nombre'] . "</td>
                <td>" . $registro['Descripcion'] . "</td>
                <td>" . $registro['Formato'] . "</td>
                <td>" . $registro['Ciudad'] . "</td>
                <td>" . $registro['NombrePeriodista'] . "</td>
                <td>" . $registro['NombreEditor'] . "</td>
                <td>" . $registro['Contenido'] . "</td>
                <td id='duracion'>" . $registro['Duracion'] . "</td>
                <td>" . $registro['Bloque'] . "</td>
                <td id='horaProg'>" . $registro['Hora_Prog'] . "</td>
                
                <td>";

            $contador[]= $cont;
            $_SESSION['Edicion'] = $registro['Edicion'];
            ?> <div class='btn-group' role='group' aria-label='Basic mixed styles example'>
                <!--modal-->
               
                <button type="button" class="btn btn-danger" onclick="confirmaEliminar(<?php echo $registro['Id']; ?>)">Eliminar</button>
            </div></td>
            <td> <span class='arriba' onclick="moverarriba(<?php echo $registro['Id']; ?>,0)"><img src="img/chevron-up.svg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top"></span>  <span class='abajo' onclick="moverabajo(<?php echo $registro['Id']; ?>,1)"> <img src="img/chevron-down.svg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top"></span>  </td>

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

$con2 = new selectList();
$auxPresentador=substr($con2->tablaDinamicaPresentador(), 8, -2);
$auxPeriodista=substr($con2->tablaDinamicaPeriodista(), 8, -2);
$auxEditor =substr($con2->tablaDinamicaEditor(), 8, -2);


?>

<script type="text/javascript">
    $(document).ready(function(){
    $('#data_table').Tabledit({
        deleteButton: false,
        editButton: false,          
        columns: {
          identifier: [0, 'id'],                    
          editable: [[2,'fecha'],[3,'presentador','{<?php echo $auxPresentador;?>}'],[4,'emitido', '{"":"","Si": "Si", "No": "No"}'],[6,'descripcion'],[7,'formato', '{"":"","Capsula": "Capsula", "Clima": "Clima", "Comercio": "Comercio", "Compacto": "Compacto", "Cuadros": "Cuadros", "Entrevistas": "Entrevistas", "Falso": "Falso", "Informe": "Informe"}'],[8,'ciudad','{"":"","La Paz": "La Paz","Cochabamba": "Cochabamba","Santa Cruz": "Santa Cruz"}'],[9,'periodista','{<?php echo $auxPeriodista;?>}'],[10,'editor','{<?php echo $auxEditor;?>}'],[11,'contenido','{"":"","Actuacion": "Actuacion","Brigada": "Brigada","Ciudad": "Ciudad","Clima": "Clima","Cocina": "Cocina","Comercio": "Comercio","Deportes": "Deportes","Despedida": "Despedida"}'],[12,'duracion'],[13,'bloque','{"":"","B1": "B1","B2": "B2","B3": "B3","B4": "B4","B5": "B5","B6": "B7","B7": "B7","B8": "B8"}']]
        },
        hideIdentifier: true,
        url: './TableDinamica/editarCelda.php',   
    });
});
</script>
                    
                   