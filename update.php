<?php 
include "connection.php";
if(isset($_GET['id_cliente'])){
$id = $_GET['id_cliente'];
$sql = mysqli_query($connection1, "SELECT * FROM cliente WHERE id_cliente = $id");
$count = (is_array($sql)) ? count($sql) :1 ;

if($count){
 $c = mysqli_fetch_array($sql);
 $nome = $c['nome_cliente'];
$endereco = $c['endereco_cliente'];
$telefone = $c['telefone_cliente'];
$cpf = $c['cpf_cliente'];
$cnpj = $c['cnpj_cliente'];


}
}
if(isset($_POST['editar'])){
    $id = $_GET['id_cliente'];
    $nome = $_POST['nome'];
    $endereco = $_POST['endereço'];
    $telefone = $_POST['telefone'];
    $cpf = $_POST['cpf'];
    $cnpj = $_POST['cnpj'];
    $queryUpdate = "UPDATE cliente SET nome_cliente = '$nome', endereco_cliente = '$endereco', telefone_cliente = '$telefone', cpf_cliente = '$cpf', cnpj_cliente = '$cnpj' WHERE id_cliente = '$id'";

    $consulta = mysqli_query($connection1, $queryUpdate);

    header('Location: list.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Editar - PHP</title>
</head>
<body class="bg-black ">
    <div class="container col-md-6 offset-md-3 bg-dark border border-info rounded text-info ">
    <h2>Editar Cliente</h2>
    <div class="row">
    <form method="POST">
       <div class="col">
       Nome:<input type="text" name="nome" class="form-control" placeholder="Nome" id="">
       </div>
       <div class="col">
       Endereço:<input type="text" name="endereço"class="form-control" placeholder="Endereço" id="">
       </div>
       <div class="col">
       Telefone:<input type="tel" name="telefone"class="form-control" placeholder="Telefone" id="">
       </div>
       <div class="col">
       cpf:<input type="text" name="cpf"class="form-control" placeholder="CPF" id="">
       </div>
       <div class="col">
       cnpj:<input type="text" name="cnpj" class="form-control" placeholder="CNPJ" id="">
       </div>
       <div class="col">
        <br>
       <button name="editar" type="submit" class="btn btn-secondary">editar</button>
       </div>
       </div>
    </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>