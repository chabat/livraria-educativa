<?php
    $msg = "Problema ao conectar com o banco de dados";
    if(!$con=pg_connect("host=localhost user=postgres password=postgres dbname=postgres"))
        echo "<script type='text/javascript'>alert('$msg');</script>";
?>
