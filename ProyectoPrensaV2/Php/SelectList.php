<?php
include_once 'php/conexion.php';

class selectList extends Conectar {

    public function consultaList($tabla) {
        global $resultList;
        $sql = "SELECT *FROM $tabla";
        $resultList = $this->conectar()->query($sql);
        /* while($registro=$resultList->fetch_array(MYSQLI_BOTH)){
          echo '<option value="'.$registro['IdPresentador'].'">'.$registro['NombrePresentador'].'</option>';
          } */
    }
    public function presentadorList() {
        global $resultList;
        $this->consultaList('presentador');
        while ($registro = $resultList->fetch_array(MYSQLI_BOTH)) {
            echo '<option value="' . $registro['IdPresentador'] . '">' . $registro['NombrePresentador'] . '</option>';
        }
    }
    public function periodistaList() {
        global $resultList;
        $this->consultaList('periodista');
        while ($registro = $resultList->fetch_array(MYSQLI_BOTH)) {
            echo '<option value="' . $registro['IdPeriodista'] . '">' . $registro['NombrePeriodista'] . '</option>';
        }
    }
    public function editorList() {
        global $resultList;
        $this->consultaList('editor');
        while ($registro = $resultList->fetch_array(MYSQLI_BOTH)) {
            echo '<option value="' . $registro['IdEditor'] . '">' . $registro['NombreEditor'] . '</option>';
        }
    }
    public function ModpresentadorList($consulta) {
        global $resultList;
        $this->consultaList('presentador');
        while ($registro = $resultList->fetch_array(MYSQLI_BOTH)) { 
            if($consulta == $registro['NombrePresentador']){echo '<option value="' . $registro['IdPresentador'] . '" selected>' . $registro['NombrePresentador'] . '</option>';}
            else{echo '<option value="' . $registro['IdPresentador'] . '">' . $registro['NombrePresentador'] . '</option>';}
            }
    }
    public function ModperiodistaList($consulta) {
        global $resultList;
        $this->consultaList('periodista');
        while ($registro = $resultList->fetch_array(MYSQLI_BOTH)) { 
            if($consulta == $registro['NombrePeriodista']){echo '<option value="' . $registro['IdPeriodista'] . '" selected>' . $registro['NombrePeriodista'] . '</option>';}
            else{echo '<option value="' . $registro['IdPeriodista'] . '">' . $registro['NombrePeriodista'] . '</option>';}
            }
    }
    public function ModeditorList($consulta) {
        global $resultList;
        $this->consultaList('editor');
        while ($registro = $resultList->fetch_array(MYSQLI_BOTH)) { 
            if($consulta == $registro['NombreEditor']){echo '<option value="' . $registro['IdEditor'] . '" selected>' . $registro['NombreEditor'] . '</option>';}
            else{echo '<option value="' . $registro['IdEditor'] . '">' . $registro['NombreEditor'] . '</option>';}
            }
    }
}

?>
