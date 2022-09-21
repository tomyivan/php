<?php
include_once 'conexion.php';
class InsertarDatos extends Conectar{

    public function Ingresar() { 
        $Fecha = $_POST['fecha'];
        $Presentador=$_POST['presentador'];
        $Edicion=$_POST['edicion'];
        $Emitido=$_POST['emitido'];
        $Productor=$_POST['productor'];
        $Descripcion=$_POST['descripcion'];
        $Formato=$_POST['formato'];
        $Ciudad=$_POST['ciudad'];
        $Periodista=$_POST['periodista'];
        $Editor=$_POST['editor'];
        $Contenido=$_POST['contenido'];
        $Duracion=$_POST['duracion'];
        $Bloque=$_POST['bloque'];
       // $mm_ss=9;//$_POST['mm_ss'];
        $Hora_Prog=$_POST['hora_prog'];
        //suma hora
        $hi = strtotime($Duracion);
        $hf = strtotime($Hora_Prog)- strtotime('midnight');
        $mm_ss = date('H:i:s',$hi+$hf);
        for($i=0;$i<count($Presentador);$i++){
            $PresentadorAux = $Presentador[$i];
        }
        for($i=0;$i<count($Edicion);$i++){
            $EdicionAux = $Edicion[$i];
        }
        /*for($i=0;$i<count($Productor);$i++){
            $ProductorAux = $Productor[$i];
        }*/
        for($i=0;$i<count($Formato);$i++){
            $FormatoAux = $Formato[$i];
        }
        for($i=0;$i<count($Emitido);$i++){
            $EmitidoAux = $Emitido[$i];
        }
          for($i=0;$i<count($Contenido);$i++){
            $ContenidoAux = $Contenido[$i];
        }
        for($i=0;$i<count($Ciudad);$i++){
            $CiudadAux = $Ciudad[$i];
        }
        for($i=0;$i<count($Periodista);$i++){
            $PeriodistaAux = $Periodista[$i];
        }
        for($i=0;$i<count($Editor);$i++){
            $EditorAux = $Editor[$i];
        }
        for($i=0;$i<count($Bloque);$i++){
            $BloqueAux = $Bloque[$i];
        }
        /*INSERT INTO `periodismo` (`Id`, `Fecha`, `IdPresentador`, `Edicion`, `Emitido`, `IdProductor`, `Descripcion`, `Formato`, `Ciudad`, `IdPeriodista`, `IdEditor`, `Contenido`, `Duracion`, `Bloque`, `mm_ss`, `Hora_Prog`) VALUES (NULL, '2022-09-08', '1', 'Primera', 'Si', '3', 'Noticia', 'Capsula', 'La Paz', '5', '8', 'Policial', '9', 'B2', '00:55:36', '00:55:22');*/
        $sql = "INSERT INTO periodismo (id, Fecha, IdPresentador, Edicion, Emitido, IdProductor,Descripcion, Formato, Ciudad, IdPeriodista, IdEditor, Contenido, Duracion, Bloque,mm_ss, Hora_Prog)VALUES(NULL,'$Fecha', '$PresentadorAux', '$EdicionAux', '$EmitidoAux', '$Productor', '$Descripcion', '$FormatoAux', '$CiudadAux', '$PeriodistaAux', '$EditorAux', '$ContenidoAux', '$Duracion', '$BloqueAux', '$mm_ss', '$Hora_Prog')";
        $result = $this->conectar()->query($sql);
     
    if(!empty($result)){
       header('Location: ../Registrar.php');
    }
    else {
        echo 'Hubo un error'; 
        }
        
    }
}
$con  = new InsertarDatos();
$con->Ingresar();

