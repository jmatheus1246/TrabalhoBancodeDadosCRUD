<?php
// Processo para salvar as informações vindas do forumlário
include "connection.php";
include "connection2.php";
// DB cliente
$nome = $_POST['nome'];
$endereco = $_POST['endereço'];
$telefone = $_POST['telefone'];
$cpf = $_POST['cpf'];
$cnpj = $_POST['cnpj'];

$sql = mysqli_query($connection1, "INSERT INTO cliente(nome_cliente, endereco_cliente, cpf_cliente, cnpj_cliente, telefone_cliente ) VALUES ('$nome', '$endereco', '$cpf', '$cnpj', '$telefone')");

if($sql){
    header('Location: index.php');

}

// DB produto
$nomeproduto = $_POST['produto'];
$valor = $_POST['valor'];
$dataexp = $_POST['data_expedição'];
$codproduto = $_POST['código_produto'];

$sql2 = mysqli_query($connection2, "INSERT INTO produto(data_pedido, valor_total, nome_produto, cod_produto) VALUES('$dataexp', '$valor', '$nomeproduto', '$codproduto')");

if($sql2){
    header('Location: index.php');
    
}
?>