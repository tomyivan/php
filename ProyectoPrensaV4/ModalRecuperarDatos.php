<?php
include_once 'php/SelectList.php';
$con = new selectList();

?>
<button type="button" class="btn btn-primary" style="color:black" data-bs-toggle="modal" data-bs-target="#ModalR" data-bs-whatever="@fat">
    Recuperar</button>
<div class="modal fade" id="ModalR" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Recuperar Escaleta</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" class="row g-3"  action="php/Restaurar.php" >
                    <div class="col-md-6">
                       
                        <label class="col-sm-3 col-form-label">Edicion</label>
                        <select id="Edicion" class="form-select" name="edicion[]">
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
                        <input type="hidden" name="productor"  value="<?php echo  $_SESSION['IdProductor']; ?>">
                        <label class="col-sm-3 col-form-label" >Realizada en:</label>
                        <select id="Realizada_en" class="form-select" name="realizada_en[]">
                            <option value="La Paz">La Paz</option>
                            <option value="Cochabamba">Cochabamba</option>
                            <option value="Santa Cruz">Santa Cruz</option>
                        </select><br>
                       
                    </div>
                    <div class="col-md-4">
                        <label class="col-sm-3 col-form-label" >Fecha</label>

                        <input type="date" class="form-control col-sm-3" value="<?php echo date('Y-m-d'); ?>" name="fecha"><br>
                    </div>
                   
                    <div class="modal-footer">
                        <a href="Escaloneta.php"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button></a>
                        <input type="submit" value="Ingresar" class="btn btn-primary" name="Registrar" />
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
