<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Trabalho - PHP</title>
</head>
<body class="bg-black bg-gradient">
    <div class="container col-md-6 offset-md-3 border border-info rounded bg-dark text-info ">
    <h2>Cadastro de Clientes</h2>
    <div class="row">
    <form action="save.php" method="POST">
        <div class="col">
       Nome:<input type="text" class="form-control" placeholder="Nome" name="nome" id="">
       </div>
       <div class="col">
       Endereço:<input type="text"  class="form-control" placeholder="Endereço" name="endereço" id="">
       </div>
       <div class="col">
       Telefone:<input type="tel"  class="form-control" placeholder="Telefone" name="telefone" id="">
       </div>
       <div class="col">
       cpf:<input type="text"  class="form-control" placeholder="CPF" name="cpf" id="">
       </div>
       <div class="col">
       cnpj:<input type="text"  class="form-control" placeholder="CNPJ" name="cnpj" id="">
       </div>
       <h2>Cadastro Produtos</h2>
       <div class="col">
       Produto: <input type="text"  class="form-control" placeholder="Produto" name="produto" id="">
       </div>
       <div class="col">
       Data de expedição: <input type="date"  class="form-control" placeholder="Data de Expedição" name="data_expedição" id="">
       </div>
       <div class="col">
        Valor: <input type="text"  class="form-control" placeholder=" Valor" name="valor" id="">
        </div>
        <div class="col">
        Código Produto <input type="text"  class="form-control" placeholder="Código Produto" name="código_produto" id="">
        </div>
        <div class="col">
          <br>
       <button type="submit" class="btn btn-info">Registrar</button>
       
       <a href="list.php" class="btn btn-secondary offset-md-1">Mostrar tabela</a>

       <a href="grafico.php" class="btn btn-info offset-md-1">Mostrar gráfico</a>
       </div>
    </form>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>