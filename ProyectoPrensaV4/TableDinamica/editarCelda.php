<?php
//include_once("db_connect.php");
include_once '../Php/conexion.php';
class tablaEditar extends Conectar{
   


    function editarTablaD(){
        global $resulhora;
        header('Content-Type: application/json');
    $input = filter_input_array(INPUT_POST);
    
        if ($input['action'] == 'edit') {   
            $update_field='';
            if(isset($input['fecha'])) {
                $update_field.= "Fecha='".$input['fecha']."'";
                $this->consulta($update_field,$input['id']);
            } else if(isset($input['presentador'])) {
                $update_field.= "IdPresentador='".$input['presentador']."'";
                $this->consulta($update_field,$input['id']);
            } 
            else if(isset($input['emitido'])) {
                $update_field.= "Emitido='".$input['emitido']."'";
                $this->consulta($update_field,$input['id']);
            }   
            else if(isset($input['descripcion'])) {
                $update_field.= "Descripcion='".$input['descripcion']."'";
                $this->consulta($update_field,$input['id']);
            } 
            else if(isset($input['formato'])) {
                $update_field.= "Formato='".$input['formato']."'";
                $this->consulta($update_field,$input['id']);
            }   
            else if(isset($input['ciudad'])) {
                $update_field.= "Ciudad='".$input['ciudad']."'";
                $this->consulta($update_field,$input['id']);
            }   
            else if(isset($input['periodista'])) {
                $update_field.= "IdPeriodista='".$input['periodista']."'";
                $this->consulta($update_field,$input['id']);
            }   
            else if(isset($input['editor'])) {
                $update_field.= "IdEditor='".$input['editor']."'";
                $this->consulta($update_field,$input['id']);
            }   
            else if(isset($input['contenido'])) {
                $update_field.= "Contenido='".$input['contenido']."'";
                $this->consulta($update_field,$input['id']);
            }   
            else if(isset($input['duracion'])) {
                $update_field.= "Duracion='".$input['duracion']."'";
                $this->consulta($update_field,$input['id']);
            }
            else if(isset($input['bloque'])) {
                $update_field.= "Bloque='".$input['bloque']."'";
                $this->consulta($update_field,$input['id']);
            }   
            else if(isset($input['hora_prog'])) {
                $update_field.= "Hora_Prog='".$input['hora_prog']."'";
                $this->consulta($update_field,$input['id']);
            } 
            echo json_encode($input);

    }
}
   
    public function consulta($update_field,$id){
        if($update_field && $id) {
            $sql_query = "UPDATE periodismo SET $update_field WHERE Id='" . $id . "'"; 
            $resul =$this->conectar()->query($sql_query);
            if(empty($resul)){
                echo 'Ocurrio un error';
            }
        }
    }
}
$con =new tablaEditar();
$con->editarTablaD();
?>
