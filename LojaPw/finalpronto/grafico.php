<?php 
    include("cabecalho.php");
    include("conexão.php");
    include("verifica_login.php");
?>


<link rel="stylesheet" href="style-menu.css">
    <section>
            <div> 
                <h1 class="titulo"> Info produtos: </h1>
            </div>

    </section>
    <?php 
        $stmt = $pdo->prepare("select count(*) from tbProduto where idCategoria = 2");	
        $stmt ->execute();			
        $row = $stmt ->fetch(PDO::FETCH_NUM);
        
        $alimento = $row[0];
        

        $stmt2 = $pdo->prepare("select count(*) from tbProduto where idCategoria = 1");	
        $stmt2 ->execute();			
        $row2 = $stmt2 ->fetch(PDO::FETCH_NUM);
        
        $tecno = $row2[0];



    ?>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Tecnologia', <?php echo $alimento ?>],
          ['Alimentação', <?php echo $tecno ?>],
          
        ]);

        var options = {
          title: 'Quantidade de Produtos: '
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  
  <body>
    <div id="piechart" style="width: 900px; height: 500px; "></div>
  </body>
        <h1 class="titulo"> Vendas e despesas </h1>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Ano', 'Vendas', 'Despesas'],
          ['2013',  1000,      400],
          ['2014',  1170,      460],
          ['2015',  660,       1120],
          ['2016',  1030,      540]
        ]);

        var options = {
          title: 'Performance da empresa',
          hAxis: {title: 'Year',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="chart_div" style="width: 100%; height: 500px;"></div>
  </body>