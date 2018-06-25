<!DOCTYPE html>
<?php require_once "conect.php";
require_once "header.php";
require_once "s-login.php"; protegePagina();
?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="aro12.css">
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
<body>
<!-- -->
<?php
        $id = $_REQUEST['id'];

    function listaProduto($conexao, $id)
            {
                $sql = "select * from Produto where cod_produto = '{$id}'";
                $resultado = mysqli_query($conexao,$sql);
                while ($array=mysqli_fetch_assoc($resultado))
                { ?>


	<div class="container">
		<div class="card">
			<div class="container-fliud">
				<div class="wrapper row">
					<div class="preview col-md-6">
						<div class="preview-pic tab-content">
						  <div class="tab-pane active" id="pic-1"><img src="loja/<?php echo $array['nome_imagem']?>" /></div>
						</div>
					</div>
					<div class="details col-md-6">
						<h3 class="product-title">
                            <?php echo $array['nome_produto']?>
                        </h3>
						<div class="rating">
								<div class="stars">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
						</div>
						<p class="product-description"><?php echo $array['descricao_produto']?></p>
						<h2 class="price">Valor: <span bgcolor="#00000"><?php echo "R$: ".number_format($array['preco_produto'], 2, ',', '.')?></span></h2>
						<!--<p class="vote"><strong>91%</strong> of buyers enjoyed this product! <strong>(87 votes)</strong></p> -->
						<div class="action">
                            <a href="<?php echo $array['link']; ?>">
							<button class="btn btn-success" type="button">
                                Compra Agora
                            </button>
                            </a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> <br><br><br>
                <?php } ?>
            <?php  }
listaProduto($conexao, $id);
?>

<!-- -->
<footer>
        <p>© 2018<a style="color:#0a93a6; text-decoration:none;" href="#"> Gnove Corporation</a>, Todos os direitos reservados 2016-2018.</p>
</footer>
</body>
<script type="text/javascript">
    $(document).ready(function(){
        $("input.dinheiro").maskMoney({showSymbol:true, symbol:"R$", decimal:",", thousands:"."});
    });
</script>
</html>