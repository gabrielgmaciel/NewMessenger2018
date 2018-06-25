<!DOCTYPE html>
<?php require_once "conect.php";
require_once "header.php";
require_once "s-login.php"; protegePagina();
?>
<style>
footer{
   background-color: #000000;
    position: fixed;
    bottom: 0;
    left: 0;
    right: 0;
    height: 35px;
    text-align: center;
    color: #CCC;
}

footer p {
    padding: 10.5px;
    margin: 0px;
    line-height: 100%;
}
</style>


<table class="table" border="2" width="10%">

  <?php
  $id = $_REQUEST['id'];
  function listaProduto($conexao, $id)
  {
  $sql = "SELECT * FROM Produto WHERE cod_categoria = '{$id}'";
  $resultado = mysqli_query($conexao,$sql);
  while ($array=mysqli_fetch_assoc($resultado))
  { ?>
      <form>
    <tr>
        <td class="" bgcolor="" width="25%" height="50" title="<?php echo $array['nome_produto']?>">
            <center>
                <a href ="paginaProdutos.php?id=<?php echo $array['cod_produto']?>">
                    <img src="loja/<?php echo $array['nome_imagem']?>" class="icone" height="140">
                    <p><?php echo $array['nome_produto']?></p>
                    <p><?php echo "R$: ".number_format($array['preco_produto'], 2, ',', '.')?></p>
            </center>
                 </a>
        </td>
    </tr>
      </form>
        <?php } ?>
        <?php  }
        listaProduto($conexao, $id);
        ?>

  </tbody>
</table>
<br><br><br>
<footer>
        <p>© 2018<a style="color:#0a93a6; text-decoration:none;" href="#"> Gnove Corporation</a>, Todos os direitos reservados 2016-2018.</p>
    </footer>
</body>
</html>