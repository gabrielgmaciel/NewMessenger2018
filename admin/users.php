<html>
    <head>
        <meta charset="UTF-8">
        <?php include "header.php";
            include "s-login.php";
            protegePagina();?>
        <title>Users</title>
    </head>
    <body>
    <?php
    if(isset ($_GET["admin"]) && $_GET["admin"]==0)
    {?>
        <p class="alert-success" style="width:100%">
            Usuário deletado com sucesso!
        </p>
    <?php } ?>
    <?php
    if(isset ($_GET["admin"]) && $_GET["admin"]==1)
    {?>
        <p class="alert-success" style="width:100%">
            Erro ao deletar o usuário
        </p>
    <?php } ?>
        <div class="container">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Telefone</th>
                        <th>Endereço</th>
                        <th>Cidade</th>
                        <th>Estado</th>
                        <th>Cep</th>
                        <th></th>
                    </tr>
                </thead>
                <?php

                include "conect.php";

                function listaUsuarios($conexao)
                {

                    $sql="SELECT * FROM Usuario u, Telefone t, Endereco e WHERE u.cod_usuario = e.cod_usuario = t.cod_usuario ORDER BY u.cod_usuario;";
                    $resultado= mysqli_query($conexao,$sql );


                    while($array=mysqli_fetch_assoc($resultado)) { global $codigo; $codigo = $array['cod_usuario']?>
                        <tr>
                            <td> <?php echo $array['nome'];?></td>
                            <td> <?php echo $array['email'];?></td>
                            <td> <?php echo $array['telefone'];?></td>
                            <td> <?php echo $array['lougradouro'];?></td>
                            <td> <?php echo $array['cidade'];?></td>
                            <td> <?php echo $array['estado'];?></td>
                            <td> <?php echo $array['CEP'];?></td>
                            <td align='center'><a href="apaga_usuario.php?codigo=<?php echo $codigo;?>
                            "onclick="return confirm('Deseja realmente excluir o esse usuário?')"><img src="img/lixeira.ico" width="25px" height="25px"></a></td>
                        </tr>
                        <?php
                    }
                }

                listaUsuarios($conexao);

                ?>
            </table>
        </div>
    </body>
</html>