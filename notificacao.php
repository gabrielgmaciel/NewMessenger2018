<?php require_once "conect.php"; 
require_once "s-login.php";
protegePagina();?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Notificação</title>
    <link href="css/bootstrap.css" rel="stylesheet">
</head>
<body background="img/fundo.jpg" class="login-background">
    <div class="container">
    <div class="page-header">
        <center><h2><font face="Arial" size="5" color="white"><b>Mensagens Recebidas</b></font></h2></center>
    </div>
    <div>
<table class="table table-bordered">
    
      <tr>
          <th bgcolor="#EEE9E9" colspan ="3"><font color="#000000"><center>Notificações</center></font></th>
      </tr>
        <?php

                include "conect.php";

            function listaMensagens($conexao)
            {
                $user_sess = $_SESSION['userCod'];
                $sql="UPDATE Mensagem_usuario SET status=1";
                mysqli_query($conexao,$sql );
                $query="SELECT * FROM Mensagem_usuario WHERE cod_usuario = '{$user_sess}' AND cod_mensagem_recebida  ORDER BY cod_mensagem_recebida DESC";
                $resultado= mysqli_query($conexao,$query );


                while($array=mysqli_fetch_assoc($resultado)) { 
                     global $id;
                     $id = $array['cod_usuario'];

                if($array['status']==1){
                    $class='danger';
                }
                ?>
                    <tr class='<?php echo $class;?>'>
                        <td align="left"> <?php echo $array['mensagem'];?></td>
                        <td align="center"> <?php echo strtoupper($array['placa']);?></td>
                        <td align="right"> <?php echo strtoupper($array['tempo']);?></td>
                    </tr>
                    <?php
                }
            }

            listaMensagens($conexao);

            ?>
    
    </table>
</div>

    <div>
        <h4 align='center' style="font-face:'Arial'; font-size:15px; color:white;">
            <b>ATENÇÃO</b></h4>
    </div>
<div class="container">
    <p align='justify' style="font-face:'Arial'; font-size:15px; color:white;"><b> ALERTA: APÓS RECEBIDA A MENSAGEM,
            NÃO SE DIRIGIR SOZINHO(A) ATÉ O VEÍCULO.
            ANTES DE CHEGAR NO VEÍCULO, VERIFIQUE SE
            REALMENTE A MENSAGEM CONFERE. FIQUE ATENTO!!!</b>
    </p><br><br>
    <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-2 col-sm-offset-4 col-md-offset-5">
            <div class="form-group">
                <a href="home.php">
                    <button type="button" class="btn btn-info btn-block">Voltar</button>
                </a>
            </div>
        </div>
    </div>
</div>
</div>
</body>
</html>