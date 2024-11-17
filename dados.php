<?php 
//dados da consulta
require_once 'connectgraphic.php';
$stmt = $graphicconn->prepare('SELECT nome_produto, valor_total FROM produto');
$stmt-> execute();
$dcoletados = $stmt->fetchAll(PDO::FETCH_OBJ);
echo json_encode($dcoletados);
?>
