
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script type="text/javascript" src="TableDinamica/jquery.tabledit.js"></script>
        <link rel="icon"  href="img/icono boli ad.png">

        <title>Registro</title>
        <style>
            .my-custom-scrollbar {
                position: relative;
                height: 60%;
                overflow: auto;
            }
            .table-wrapper-scroll-y {
                display: block;
            }

        </style>
    </head>
    <body>  
        <div class="container-fluid">
            <?php
            session_start();
            if(!empty($_POST['edicion'])){
                $_SESSION['edicion'] =  $_POST['edicion'];
                $Edicion = $_POST['edicion'];
                for($i=0;$i<count($Edicion);$i++){
                    $EdicionAux = $Edicion[$i];
                }
                if($EdicionAux =='Al Dia Revista'){            
                    $Hora_Prog= '06:00:00';
                }else if($EdicionAux =='Segunda Edicion'){
                    $Hora_Prog= '12:25:00';
                }
                else if($EdicionAux =='Tercera Edicion'){
                    $Hora_Prog= '20:30:00';
                }
                else if($EdicionAux =='Aqui en Vivo'){
                    $Hora_Prog= '23:00:00';
                }
                else if($EdicionAux =='Primera Edicion de Sabado'){
                    $Hora_Prog= '12:30:00';
                }
                else if($EdicionAux =='Segunda Edicion de Sabado'){
                    $Hora_Prog= '19:00:00';
                }
                else if($EdicionAux =='Primera Edicion de Domingo'){
                    $Hora_Prog= '12:30:00';
                }
                else if($EdicionAux =='Segunda Edicion de Domingo'){
                    $Hora_Prog= '18:30:00';
                }
                $_SESSION['hora_prog'] = $Hora_Prog;
            }            
            if(!empty($_POST['realizada_en'])){
                $_SESSION['realizada_en'] = $_POST['realizada_en'];} 

            include_once 'menu.php';

            ?>
            <h1 style="text-align: center">REGISTRO DE ESCALETA</h1>
            <?php
           
            include_once 'FormularioAddEdit.php';
            
           
            ?>

            <div class ="table-responsive">
                
                <div class="table-wrapper-scroll-y my-custom-scrollbar">
                    <table   id="data_table"  class="table table-striped table-bordered table-sm" cellspacing="0"
                             width="100%" >
                        <thead>
                            <tr class="table-info">
                        
                                <th>Id</th>
                                <th>Num</th>
                                <th>Fecha</th>
                                <th>Presentador</th>
                                <!--<th>Edicion</th>-->
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
                                <!--<th>mm_ss</th>-->
                                <th>Hora Prog</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php include './Mostrar.php'; ?>
                        </tbody>
                       
                    </table>

                </div>
            </div>
            <br><br>
            <a href="Imprimir/GenerarPDF.php" type="button" class="btn btn-danger"><img src="img/filetype-pdf.svg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                Imprimir</a>
            <a href="Excel/GenerarExcel.php" type="button" class="btn btn-success"><img src="img/file-earmark-spreadsheet-fill.svg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                Excel</a>
                <a href="Escaloneta.php" type="button" class="btn btn-info" style="float: right;"><img src="img/save-fill.svg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                Guardar Escaleta</a>

            <script type="text/javascript">
                function confirmaEliminar(id)
                {
                    if (confirm('¿Esta seguro que desea eliminar el dato?'))
                    {
                        window.location.href = "php/borrar.php?Id=" + id;
                    }

                }
             
                
                function moverarriba(Id,sw){
                   
                        window.location.href = "php/mover.php?Id=" + Id +"&sw="+sw;
                    

                }
                function moverabajo(Id,sw){
                   
                        window.location.href = "php/mover.php?Id=" + Id +"&sw="+sw;
                    
                
                }
            </script>
                      <?php include_once 'php/renumerar.php';?>     
        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>

    </body>
</html>


