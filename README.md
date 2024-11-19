# TrabalhoBancodeDadosCRUD

## Tema: 
Um sistema de cadastro de clientes e Produtos.

## Descrição: 
O sistema terá como finalidade a realização do cadastro de clientes e Produtos,
comprados por estes, para ter um controle de vendas de uma determinada loja ao longo de um 
mês, para isso será criado um banco de dados utilizando a linguagem SQL para armazenar os da
dos dos clientes e dos produtos. O preenchimento do banco será feito por meio de um formulá
rio, feito em HTML, a conexão entre o banco e formulário será realizado por meio de um CRUD
(Create, Read, Update, Delete), por meio dele, será possível adicionar, atualizar e deletar
dados, para cria-lo será utilizado as linguagens PHP(Utilizada para criar uma melhor intera
ção e realizar a conexão entre o banco e o formulário) e SQL(Para Realizar as consultas neces
sárias).

## Modelo Conceitual e Lógico
[Conceitual:] <img src = "mconceitual.png">

 [Lógico:] <img src = "mlogico.png">
## Consultas SQL
Ao longo do código, foram utilizadas consultas SQL para adquirir os dados
do banco e adiciona-los ao CRUD (As consultas foram retiradas dos códigos
de save, read, delete e delete2, update e update2, dados).

1. $sql = mysqli_query($connection1, "INSERT INTO cliente(nome_cliente, endereco_cliente, cpf_cliente, cnpj_cliente, telefone_cliente ) VALUES ('$nome', '$endereco', '$cpf', '$cnpj', '$telefone')");

2. $sql2 = mysqli_query($connection2, "INSERT INTO produto(data_pedido, valor_total, nome_produto, cod_produto) VALUES('$dataexp', '$valor', '$nomeproduto', '$codproduto')");

3. $listarCliente = mysqli_query($connection1, "SELECT * FROM cliente");

4. $listarProduto = mysqli_query($connection2, "SELECT * FROM produto");

5.  $sqlDelete = mysqli_query($connection1, "DELETE FROM cliente WHERE id_cliente = {$id}")

6. $sqlDelete = mysqli_query($connection2, "DELETE FROM produto WHERE id_produto = {$id2}")

7. $queryUpdate = "UPDATE cliente SET nome_cliente = '$nome', endereco_cliente = '$endereco', telefone_cliente = '$telefone', cpf_cliente = '$cpf', cnpj_cliente = '$cnpj' WHERE id_cliente = '$id'";

8. $sql = mysqli_query($connection1, "SELECT * FROM cliente WHERE id_cliente = $id");

9.  $sql2 = mysqli_query($connection2, "SELECT * FROM produto WHERE id_produto = $id2");

10. $queryUpdate2 = "UPDATE produto SET nome_produto = '$nomeproduto', valor_total = '$valor', data_pedido = '$dataexp', cod_produto = '$codproduto' WHERE id_produto = '$id2'";

11. $stmt = $graphicconn->prepare('SELECT nome_produto, valor_total FROM produto');

## Uso de Gráficos com GoogleCharts
Os gráficos feitos no trabalho, tiveram o uso do GoogleCharts(API utilizada para transforma dados em gráficos)
e a biblioteca AJAX(utilizada para ler os dados) para obter uma melhor visualização dos dados obtidos.

- [GoogleCharts](https://developers.google.com/chart)
- [AJAX API](http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js)
