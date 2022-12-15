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

                <li><a href="alimentos-nutri.php">Alimentos</a></li>

                <li> <a href="resultado.php" class="active"></a></li>
            </ul>
        </nav>


    </div>
    </header>

    <div id="conent">
        <div id="logo">
        </div>
        <div id="resultado">

        <center>
            <?php
            $altura = $_GET['altura'];
            $peso = $_GET['peso'];
            $conta1 = $altura * $altura;
            $conta2 = $peso / $conta1;
            $resultado = number_format($conta2);
            
           
            $info = "Índices abaixo de 18.5 não são considerados saudáveis segundo a OMS, entretanto, a pessoa pode muito bem apresentar um biotipo longilíneo e ser saudável. Indivíduos com IMCs entre 18.5 e 25 são considerados normais; nesse caso, a necessidade de emagrecer é, na maioria das vezes, de ordem estética. Entre 25 e 30, o indivíduo é considerado acima do peso, apresentando maiores chances de apresentar complicações, como diabetes, hipertensão arterial e hipercolesterolemia. Pessoas com IMCs acima de 30 são consideradas obesas, por isso, em virtude do alto risco de complicações metabólicas, é extremamente recomendável procurar um médico.";

            // Fonte: https://mundoeducacao.uol.com.br/saude-bem-estar/imc.htm
            // Fonte: https://www.minhavida.com.br/alimentacao/tudo-sobre/32159-imc
            if (isset($resultado) && $resultado != '0') {
                echo nl2br("<h6> $info \n <h6>");
                echo "<h3> Seu IMC é:</h3>";
                echo "<h3> $resultado <h3/>";
            } else {
                echo "<h1> por favor, utilize apenas números!</h1>";
            }
            ?>

        </div>
    </div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.scrolly.min.js"></script>
    <script src="assets/js/jquery.scrollex.min.js"></script>
    <script src="assets/js/main.js"></script>
        </center>
</body>

</html>