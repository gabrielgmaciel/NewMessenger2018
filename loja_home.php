<!DOCTYPE html>
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
          <li><a href="categoria_pneu.php">Pneu</a></li>
          <li><a href="categoria_farol.php">Farol</a></li>
          <li><a href="categoria_volante.php">Volante</a></li>
          <li><a href="categoria_lanterna.php">Lanterna</a></li>
        </ul>
      </li>
      <li><a href="home.php">Menseger Drive</a></li>
      <li><a href="#">Compras</a></li>
    </ul>
  </div>
</nav>
<div class="container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="img/carro01.jpg" style="width:100%;">
      </div>

      <div class="item">
        <img src="img/carro02.jpg" style="width:100%;" style="height:1%;">
      </div>
    
      <div class="item">
        <img src="img/carro03.jpg" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div><br>

    <table class="table" border="2" width="10%">
  <thead>
    <tr>
    <th class="" bgcolor="" width="25%" height="50" title="Volkswagen">
        <center>
            <a href ="configuracao.php">
                <img src="img/marcas/01.jpg" class="icone" height="">
        </center>
             </a>
    </th>
    <th class="" bgcolor="" width="25%" height="50" title="Chevrolet">
        <center>
            <a href ="configuracao.php">
                <img src="img/marcas/02.jpg" class="icone" height="">
        </center>
             </a>
    </th>
    <th class="" bgcolor="" width="25%" height="50" title="Fiat">
        <center>
            <a href ="configuracao.php">
                <img src="img/marcas/03.jpg" class="icone" height="">
        </center>
             </a>
    </th>
    <th class="" bgcolor="" width="25%" height="50" title="Ford">
        <center>
            <a href ="configuracao.php">
                <img src="img/marcas/04.jpg" class="icone" height="">
        </center>
             </a>
    </th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <th class="" bgcolor="" width="25%" height="50" title="Hyundai">
        <center>
            <a href ="configuracao.php">
                <img src="img/marcas/05.jpg" class="icone" height="">
        </center>
             </a>
    </th>
    <th class="" bgcolor="" width="25%" height="50" title="Toyota">
        <center>
            <a href ="configuracao.php">
                <img src="img/marcas/06.jpg" class="icone" height="">
        </center>
             </a>
    </th>
    <th class="" bgcolor="" width="25%" height="50" title="Honda">
        <center>
            <a href ="configuracao.php">
                <img src="img/marcas/07.png" class="icone" height="">
        </center>
             </a>
    </th>
    <th class="" bgcolor="" width="25%" height="50" title="Citroen">
        <center>
            <a href ="configuracao.php">
                <img src="img/marcas/08.png" class="icone" height="">
        </center>
             </a>
    </th>
    </tr>
  </tbody>
</table>

</body>
</html>
