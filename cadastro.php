<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <script type="text/javascript" src="css/jquery.js"></script>
    <script type="text/javascript" src="css/jquery.maskedinput.js"></script>
    <title>Cadastro</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url(img/fundo.jpg);
            height: 100vh;
            background-size: cover;
            background-position: center center;
            background-repeat: no-repeat;
        }
    </style>
</head>
<body> <br>
<div align="left" class="container">

    <div align="left" class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
        <form name="form1" novalidate method="post" action="s-cadastro.php">
            <h2><font face="Arial" color="white">Cadastre-se ou faça seu <a href="index.php" color="white">Login</a></h2>
            <hr class="colorgraph">

            <div class="form-group">
                <input type="text" name="nome" class="form-control input-lg" style="text-transform:" id="nome" placeholder="Nome completo" maxlength="50" tabindex="1"/>
                <span id="nome-message" class="text-danger" hidden></span>
            </div>
            <div class="form-group">
                <input type="email" name="email" class="form-control input-lg" id="email" style="text-transform:" placeholder="Email Ex: (nome@provedor.com)" maxlength="50" tabindex="2"/>
                <span id="email-message" class="text-danger" hidden></span>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <input type="text" name="telefone" class="form-control input-lg" onkeyup="mascaraTel(this, mtel)" placeholder="Número do celular: (99) 99999-9999" maxlength="15" required tabindex="3"/>
                        <span id="celular-message" class="number-danger" hidden></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <input id="senha" name="senha1" type="password" placeholder="Digite a senha" onkeyup="somenteNumeros(this);" maxlength="8" class="form-control input-lg" title="A senha deve conter apenas números" required="" tabindex="4">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <input type="password" class="form-control input-lg" id="senha2" name="senha2" placeholder="Repita sua senha" onkeyup="somenteNumeros(this);" maxlength="8" title="Confime a senha" tabindex="5"/>
                        <span id="senha-message" class="text-danger" hidden></span>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class=" control-label"><h2>Veículo</h2></label>
                <div >
                    <input type="radio" id="carro" name="tipo" value="1" placeholder="Carro"/> <font color="#FFFFFF">Carro</font> <br>
                    <input type="radio" id="moto" name="tipo" value="2" placeholder="moto"/>  <font color="#FFFFFF">Moto</font>
                </div>
            </div>
            <div class="form-group">
                <input type="text" class="form-control placa input-lg" name="placa" id="placa" placeholder="Placa do Veículo" maxlength="8"/>
                <span id="placa-message" class="text-danger" hidden></span>
            </div>
            <div class="form-group">
                <input type="text" class="form-control input-lg" name="modelo" placeholder="Modelo do Véiculo" maxlength="50"/>
                <span id="modelo-message" class="text-danger" hidden></span>
            </div>
            <div class="row">
                <div class="col-xs-12 col-md-6"><input class="btn btn-primary btn-block btn-lg" onclick="return validaForm();" type="submit" value="CADASTRAR" style="margin: 0 auto 4px;"></div>
                <div class="col-xs-12 col-md-6">
                    <a href="index.php">
                        <button type="button" class="btn btn-danger btn-block btn-lg">CANCELAR</button></a>
                </div>
                <br><br>
                </div>
        </form>
    </div>
</div>

<script src="js/lib/jquery-2.1.3.min.js"></script>
<script src="js/lib/bootstrap.min.js"></script>
<script type="text/javascript">
    function validaForm()
    {
        var nome = form1.nome.value;

        var senha1 = form1.senha1.value;
        var senha2 = form1.senha2.value;
        var tipo = form1.tipo.value;
        var placa = form1.placa.value;
        var modelo = form1.modelo.value;

        if (nome.length < 5)
        {
            alert ("Digite seu nome completo!");
            form1.nome.select();
            return false;
        }else if (form1.email.value.indexOf(".") == -1 || form1.email.value.indexOf("@") == -1)
        {
            alert("Insira um e-mail válido!");
            form1.email.select();
            return false;
        }else if (senha1 == "")
        {
            alert("Senha não informada!");
            form1.senha1.select();
            return false;
        }else if (senha1 != senha2)
        {
            alert("Senhas não conferem!");
            form1.senha2.select();
            return false;
        }else if (tipo == "")
        {
            alert("Tipo de veículo não selecionado!");
            return false;
        }else if (placa == "")
        {
            alert("Placa não informada!");
            form1.placa.select();
            return false;
        }else if (modelo == "")
        {
            alert("Modelo do veículo não informado!");
            form1.modelo.select();
            return false;
        }
    }
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $("input.placa").mask("aaa-9999");
    });
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
</body>
</html>
