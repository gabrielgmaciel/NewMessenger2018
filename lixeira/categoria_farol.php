<!DOCTYPE html>
<?php require_once "conect.php";?>
<html lang="en">
<head>
  <title>Messenger Driver Compras</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<div class="container-fluid" height="100%">
<div class="row">
  <div class="jumbotron">
  <img src="img/logo_compras.png" class="img-rounded" height="153" align="right">
    <h1><b>Messenger Driver Compras</b></h1>      
    <p>Sistema de Vendas de Peças Automotivas</p>
  </div>
</div>
</div>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li class="active"><a href="loja_home.php">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Categorias <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="categoria_parachoque.php">Parachoque</a></li>
          <li><a href="listaDeProdutos.php">Pneu</a></li>
          <li><a href="categoria_farol.php">Farol</a></li>
          <li><a href="categoria_volante.php">Volante</a></li>
          <li><a href="categoria_lanterna.php">Lanterna</a></li>
        </ul>
      </li>
      <li><a href="XX-home.php">Menseger Drive</a></li>
      <li><a href="#">Compras</a></li>
    </ul>
  </div>
</nav>
<div>
    <form>
        <select>
            <option>Todos</option>
            <?php
            function listaMarcas($conexao)
            {
                $sql = "SELECT * FROM Marca ";
                $resultado = mysqli_query($conexao,$sql);
                while ($array=mysqli_fetch_assoc($resultado))
                { ?>
                    <option><?php echo $array['nome']?></option>

                <?php } ?>
            <?php  }
            listaMarcas($conexao);
            ?>
        </select>
    </form>
    <br>
</div>
<table class="table" border="2" width="10%">
  <thead>
    <tr>
    <th class="" bgcolor="" width="25%" height="50" title="Farol Esquerdo Volkswagen FOX 2017">
        <center>
            <a href ="configuracao.php">
                <img src="img/farol/farol_volkswagen.jpg" class="icone" height="">
                <p>Farol Esquerdo Volkswagen FOX 2017</p>
                <p>R$ 0,00</p>
        </center>
             </a>
    </th>
    <th class="" bgcolor="" width="25%" height="50" title="Farol Chevrolet VECTRA 2006">
        <center>
            <a href ="configuracao.php">
                <img src="img/farol/farol_chevrolet.jpg" class="icone" height="">
                <p>Farol Direito Chevrolet VECTRA 2006</p>
                <p>R$ 0,00</p>
        </center>
             </a>
    </th>
    <th class="" bgcolor="" width="25%" height="50" title="Farol Direito Fiat LINEA 2008">
        <center>
            <a href ="configuracao.php">
                <img src="img/farol/farol_fiat1.jpg" class="icone" height="">
                <p>Farol Direito Fiat LINEA 2008</p>
                <p>R$ 0,00</p>
        </center>
             </a>
    </th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <th class="" bgcolor="" width="25%" height="50" title="Farol Esquerdo Ford FOCUS 2004 até 2008">
        <center>
            <a href ="configuracao.php">
                <img src="img/farol/farol_ford.jpg" class="icone" height="">
                <p>Farol Esquerdo Ford FOCUS 2004 até 2008</p>
                <p>R$ 0,00</p>
        </center>
             </a>
    </th>
    <th class="" bgcolor="" width="25%" height="50" title="Farol Esquerdo Hyundai I30 2008 até 2012">
        <center>
            <a href ="configuracao.php">
                <img src="img/farol/farol_hyundai.jpg" class="icone" height="">
                <p>Farol Esquerdo Hyundai I30 2008 até 2012</p>
                <p>R$ 0,00</p>
        </center>
             </a>
    </th>
    <th class="" bgcolor="" width="25%" height="50" title="Farol de Milha Esquerdo Toyota COROLLA 2005 até 2008">
        <center>
            <a href ="configuracao.php">
                <img src="img/farol/farol_toyota.jpg" class="icone" height="">
                <p>Farol de Milha Esquerdo Toyota COROLLA 2005 até 2008</p>
                <p>R$ 0,00</p>
        </center>
             </a>
    </th>
    </tr>
    </thead>
    <tbody>
    <tr>
    <th class="" bgcolor="" width="25%" height="50" title="Farol Esquerdo Honda CITY 2009 até 2014">
        <center>
            <a href ="configuracao.php">
                <img src="img/farol/farol_honda.jpg" class="icone" height="">
                <p>Farol Esquerdo Honda CITY 2009 até 2014</p>
                <p>R$ 0,00</p>
        </center>
             </a>
    </th>
    <th class="" bgcolor="" width="25%" height="50" title="Farol Esquerdo Citroen C4 PALLAS 2007 até 2012">
        <center>
            <a href ="configuracao.php">
                <img src="img/farol/farol_citroen.jpg" class="icone" height="">
                <p>Farol Esquerdo Citroen C4 PALLAS 2007 até 2012</p>
                <p>R$ 0,00</p>
        </center>
             </a>
    </th>
    <th class="" bgcolor="" width="25%" height="50" title="Farol Direito Fiat STILO 2006 até 2007">
        <center>
            <a href ="configuracao.php">
                <img src="img/farol/farol_fiat2.jpg" class="icone" height="">
                <p>Farol Direito Fiat STILO 2006 até 2007</p>
                <p>R$ 0,00</p>
        </center>
             </a>
    </th>
    </tr>
  </tbody>
</table>

</body>
</html>