<?php
require_once("conect.php");
	ini_set ('default_charset','UTF-8');

    $_SG['abreSessao'] = true;
    $_SG['validaSempre'] = true;
    //verifica se há uma sessão iniciada
    if ($_SG['abreSessao'] == true)
    { session_start();}

    $email = isset($_POST['email']) ? $_POST['email'] : '';;
    $senha = isset($_POST['senha']) ? $_POST['senha'] : '';;

    //valida login 2.0
    function validaLoja($conexao,$email,$senha)
    {
        global $_SG;
        $senhacrip = $senha;

        $result = $conexao -> query("SELECT * FROM loja WHERE email='$email' AND senha = '$senhacrip'");
        if(mysqli_num_rows($result) > 0)
        {
            $return = mysqli_fetch_assoc($result);
            $_SESSION['nomeUsuario'] = $return['nome_loja'];
            $_SESSION['userCod'] = $return['cod_loja'];
            echo "<script>location.href='itens_loja.php'</script>";
            return true;
        }else
        {
            echo "<script> alert('Email/senha incorreto!') </script>";
            echo "<script>location.href='index.php'</script>";
        }
    }
        //função para proteger paginas que devem ser acessadas somente se tiver um log
        function protegePagina()
        {
            if (!isset($_SESSION['nomeUsuario']) or !isset($_SESSION['userCod']))
            {
                expulsaVisitante();
            }
        }
        //função para expulsar Visitante e redirecionar para a pagina login com erro de não logado
        function expulsaVisitante()
        {
            unset($_SESSION['nomeUsuario']);
            unset($_SESSION['userCod']);
            session_destroy();
            echo "<script> alert('Efetue o login para acessar a página!') </script>";
            echo "<script>location.href='index.php'</script>";
        }
        //função para logoff
        function logoff()
        {
            unset($_SESSION['nomeUsuario']);
            unset($_SESSION['userCod']);
            session_destroy();
            echo "<script>location.href='index.php'</script>";
        }
    if (empty($email) and empty($senha))
    {
        //echo "<script>location.href='index.php'</script>";
    }else
    {
        validaLoja($conexao,$email,$senha);
    }

    if(isset($_GET['x']) == 1){

        logoff();
    }

?>