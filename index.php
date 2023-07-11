<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1> <?php echo "Todo List" ?> </h1>

<?php

// 1 - Conexion a DB
// 2 - Crear un to-do desde PHPMyAdmin para mostrarlo en la pagina.
// 3 - Importar archivos database.php y get-to-do.php
// 4 - Mostrar todos los TODOs
// 5 - Crear formulario HTML con valores por defecto
// 6 - Crear create-to-do.php para crear TODO en DB
// 7 - Include create-to-do.php y linkar con FORM.

         include("database.php");
         include("get-to-do.php");
         include("create-to-do.php");

         $getTask = getTask(); 
?>



<?php
    if(count($getTask['data'])) {
        foreach($getTask['data'] as $task) {
?>
    <div>
        <?php
            echo "{$task['title']} \r\n";
            echo $task['description'] . "\r\n";
            echo $task['completed'] . "\r\n";
        ?>
    </div>
<?php 
        }
    }
?>


<form method="post">
    <input type="text" placeholder="title" name="title" value="MY TITLE">
    <input type="text" placeholder="description" name="description" value="MY DESCRIPTION">
    <input type="number" placeholder="10" name="priority" value="5">

    <button type="submit" name="add">Add/Edit</button>
</form>   

</body>
</html>