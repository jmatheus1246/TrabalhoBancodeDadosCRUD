<?php 
include "connection2.php";


$id2 = $_GET["id_produto"];

if(isset($_GET['id_produto'])){
    $sqlDelete = mysqli_query($connection2, "DELETE FROM produto WHERE id_produto = {$id2}")
    or die (mysqli_error($connection2));

    header('Location: list.php');
}
?>