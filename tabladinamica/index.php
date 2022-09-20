<?php 

include_once("db_connect.php");

?>
<!DOCTYPE html>
<html>
<head>
	
    <!--script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script type="text/javascript" src="table_edit.js"></script>
    <script type="text/javascript" src="jquery.tabledit.js"></script>
    <script type="text/javascript" src="jquery.tabledit.min.js"></script>

</head>
<body>
<div class="container home">    
    <h2>Ejemplo tabla editable con PHP, MySQL y jQuery</h2>      
    <table id="data_table" class="table table-striped"> 
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Autor</th>
                <th>ISBN</th>   
                <th>Categoría</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $sql_query = "SELECT id, nombre, autor, isbn, categoria FROM libro";
            $resultset = mysqli_query($conn, $sql_query) or die("error base de datos:". mysqli_error($conn));
            while( $libro = mysqli_fetch_assoc($resultset) ) {
            ?>
               <tr id="<?php echo $libro ['id']; ?>">
               <td><?php echo $libro ['id']; ?></td>
               <td><?php echo $libro ['nombre']; ?></td>
               <td><?php echo $libro ['autor']; ?></td>
               <td><?php echo $libro ['isbn']; ?></td>   
               <td><?php echo $libro ['categoria']; ?></td>  
               </tr>
            <?php } ?>
        </tbody>
    </table>    
</div>
</body>
</html>
