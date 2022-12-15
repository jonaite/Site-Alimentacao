<!DOCTYPE HTML>
<html>

<head>
	<title>Trabalho final</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" href="assets/css/main.css" />
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

				<li><a href="alimentos-nutri.php" class="active">Alimentos</a></li>
			</ul>
		</nav>
		<!-- Main -->
		<div id="main">
			<div class="inner">
				<div style='text-align:center'>
					<h1>Pesquise o Alimento</h1>
				</div>
			</div>
		</div>


			<div style='text-align:center'>

			<form action="conexao.php" method="get">
				<label>Nome do Alimento</label>
				<input type="search" name="nome_alimento" size="50" placeholder="Insira o nome do alimento" >
				<button style="width:200px;"> Buscar </button>

			</form>

			</div>







			<footer id="footer">
				<div class="inner">
					<h2>Contato</h2>
					<ul class="alt">
						<li><span class="fa fa-email-o"></span> <a href="#">jonaitepereira@hotmail.com</a></li>
						<li><span class="fa fa-telefone"></span> +55 (61) 99313-1971</li>
					</ul>
					</section>
				</div>
			</footer>

		</div>
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
		<script src="assets/js/jquery.scrolly.min.js"></script>
		<script src="assets/js/jquery.scrollex.min.js"></script>
		<script src="assets/js/main.js"></script>

		<?php
	 
?>
</body>


</html>