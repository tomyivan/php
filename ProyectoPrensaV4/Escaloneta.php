
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script type="text/javascript" src="TableDinamica/table_edit.js"></script>
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
            <script type="text/javascript">
                function confirmaEliminar(id)
                {
                    if (confirm('¿Esta seguro que desea eliminar el dato?'))
                    {
                        window.location.href = "php/borrar.php?Id=" + id;
                    }

                }
            </script>
            <!--<script>
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
       

        </script>-->
        </div>
        <?php 
include_once 'Php/Backups.php'; 
?>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>

    </body>
</html>


