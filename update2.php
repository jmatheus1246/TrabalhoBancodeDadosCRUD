<?php
include 'connection2.php';
if(isset($_GET['id_produto'])){
    $id2 = $_GET['id_produto'];
    $sql2 = mysqli_query($connection2, "SELECT * FROM produto WHERE id_produto = $id2");
    $count2 = (is_array($sql2)) ? count($sql2) :1 ;

if($count2){
$p = mysqli_fetch_array($sql2);
$nomeproduto = $p['nome_produto'];
$valor = $p['valor_total'];
$dataexp = $p['data_pedido'];
$codproduto = $p['cod_produto'];

}
}
if(isset($_POST['editar'])){
 $id2 = $_GET['id_produto'];
 $nomeproduto = $_POST['produto'];
$valor = $_POST['valor'];
$dataexp = $_POST['data_expedição'];
$codproduto = $_POST['código_produto'];

$queryUpdate2 = "UPDATE produto SET nome_produto = '$nomeproduto', valor_total = '$valor', data_pedido = '$dataexp', cod_produto = '$codproduto' WHERE id_produto = '$id2'";

$consulta2 = mysqli_query($connection2, $queryUpdate2);

header('Location: list.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Trabalho - PHP</title>
</head>
<body class="bg-dark">
    <div class="container col-md-6 offset-md-3 bg-dark border border-info rounded text-info">
    <h2>Atualização Produto</h2>
    <div class="row">
    <form  method="POST">
      <div class="col">
       Produto: <input type="text" name="produto" class="form-control" placeholder="Produto" id="">
       </div>
       <div class="col">
       Data de expedição: <input type="date" name="data_expedição"class="form-control" placeholder="Data de Expedição" id="">
       </div>
       <div class="col">
        Valor: <input type="text" name="valor"class="form-control" placeholder="Valor" id="">
        </div>
        <div class="col">
        Código Produto <input type="text" name="código_produto"class="form-control" placeholder="Código Produto" id="">
        </div>
        <div class="col">
            <br>
       <button name="editar" type="submit" class="btn btn-info">Editar</button>
       </div>
    </form>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>