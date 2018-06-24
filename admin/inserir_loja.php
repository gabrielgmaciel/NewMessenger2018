<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Inserir Produtos</title>
    <meta charset="UTF-8">
        <?php include "header.php";
        include "s-login.php";
        include "conect.php";
        protegePagina();?>
        <title>Users</title>
</head>
<body>
<center><h2>Cadastrar uma Nova Loja</h2></center>

<form enctype="multipart/form-data" action="s-cadastraLoja.php" method="post">
<div class="container">Razão Social:<input type="text" class="form-control" maxlength="50" placeholder="Ex.: Auto Peças LTDA" name="razaoSocial"/></div>
    <div class="container">Nome Fantasia:<input type="text" class="form-control" maxlength="40" placeholder="Ex.: Auto Peças Sênior" name="nome"/></div>
    <div class="container">E-Mail:<input type="text" class="form-control" maxlength="40" placeholder="Ex.: exemplo@exemplo.com" name="email"/></div>
    <div class="container">Senha:<input type="password" class="form-control" maxlength="40" placeholder="Senha" name="senha"/></div>
    <div class="container">CNPJ:<input type="text" class="form-control" maxlength="18" placeholder="Ex.: 78.425.986/0036-15" name="cnpj"/></div>
    <div class="container">Endereço/Cidade:<input type="text" class="form-control" maxlength="70" placeholder="Endereço da Loja" name="endereco" type="text"/></div>
    <div class="container">Telefone:<input type="text" class="form-control" name="telefone" onkeyup="mascaraTel(this, mtel)" maxlength="15" placeholder="Telefone da Loja"></div>
    <div class="container">Imagem Logo da Loja:<input type="file" class="form-control" name="imagem"/></div>
    <input type="hidden" name="MAX_FILE_SIZE" value="99999999"/>
    <center>
    <button class="btn btn-success" type="submit">Adicionar Loja</button>
    </center>
</form>
<script language="JavaScript" type="text/javascript">
    function mascaraTel(o,f){
        v_obj=o
        v_fun=f
        setTimeout("execmascara()",1)
    }
    function execmascara(){
        v_obj.value=v_fun(v_obj.value)
    }
    function mtel(v){
        v=v.replace(/\D/g,"");             //Remove tudo o que não é dígito
        v=v.replace(/^(\d{2})(\d)/g,"($1) $2"); //Coloca parênteses em volta dos dois primeiros dígitos
        v=v.replace(/(\d)(\d{4})$/,"$1-$2");    //Coloca hífen entre o quarto e o quinto dígitos
        return v;
    }
</script>
<br><br><br><br>
</body>
</html>