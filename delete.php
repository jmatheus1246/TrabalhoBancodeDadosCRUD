<?php 
include "connection.php";


$id = $_GET["id_cliente"];

if(isset($_GET['id_cliente'])){
    $sqlDelete = mysqli_query($connection1, "DELETE FROM cliente WHERE id_cliente = {$id}")
    or die (mysqli_error($connection1));

    header('Location: list.php');
}
?>