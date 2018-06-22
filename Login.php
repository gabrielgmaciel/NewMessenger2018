<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" content="width=device-width, initial-scale=1.0" name="viewport">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="login.css">
    <title>Login</title>
</head>
<body background="img/fundo.jpg" class="login-background">
<!------ Include the above in your HEAD tag ---------->
    <br><br><br><br>
    <div class="container">
        <div class="card card-container">
		<h2 class="login">&nbsp&nbsp&nbsp&nbsp&nbsp Bem-Vendo ao <br>&nbsp&nbsp&nbsp Messenger Driver</h2>
        <h2 class='login_title' align="center">Login</h2>
        <hr>
            <form class="form-signin">
                <span id="reauth-email" class="reauth-email"></span>
                <p class="input_title">Email</p>
                <input type="text" id="inputEmail" class="login_box" placeholder="Usuario@gmail.com" required autofocus>
                <p class="input_title">Password</p>
                <input type="password" id="inputPassword" class="login_box" placeholder="******" required>
                <div id="remember" class="checkbox">
                    <label>
                        
                    </label>
                </div>
                <button class="btn btn-lg btn-primary" type="submit">Login</button>
            </form><!-- /form -->
			<a href="cadastro.php" class="linkLogin" align="center">Não tem uma conta? Crie uma!
        </div><!-- /card-container -->
    </div><!-- /container -->
</body>
</html>