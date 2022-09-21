<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ExampleModal<?php echo $registro['Id']; ?>">Modificar</button>

<div class="modal fade" id="ExampleModal<?php echo $registro['Id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar Escaleta</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" class="row g-3"  action="php/ModificarDatos.php" >
                    <input type="hidden" class="form-control col-sm-3" value="<?php echo $registro['Id']; ?>" name="id"><br>
                    <div class="col-md-6">
                        <label class="col-sm-3 col-form-label">Fecha</label>

                        <input type="date" class="form-control col-sm-3" value="<?php echo $registro['Fecha']; ?>"name="fecha"><br>

                        <label class="col-sm-3 col-form-label" >Edicion</label>
                        <select id="Edicion" selected="<?php echo $registro['Edicion'];?>" name="edicion[]">
                            <option value="Al Dia Revista" <?php if ($registro['Edicion'] == 'Al Dia Revista') {
                                    echo ("selected");
                                } ?>>Al Dia Revista</option>
                            <option value="Primera Edicion" <?php if ($registro['Edicion'] == 'Primera Edicion') {
                                    echo ("selected");
                                } ?>>Primera Edicion</option>
                            <option value="Segunda Edicion"<?php if ($registro['Edicion'] == 'Segunda Edicion') {
                                    echo ("selected");
                                } ?> >Segunda Edicion</option>
                            <option value="Tercera Edicion"<?php if ($registro['Edicion'] == 'Tercera Edicion') {
                                    echo ("selected");
                                } ?>>Tercera Edicion</option>
                            <option value="Primera Edicion de Sabado" <?php if ($registro['Edicion'] == 'Primera Edicion de Sabado') {
                                    echo ("selected");
                                } ?>>Primera Edicion de Sabado</option>
                            <option value="Segunda Edicion de Sabado" <?php if ($registro['Edicion'] == 'Segunda Edicion de Sabado') {
                                    echo ("selected");
                                } ?>>Segunda Edicion de Sabado</option>
                            <option value="Primera Edicion de Domingo"<?php if ($registro['Edicion'] == 'Primera Edicion de Domingo') {
                                    echo ("selected");
                                } ?>>Primera Edicion de Domingo</option>
                            <option value="Segunda Edicion de Domingo" <?php if ($registro['Edicion'] == 'Segunda Edicion de Domingo') {
                                    echo ("selected");
                                } ?>>Segunda Edicion de Domingo</option>
                            <option value="Aqui en Vivo"<?php if ($registro['Edicion'] == 'Aqui en Vivo') {
                                        echo ("selected");
                                    } ?>>Aqui en Vivo</option>
                        </select><br>
                        <label class="col-sm-4 col-form-label" >Realizada en</label>
                        <select id="Realizada"  name="realizada[]">
                            <option value="La Paz">La Paz</option>
                            <option value="Cochabamba">Cochabamba</option>
                            <option value="Santa Cruz">Santa Cruz</option>
                        </select><br>
                        <label class="col-sm-4 col-form-label" >Contenido</label>
                          <select id="Contenido" selected="<?php echo $registro['Contenido'];?>" name="contenido[]">
                            <option value="Actuacion" <?php if ($registro['Contenido'] == 'Actuacion') {echo ("selected");} ?>>Actuacion</option>
                            <option value="Brigada" <?php if ($registro['Contenido'] == 'Brigada') {echo ("selected");} ?>>Brigada</option>
                            <option value="Ciudad"<?php if ($registro['Contenido'] == 'Brigada') {echo ("selected");} ?>>Ciudad</option>
                            <option value="Clima" <?php if ($registro['Contenido'] == 'Clima') {echo ("selected");} ?>>Clima</option>
                            <option value="Cocina"<?php if ($registro['Contenido'] == 'Cocina') {echo ("selected");} ?>>Cocina</option>
                            <option value="Comercio" <?php if ($registro['Contenido'] == 'Comercio') {echo ("selected");} ?>>Comercio</option>
                            <option value="Deportes" <?php if ($registro['Contenido'] == 'Deportes') {echo ("selected");} ?>>Deportes</option>
                            <option value="Despedida" <?php if ($registro['Contenido'] == 'Despedida') {echo ("selected");} ?>>Despedida</option>
                        </select><br>
                        <label class="col-sm-4 col-form-label">Hora de Inicio</label>
                        <input type="time" class="form-control" value="<?php echo $registro['Hora_Prog']; ?>" name="hora_prog"><br>
                        <input type="hidden" name="productor" value="<?php echo $_SESSION['IdProductor']; ?>">
                        <label class="col-sm-4 col-form-label">Presentador</label>
                        <select id="Presentador" value="<?php echo $registro
                                    ['NombrePresentador'];
?>" name="presentador[]">
<?php
$con->ModpresentadorList($registro['NombrePresentador']);
?>
                        </select>
                        <br>
                    </div>
                    <div class="col-md-6">
                        <label class="col-sm-4 col-form-label">Emitido</label>
                        <select id="Emitido" selected="<?php echo $registro['Emitido'];?>" name="emitido[]">
                            <option value="Si" <?php if ($registro['Emitido'] == 'Si') {echo ("selected");} ?>>Si</option>
                            <option value="No" <?php if ($registro['Emitido'] == 'No') {    echo ("selected");} ?>>No</option>
                        </select><br>
                        <label class="col-sm-4 col-form-label">Descripcion</label>
                        <input type="text" class="form-control" value="<?php echo $registro['Descripcion']; ?>" name="descripcion"><br>
                        <label class="col-sm-4 col-form-label">Ciudad</label>
                        <select id="Ciudad"  selected="<?php echo $registro
                                    ['Ciudad'];
?>" name="ciudad[]">
                            <option value="La Paz" <?php if ($registro['Ciudad'] == 'La Paz') {
                                        echo ("selected");
                                    } ?>>La Paz</option>
                            <option value="Cochabamba"<?php if ($registro['Ciudad'] == 'Cochabamba') {
                                        echo ("selected");
                                    } ?>>Cochabamba</option>
                            <option value="Santa Cruz"<?php if ($registro['Ciudad'] == 'Santa Cruz') {
                                        echo ("selected");
                                    } ?>>Santa Cruz</option>
                        </select><br>
                        <label class="col-sm-4 col-form-label">Duracion</label>
                        <input type="Time" step="1" value="<?php echo $registro['Duracion']; ?>"  class="form-control" name="duracion"><br>
                        <label class="col-sm-4 col-form-label">Bloque</label>
                        <select id="Bloque" selected="<?php echo $registro['Bloque'];?>" name="bloque[]">
                            <option value="B1"<?php if ($registro['Bloque'] == 'B1') {
                                        echo ("selected");
                                    } ?>>B1</option>
                            <option value="B2"<?php if ($registro['Bloque'] == 'B2') {
                                        echo ("selected");
                                    } ?>>B2</option>
                            <option value="B3"<?php if ($registro['Bloque'] == 'B3') {
                                        echo ("selected");
                                    } ?>>B3</option>
                            <option value="B4"<?php if ($registro['Bloque'] == 'B4') {
                                        echo ("selected");
                                    } ?>>B4</option>
                            <option value="B5"<?php if ($registro['Bloque'] == 'B5') {
                                        echo ("selected");
                                    } ?>>B5</option>
                            <option value="B6"<?php if ($registro['Bloque'] == 'B6') {
                                        echo ("selected");
                                    } ?>>B6</option>
                            <option value="B7"<?php if ($registro['Bloque'] == 'B7') {
                                        echo ("selected");
                                    } ?>>B7</option>
                            <option value="B8"<?php if ($registro['Bloque'] == 'B8') {echo ("selected");} ?>>B8</option>
                        </select><br>
                        <label class="col-sm-4 col-form-label" >Formato</label>
                        <select id="Formato" selected="<?php echo $registro['Formato'];?>" name="formato[]">
                            <option value="Capsula"<?php if ($registro['Formato'] == 'Capsula') {echo ("selected");} ?>>Capsula</option>
                            <option value="Clima" <?php if ($registro['Formato'] == 'Clima') {echo ("selected");} ?>>Clima</option>
                            <option value="Comercio" <?php if ($registro['Formato'] == 'Comercio') {echo ("selected");} ?>>Comercio</option>
                            <option value="Compacto" <?php if ($registro['Formato'] == 'Compacto') {echo ("selected");} ?>>Compacto</option>
                            <option value="Cuadros" <?php if ($registro['Formato'] == 'Cuadros') {echo ("selected");} ?>>Cuadros</option>
                            <option value="Entrevistas"<?php if ($registro['Formato'] == 'Entrevistas') {echo ("selected");} ?>>Entrevistas</option>
                            <option value="Falso" <?php if ($registro['Formato'] == 'Falso') {echo ("selected");} ?>>Falso</option>
                            <option value="Informe"<?php if ($registro['Formato'] == 'Informe') {echo ("selected");} ?>>Informe</option>
                        </select><br>
                        <label class="col-sm-4 col-form-label">Periodista</label>
                        <select id="Periodista" value="<?php echo $registro['NombreEditor'];?>" name="periodista[]">
                            <?php $con->ModperiodistaList($registro['NombrePeriodista']); ?>
                        </select>
                        <br>
                        <label class="col-sm-4 col-form-label">Editor</label>
                        <select id="Periodista" value="<?php echo $registro['NombreEditor'];?>" name="editor[]">
                             <?php $con->ModeditorList($registro['NombreEditor']); ?>
                        </select>
                        <br><br><br>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <input type="submit" value="Ingresar" class="btn btn-primary" name="Editar" />
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>