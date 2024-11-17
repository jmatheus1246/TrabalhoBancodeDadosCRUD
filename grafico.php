
<html>
  <head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!--Load the AJAX API-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <script type="text/javascript">
      

      $(document).ready(function(){

        $.ajax({
          url: "dados.php",
          dataType: "JSON",
          success: function(result){
            google.charts.load('current', {
              'packages' : ['corechart']
            });
             // Set a callback to run when the Google Visualization API is loaded.
               google.charts.setOnLoadCallback(function() {
              drawChart(result);
                });
          }
        })
      });
     

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart(result) {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'nome_produto');
        data.addColumn('number', 'valor_total');
        var arrayProdutos = [];
        $.each(result, function(i, obj){
          arrayProdutos.push([obj.nome_produto, parseInt(obj.valor_total)])
        });
       
        data.addRows(arrayProdutos);
        // Set chart options
        //Gráfico de Pizza
        var piechart_options = {
          title: 'Gráfico de Produto e Valor',
          width: 400,
          height: 300 
        };
        
        var piechart = new google.visualization.PieChart(document.getElementById('piechart_div'));
        piechart.draw(data, piechart_options);

        //Gráfico de Barra
        var barchart_options = {
                    title: 'Gráfico de Produto por Valor',
                    width: 400,
                    height: 300,
                    
                };
                var barchart = new google.visualization.BarChart(document .getElementById('barchart_div'));
                barchart.draw(data, barchart_options);

                //Gráfico de Linha
                var linechart_options = {
                    title: 'Gráfico de Produto por valor',
                    width: 400,
                    height: 300,
                    legend: 'none'
                };
                var linechart = new google.visualization.LineChart(document
                    .getElementById('linechart_div'));
                linechart.draw(data, linechart_options);
      }
    </script>
  </head>

  <body>
    <table class="columns">
      <tr>
        <td>
        <div id="piechart_div" style="border: 1px solid #ccc"></div>
        </td>
        <td>
        <div id="barchart_div" style="border: 1px solid #ccc"></div>
        </td>
        <td>
          <div> <div id="linechart_div" style="border: 1px solid #ccc"></div></div>
        </td>
      </tr>
    </table>
     <a href="index.php" class="btn btn-info">Voltar para o inicio</a>
  </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>