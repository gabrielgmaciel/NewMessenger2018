<html>
    <head>
        <title>Login</title>
        <meta charset="UTF-8" content="width=device-width, initial-scale=1.0" name="viewport">
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	    <link rel="stylesheet" type="text/css" href="login.css">
        <link href="css/bootstrap.css" rel="stylesheet" />
    </head>
    <body background="img/fundo.jpg" class="login-background">
        <div width="100%">
		<br><br><br><br><br><br>
		  <div class="container">
            <div class="card card-container">
              <form action="s-login.php" method="POST" class="logando" name="form">
                 <center>
                   <div id="contentdiv" class="contcustom">
                     <span class="fa fa-spinner bigicon"></span>
                       <h2 class="LoginTitulo">&nbsp&nbsp Bem-Vendo ao <br> Messenger Driver</h2>
                         <h2 class='LoginTitulo' align="center">Login</h2>
                           <div>
                            <input class="Login" name="email" type="text" placeholder="E-mail">
                            <input class="Login" name="senha" type="password" placeholder="Senha">
                            <input type="submit" class="btn-danger" value="Entrar" onclick="return validaForm()">
                           </div>
                    </div>
              </form>
			    <a href="cadastro.php" class="linkLogin">Não tem uma conta? Crie uma!
			</div>
		  </div>
        </div>

    <script type="text/javascript">
        function validaForm()
        {
            var email = form.email.value;
            var senha = form.senha.value;

            if (email == "" || senha == "")
            {
                alert("Insira email e senha!");
                form.email.select();
                return false;
            }
        }
    </script>
    </body>
</html>