<!DOCTYPE HTML>
<html lang="pt-br">

<head>
  <title>Trabalho final</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/css/main.css" />
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <noscript>
    <link rel="stylesheet" href="assets/css/noscript.css" />
  </noscript>

</head>

<body class="is-preload">

  <div id="wrapper">


    <header id="header">
      <div class="inner">

        <!-- Logo -->
        <a href="index.html" class="logo">
          <img src="images/vertazio.png" width="24"> <span class="title">Healthy Food</span>
        </a>



        <nav>
          <ul>
            <li><a href="#menu">Menu</a></li>
          </ul>
        </nav>

      </div>
    </header>

    <!-- Menu -->
    <nav id="menu">
      <h2>Menu</h2>
      <ul>
        <li><a href="index.html">Home</a></li>

        <li><a href="dicas-alimentares.php">Dicas Alimentares</a></li>

        <li><a href="calculo-imc.php">Calculo de IMC</a></li>

        <li><a href="alimentos-nutri.php">Alimentos</a></li>

        


      </ul>
    </nav>
  
  
    <!-- Main -->
    <div id="main">
      <div class="inner">
        <div style='text-align:center'>
          <h1>resultado</h1>
        </div>
      </div>
    </div>


    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.scrolly.min.js"></script>
    <script src="assets/js/jquery.scrollex.min.js"></script>
  </div>
  </div>



  <?php
  $host = "localhost";
  $bd = "jhonaite";
  $senha = "";
  $usuario = "root";
  /*if ($mysqli->connect_errno) {
    echo "Falha ao conectar: (" . $mysqli->connect_errno . ")" . $mysqli->connect_error;
  } else
    echo "conectado!"; */

    $mysqli = new mysqli($host, $usuario, $senha, $bd);

		$consulta = "SELECT * FROM taco";
		$con = $mysqli->query($consulta) or die($mysqli->error);
    ?>



<?php
$consulta = "SELECT * FROM taco where Descricao_dos_alimentos like '%".$_GET['nome_alimento']."%';";
$con = $mysqli->query($consulta) or die($mysqli->error);


?>


  	<table border="1">
			<tr>
			<td>Nome do Alimento</td>
			<td>id</td>
			<td>Umidade(%)</td>
			<td>Energia(Kcal)</td>
			<td>Proteina(g)</td>
			<td>Carboidrato(g)</td>
			<td>Fibra(g)</td>
			<td>Sodio(mg)</td>
      
</tr>
<?php 
  
  //for ($i=0; $i <= sizeof($dado) ; $i++) { 
  foreach ($con as $dado){
?>

<tr>
<td><?php echo $dado['Descricao_dos_alimentos'] ?></td>
<td><?php echo $dado['id'] ?></td>
<td><?php echo $dado['Umidade'] ?></td>
<td><?php echo $dado['Energia'] ?></td>
<td><?php echo $dado['Proteina'] ?></td>
<td><?php echo $dado['Carboidrato'] ?></td>
<td><?php echo $dado['Fibra'] ?></td>
<td><?php echo $dado['Sodio'] ?></td>
<?php }?>
</tr>
		</table>
    
 
</body>

</html>