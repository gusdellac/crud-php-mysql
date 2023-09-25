<?php

include("db.php"); //importar db.php

if(isset($_POST["save_task"])){ //varificar si existe un envio de datos a traves del metodo POST y con la referencia save_task
    $title = $_POST["title"]; //extraer title
    $description = $_POST["description"]; //extraer description

    //query para insertar datos a la tabla
    $query = "INSERT INTO task(title, description) VALUES ('$title', '$description')";
    $result = mysqli_query($conn, $query); //almacenar respuesta de la db al ejecutar la query

    if(!$result){
        die("Query failed");
    }

    $_SESSION["message"] = "Task Saved Successfully";
    $_SESSION["message_type"] = "success";

    header("Location: index.php"); //redireccionar a index.php
}

?>