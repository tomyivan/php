<?php

include_once 'conexion.php';

class modificaDatos extends Conectar {

    public function modificar($id) {
        /*$Fecha = $_POST['fecha'];
        $Presentador = $_POST['presentador'];
        $Edicion = $_POST['edicion'];
        $Emitido = $_POST['emitido'];
        $Productor = $_POST['productor'];
        $Descripcion = $_POST['descripcion'];
        $Formato =  $_POST['formato'];
        $Ciudad = $_POST['ciudad'];
        $Periodista = $_POST['periodista'];
        $Editor = $_POST['editor'];
        $Contenido = $_POST['contenido'];
        $Duracion = $_POST['duracion'];
        $Bloque = $_POST['bloque'];
        $Hora_Prog = $_POST['hora_prog'];
        //suma hora
        $hi = strtotime($Duracion);
        $hf = strtotime($Hora_Prog) - strtotime('midnight');
        $mm_ss = date('H:i:s', $hi + $hf);
        for ($i = 0; $i < count($Presentador); $i++) {
            $PresentadorAux = $Presentador[$i];
        }
        for ($i = 0; $i < count($Edicion); $i++) {
            $EdicionAux = $Edicion[$i];
        }
        /* for ($i = 0; $i < count($Productor); $i++) {
          $ProductorAux = $Productor[$i];
          } 
        for($i=0;$i<count($Formato);$i++){
            $FormatoAux = $Formato[$i];
        }
        for ($i = 0; $i < count($Emitido); $i++) {
            $EmitidoAux = $Emitido[$i];
        }
          for($i=0;$i<count($Contenido);$i++){
            $ContenidoAux = $Contenido[$i];
        }
        for ($i = 0; $i < count($Ciudad); $i++) {
            $CiudadAux = $Ciudad[$i];
        }
        for ($i = 0; $i < count($Periodista); $i++) {
            $PeriodistaAux = $Periodista[$i];
        }
        for ($i = 0; $i < count($Editor); $i++) {
            $EditorAux = $Editor[$i];
        }
        for ($i = 0; $i < count($Bloque); $i++) {
            $BloqueAux = $Bloque[$i];
        }
        $sql = "UPDATE periodismo SET  Fecha='$Fecha',IdPresentador = '$PresentadorAux'
            ,Edicion='$EdicionAux',Emitido='$EmitidoAux',IdProductor='$Productor',Descripcion='$Descripcion',	
            Formato='$FormatoAux',Ciudad='$CiudadAux',IdPeriodista='$PeriodistaAux',IdEditor='$EditorAux',Contenido='$ContenidoAux',	
            Duracion='$Duracion',Bloque='$BloqueAux',mm_ss='$mm_ss', Hora_Prog='$Hora_Prog' WHERE Id='$id'";
        $resul = $this->conectar()->query($sql);
        if (!empty($resul)) {
            header('Location: ../Registrar.php');
        } else {
            echo 'Ocurrio un error';
        }*/
        $texto = $_POST['texto'];
        $columna = $_POST['columna'];
        $sql = "UPDATE periodismo SET  $columna ='$texto' WHERE id=$id";
        $resul = $this->conectar()->query($sql);
        if (!empty($resul)) {
            header('Location: ../Registrar.php');
        } else {
            echo 'Ocurrio un error';
        }
    }

}

$id = $_POST['id'];
$con = new modificaDatos();
$con->modificar($id);
