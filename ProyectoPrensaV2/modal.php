<?php
include_once 'php/SelectList.php';
$con = new selectList();
?>
<button type="button" class="btn btn-primary" style="color:black" data-bs-toggle="modal" data-bs-target="#Modal" data-bs-whatever="@fat"><img src="img/plus.svg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top"> 
    Agregar </button>
<div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ingresar Escaleta</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" class="row g-3"  action="php/InsertarDatos.php" >
                    <div class="col-md-6">
                        <label class="col-sm-3 col-form-label" >Fecha</label>

                        <input type="date" class="form-control col-sm-3" value="<?php echo date('Y-m-d'); ?>" name="fecha"><br>

                        <label class="col-sm-3 col-form-label">Edicion</label>
                        <select id="Edicion" name="edicion[]">
                            <option value="Al Dia Revista">Al Dia Revista</option>
                            <option value="Primera Edicion">Primera Edicion</option>
                            <option value="Segunda Edicion">Segunda Edicion</option>
                            <option value="Tercera Edicion">Tercera Edicion</option>
                            <option value="Primera Edicion de Sabado">Primera Edicion de Sabado</option>
                            <option value="Segunda Edicion de Sabado" >Segunda Edicion de Sabado</option>
                            <option value="Primera Edicion de Domingo">Primera Edicion de Domingo</option>
                            <option value="Segunda Edicion de Domingo" >Segunda Edicion de Domingo</option>
                            <option value="Aqui en Vivo">Aqui en Vivo</option>
                        </select><br>
                        <label class="col-sm-4 col-form-label" >Realizada en</label>
                        <select id="Realizada" name="realizada[]">
                            <option value="La Paz">La Paz</option>
                            <option value="Cochabamba">Cochabamba</option>
                            <option value="Santa Cruz">Santa Cruz</option>
                        </select><br>
                        <label class="col-sm-4 col-form-label">Hora de Inicio</label>
                        <input type="time" class="form-control" name="hora_prog" ><br>
                        <!-- <label class="col-sm-4 col-form-label">Productor</label>-->
                        <input type="hidden" name="productor" value="<?php echo  $_SESSION['IdProductor']; ?>">
                       <!-- <select id="Productor" name="productor[]">
                            <option value="j">Juan Perez</option>
                            <option value="A">Josee</option>
                            <option value=B>Miguel</option>
                        </select>-->
                        <label class="col-sm-4 col-form-label" >Contenido</label>
                          <select id="Contenido" name="contenido[]">
                            <option value="Actuacion">Actuacion</option>
                            <option value="Brigada">Brigada</option>
                            <option value="Ciudad">Ciudad</option>
                            <option value="Clima">Clima</option>
                            <option value="Cocina">Cocina</option>
                            <option value="Comercio">Comercio</option>
                            <option value="Deportes">Deportes</option>
                            <option value="Despedida">Despedida</option>
                        </select><br>
                        <label class="col-sm-4 col-form-label">Presentador</label>
                        <select id="Presentador" name="presentador[]">
                            <?php
                            $con->presentadorList();
                            ?>
                        </select>
                        <br>
                    </div>
                    <div class="col-md-6">
                        <label class="col-sm-4 col-form-label">Emitido</label>
                        <select id="Emitido" name="emitido[]">
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select><br>
                        <label class="col-sm-4 col-form-label">Descripcion</label>
                        <input type="text" class="form-control" name="descripcion"><br>
                        <label class="col-sm-4 col-form-label">Ciudad</label>
                        <select id="Ciudad" name="ciudad[]">
                            <option value="La Paz">La Paz</option>
                            <option value="Cochabamba">Cochabamba</option>
                            <option value="Santa Cruz">Santa Cruz</option>
                        </select><br>
                        <label class="col-sm-4 col-form-label">Duracion</label>
                        <input type="time" class="form-control" name="duracion" step="1"><br>
                        <label class="col-sm-4 col-form-label">Bloque</label>
                        <select id="Bloque" name="bloque[]">
                            <option value="B1">B1</option>
                            <option value="B2">B2</option>
                            <option value="B3">B3</option>
                            <option value="B4">B4</option>
                            <option value="B5">B5</option>
                            <option value="B6">B6</option>
                            <option value="B7">B7</option>
                            <option value="B8">B8</option>
                        </select><br>
                        <label class="col-sm-4 col-form-label" >Formato</label>
                        <select id="Formato" name="formato[]">
                            <option value="Capsula">Capsula</option>
                            <option value="Clima">Clima</option>
                            <option value="Comercio">Comercio</option>
                            <option value="Compacto">Compacto</option>
                            <option value="Cuadros">Cuadros</option>
                            <option value="Entrevistas">Entrevistas</option>
                            <option value="Falso">Falso</option>
                            <option value="Informe">Informe</option>
                        </select><br>
                        <label class="col-sm-4 col-form-label">Periodista</label>
                        <select id="Periodista" name="periodista[]">
                            <?php
                            $con->periodistaList();
                            ?>
                        </select>
                        <br>
                         <label class="col-sm-4 col-form-label">Editor</label>
                        <select id="Periodista" name="editor[]">
                            <?php
                            $con->editorList();
                            ?>
                        </select>
                        <br><br><br>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <input type="submit" value="Ingresar" class="btn btn-primary" name="Registrar" />
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

