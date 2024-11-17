<?php 
include "read.php";
include "connection.php";
include "connection2.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Tabela de Registros</title>
</head>
<body class="bg-black ">
    <div class="container col-md-6 offset-md-3">
    <table class="table table-hover table-bordered border-dark table-info " >
        <thead class="table-dark">
            <tr>
                <th scope="col">ID Cliente</th>
                <th scope="col">Nome</th>
                <th scope="col">Endereço</th>
                <th scope="col">Telefone</th>
                <th scope="col">CPF</th>
                <th scope="col">CNPJ</th>
                <th scope="col">Funções</th>
            </tr>
        </thead>
        
        <tbody>
        <?php while($cliente = mysqli_fetch_assoc($listarCliente)){ ?>
            <tr>
                <td><?php echo $cliente['id_cliente'] ?></td>
                <td><?php echo $cliente['nome_cliente'] ?></td>
                <td><?php echo $cliente['endereco_cliente'] ?></td>
                <td><?php echo $cliente['telefone_cliente'] ?></td>
                <td><?php echo $cliente['cpf_cliente'] ?></td>
                <td><?php echo $cliente['cnpj_cliente'] ?></td>
                <td>
                    <a href="delete.php?id_cliente=<?php echo $cliente['id_cliente']; ?>" class="btn btn-sm btn-secondary">Excluir</a>
                    <a href="update.php?id_cliente=<?php echo $cliente['id_cliente']; ?>" class="btn btn-sm btn-primary ">Atualizar</a>
                </td>
            </tr>
            <?php } ?>
           
        </tbody>
        
    </table>
     
    <table class="table table-hover  table-bordered border-dark table-info" >
        <thead class="table-dark">
            <tr>
              <th scope="col">ID Produto</th>
                <th scope="col">Produto</th>
                <th scope="col">Data de Expedição</th>
                <th scope="col">Valor</th>
                <th scope="col">Código do Produto</th>
                <th scope="col">Funções</th> 
            </tr>
        </thead>

        <tbody>
        <?php while($produto = mysqli_fetch_assoc($listarProduto)){?>
            <tr>
                <td><?php echo $produto['id_produto']?></td>
                <td><?php echo $produto['nome_produto']?></td>
                <td><?php echo $produto['data_pedido']?></td>
                <td><?php echo $produto['valor_total']?></td>
                <td><?php echo $produto['cod_produto']?></td>
                <td>
                    <a href="delete2.php?id_produto=<?php echo $produto['id_produto']; ?>"class="btn btn-sm btn-secondary">Excluir</a>
                    <a href="update2.php?id_produto=<?php echo $produto['id_produto']; ?>"class="btn btn-sm btn-primary ">Atualizar</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

    <a href="index.php" class="btn btn-secondary">Voltar para o inicio</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>