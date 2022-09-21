$(document).ready(function(){
    $('#data_table').Tabledit({
        deleteButton: false,
        editButton: false,          
        columns: {
          identifier: [0, 'id'],                    
          editable: [[1, 'nombre'], [2, 'autor'], [3, 'isbn'], [4, 'categoria']]
        },
        hideIdentifier: true,
        url: 'editarCelda.php'      
    });
});


/*
$(document).ready(function(){
$('#data_table').Tabledit({
    url: 'example.php',
    editButton: false,
    deleteButton: false,
    hideIdentifier: true,
    columns: {
        identifier: [0, 'id'],
        editable: [[2, 'firstname'], [3, 'lastname']]
    }
});*/