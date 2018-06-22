<?php require_once "s-login.php";
 protegePagina();
 include "conect.php";
 
 $user_sess = $_SESSION['userCod'];
 $sql="SELECT * FROM Mensagem_usuario where status=0 and cod_usuario = '{$user_sess}'ORDER BY cod_mensagem_recebida DESC";
 $resultado= mysqli_query($conexao,$sql );
 $total=mysqli_num_rows($resultado);
 ?>

<html>
<head>
    <title>Home</title>
    <meta charset="UTF-8" content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="css/bootstrap.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="home.css">

</head>

<!-- Função para aceitar somente letras -->
<script>
    function somenteLetras(letras) {
        var er = /[^a-zA-Z.]/;
        er.lastIndex = 0;
        var campo = letras;
        if (er.test(campo.value)) {
            campo.value = "";
        }
    }
</script>

<!-- Função para aceitar somente números -->
<script>
    function somenteNumeros(num) {
        var er = /[^0-9.]/;
        er.lastIndex = 0;
        var campo = num;
        if (er.test(campo.value)) {
            campo.value = "";
        }
    }
</script>

<body background="img/fundo.jpg" class="login-background">
<div class="container">
<div class="card card-container">
  <center>
    <br> 
        <div id="menu">
		    <span class="badge"><?php echo $total;?></span>
            <table class="" width="80%">
                <tr>
                    <th class="" bgcolor="" width="25%" height="50" title="Configuração">
                        <center>
                            <a href ="configuracao.php">
                                <img src="img/config.png" class="icone" height="50" color="#FF4500">
                        </center>
                        </a>
                    </th>
                    <th class="" bgcolor="" width="25%" height="50" title="Mensagens">
                        <center>
                            <a href ="notificacao.php" style="text-decoration:none">
                                <img src="img/mensagem.png" class="icone" height="50" color="#FF4500">
                            </a>
                        </center>
                    </th>
					  <th class="" bgcolor="" width="25%" height="50" title="Loja">
                        <center>
                        <a href ="loja_home.php">
                        <img src="img/carrinho.png" class="icone" height="50" color="#FF4500">
                        </center>
                       </th>
                </tr>
            </table>
        </div>
   </center>
  <div align="left" class="">
    <br><br>
    <div>
        <center><br>
            <h2><font color="#000000">DIGITE A PLACA</font></h2>
        </center>
    </div>
      <form class="form-signin" name="form1" method="post" action="s-valida_placa.php">
         <div><br><center>
            <div class="row">
               <table align="center" >
                  <center>
                    <td><center><input type="text" name="letras" class="form-control" onkeyup="somenteLetras(this);" size="3" maxlength="3"></center></td>
                      <th><center><img src="img/traco.png" class="icone"></th></center>
                    <td><center><input type="text" name="numeros" class="form-control" onkeyup="somenteNumeros(this);"  size="4" maxlength="4"></center></td>
                  </tr>
               </table></center>
            </div>
              <div class="contcustom">
                 <input type="submit" class="btn btn-info" name="ok" value="ENVIAR" style="margin: 0 auto 4px;">
                 <input type="reset" class="btn btn-danger" name="cancelar" value="LIMPAR">
              </div>
       </form>
     </div>
   </center>
</div>
</div>
</body>
</html>