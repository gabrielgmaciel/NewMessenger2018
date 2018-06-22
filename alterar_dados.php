<?php require_once "conect.php"; require_once "s-login.php"; protegePagina();?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Alterar Dados</title>
    <link href="css/bootstrap.css" rel="stylesheet">

</head>
<body background="img/fundo.jpg" class="login-background"> <br>
<div class="container">
<?php
//variável que ira receber o cod_usuario da sessão ativa

$user_sess = $_SESSION['userCod'];
//buscando os registros no BD
$sql = "SELECT * FROM Usuario U, Telefone WHERE U.cod_usuario = '{$user_sess}'";
$result = mysqli_query($conexao,$sql);
$return = mysqli_fetch_assoc($result);
?>

 <!-- Função para aceitar somente letras -->
 <script>
    function somenteLetras(letras) {
        var er = /[^a-z-ç.]/;
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
 <div class="container">
  <div class="card card-container">
    <div align="left" class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">

            <center><h2><font face="Arial" size="5" color="white">Alterar Dados Cadastrados</h2></center>
            <hr class="colorgraph">
        <form novalidate action="s-alterar_dados.php" id="form" method="post" name="form">
            <input type="hidden" id="id" name="cod_usuario" value="<?php echo $return['cod_usuario']; ?>" />
            <div class="form-group">
                <input type="text" class="form-control input-lg" id="nome" name="nome" placeholder="<?php echo $return['nome'];?>" maxlength="50"/>
                <span id="nome-message" class="text-danger" hidden></span>
            </div>
            <div class="form-group">
                <input type="email" class="form-control input-lg" id="email" style="text-transform:lowercase" readonly="readonly" placeholder="<?php echo $return['email']; ?>" maxlength="50" title="Não é permitindo alterar o campo e-mail!" required />
                <span id="email-message" class="text-danger" hidden></span>
            </div>
            <div class=>
                <div class="">
                    <div class="form-group">
                        <input type="text" class="form-control input-lg" id="celular" name="tel_celular" onkeyup="mascaraTel(this, mtel);" placeholder="<?php echo $return['telefone']; ?>" maxlength="15" required />
                        <span id="celular-message" class="number-danger" hidden></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <input id="senha" name="senha1" type="password" placeholder="Digite a senha" onkeyup="somenteNumeros(this);" maxlength="8" class="form-control input-lg" title="A senha deve conter apenas números" >
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <input type="password" class="form-control input-lg" id="senha" name="senha2" placeholder="Repita a nova senha" onkeyup="somenteNumeros(this);" maxlength="8" title="A senha deve conter apenas números" />
                        <span id="senha-message" class="text-danger" hidden></span>
                    </div>
                </div>
            </div>
                <label class=" control-label"><h2 style="color: floralwhite">Endereço</h2></label>
                <div class="form-group">
                    <input type="text" class="form-control input-lg" name="lougradouro" placeholder="Endereço" maxlength="50"/>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control input-lg" name="cidade" placeholder="Cidade" maxlength="50"/>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control input-lg" name="estado" placeholder="Estado" maxlength="50"/>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control input-lg" name="cep" placeholder="CEP" maxlength="50"/>
                </div>
            <div class="form-group">
                  <input type="submit" class="btn btn-primary btn-block btn-lg" onclick="return validaForm();"  value="ALTERAR" style="margin: 0 auto 4px;">
                  <a href="configuracao.php">
				  <input type="button" class="btn btn-danger btn-block btn-lg " value="VOLTAR" style="margin: 0 auto 4px;"></a>
            </div>
        </form>
    </div>
  </div>
</div>
<script type="text/javascript">
    function validaForm()
    {
        var senha1 = form.senha1.value;
        var senha2 = form.senha2.value;
        var nome = form.nome.value;

        if(nome == "")
        {
            alert("Por favor altere os dados!");
            form.nome.select();
            return false;
        }else if(nome.length < 5)
        {
            alert("Digite o nome completo!");
            form.nome.select();
            return false;
        }else if (senha1 != senha2)
        {
            alert ("Senhas não conferem!");
            form.senha2.select();
            return false;
        }else
        {
            alert("Dados alterados com sucesso!");

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
<!-- Função para aceitar somente letras -->
<script>
    function somenteLetras(letras) {
        var er = /[^a-z-ç.]/;
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
</body>
</html>