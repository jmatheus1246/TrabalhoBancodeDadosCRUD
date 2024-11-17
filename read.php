<?php
// DB cliente
include 'connection.php';
$listarCliente = mysqli_query($connection1, "SELECT * FROM cliente");

// DB produto
include 'connection2.php';
$listarProduto = mysqli_query($connection2, "SELECT * FROM produto");
?>