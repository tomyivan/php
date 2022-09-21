<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script type="text/javascript" src="TableDinamica/table_edit.js"></script>
    <script type="text/javascript" src="TableDinamica/jquery.tabledit.js"></script>
    <script type="text/javascript" src="TableDinamica/jquery.tabledit.min.js"></script>
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
            include_once 'menu.php';
            ?>

            <h1 style="text-align: center">REGISTRO DE ESCALETA</h1>
            <div class="navbar bg-light">
                <?php
                include_once 'modal.php';
                include_once 'php/SelectList.php';
                ?>
                <form class="d-flex" role="buscar" method="POST">
                    <input class="form-control me-2" type="date" name="Bfecha" aria-label="Search">
                    <button type="submit" class="btn btn-primary" name="Buscar">Buscar</button>
                    <button type="submit" class="btn btn-primary" name="Cancelar">Cancelar</button>
                </form>
            </div>
            <div class ="table-responsive">
                <div class="table-wrapper-scroll-y my-custom-scrollbar">
                    <table   id="data_table"  class="table table-striped table-bordered table-sm" cellspacing="0"
                             width="100%" >
                        <thead>
                            <tr><th>Id</th>
                                <th>Fecha</th>
                                <th>Presentador</th>
                                <th>Edicion</th>
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
                                <th>mm_ss</th>
                                <th>Hora Prog</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <?php include './Mostrar.php'; ?>
                    </table>

                </div>
            </div>
            <a href="Imprimir/GenerarPDF.php" type="button" class="btn btn-danger"><img src="img/filetype-pdf.svg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                Imprimir</a>
            <a href="Excel/GenerarExcel.php" type="button" class="btn btn-success"><img src="img/file-earmark-spreadsheet-fill.svg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                Excel</a>

            <script type="text/javascript">
                function confirmaEliminar(id)
                {
                    if (confirm('¿Esta seguro que desea eliminar el dato?'))
                    {
                        window.location.href = "php/borrar.php?Id=" + id;
                    }

                }
            </script>
            <script>
            $(document).ready(function() {
       
            $(document).on("click", ".arriba,.abajo", function(){
            
            var row = $(this).parents("tr:first");
            if ($(this).is(".arriba")) {
                row.insertBefore(row.prev());
            } else {
                row.insertAfter(row.next());
            }
        });
        });
        //actualizar Datos
        /*function actualizar_datos(id,texto,columna){
            $.ajax({
                url:"Php/ModificarDatos.php",
                method:"POST",
                data:{id:id,texto:texto,columna:columna},
                success:function(data)
                {
                    console.log("Se actualizo")
                }

            })
        }
        $(document).on("blur","#fecha",function(){
            let id = $(this).data("id_fecha") 
            let fecha = $(this).text();
            actualizar_datos(id,fecha,"Fecha")
        })*/
        </script>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>

    </body>
</html>



