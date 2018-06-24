<!DOCTYPE html>
<html lang="en">
<?php require_once "header.php"?>
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
        <img src="img/carro01.jpg" style="width:100%;" style="height:1%;">
      </div>

      <div class="item">
        <img src="img/carro02.jpg" style="width:100%;" style="height:1%;">
      </div>
    
      <div class="item">
        <img src="img/carro03.jpg" style="width:100%;" style="height:1%;">
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
            <a href ="listaMacas.php?id=1">
                <img src="img/marcas/01.jpg" class="icone" height="">
        </center>
             </a>
    </th>
    <th class="" bgcolor="" width="25%" height="50" title="Chevrolet">
        <center>
            <a href ="listaMacas.php?id=2">
                <img src="img/marcas/02.jpg" class="icone" height="">
        </center>
             </a>
    </th>
    <th class="" bgcolor="" width="25%" height="50" title="Fiat">
        <center>
            <a href ="listaMacas.php?id=3">
                <img src="img/marcas/03.jpg" class="icone" height="">
        </center>
             </a>
    </th>
    <th class="" bgcolor="" width="25%" height="50" title="Ford">
        <center>
            <a href ="listaMacas.php?id=4">
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
            <a href ="listaMacas.php?id=5">
                <img src="img/marcas/05.jpg" class="icone" height="">
        </center>
             </a>
    </th>
    <th class="" bgcolor="" width="25%" height="50" title="Toyota">
        <center>
            <a href ="listaMacas.php?id=6">
                <img src="img/marcas/06.jpg" class="icone" height="">
        </center>
             </a>
    </th>
    <th class="" bgcolor="" width="25%" height="50" title="Honda">
        <center>
            <a href ="listaMacas.php?id=7">
                <img src="img/marcas/07.png" class="icone" height="">
        </center>
             </a>
    </th>
    <th class="" bgcolor="" width="25%" height="50" title="Citroen">
        <center>
            <a href ="listaMacas.php?id=8">
                <img src="img/marcas/08.png" class="icone" height="">
        </center>
             </a>
    </th>
    </tr>
  </tbody>
</table>
<br><br>
</body>
</html>
