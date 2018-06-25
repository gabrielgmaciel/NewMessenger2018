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
		<link  rel="stylesheet" href="itens.css">
</head>
<body>
<center>
<h1>Itens da Loja
</center>
<div class="container">
	<div class="row">
        <div class="panel panel-primary filterable col-md-12">
        <table id="sort2" class="grid table table-bordered table-sortable">
            <thead>
                <tr>
				<th>Nome do Produtos</th>
				<th>Valor</th>
				<th>Imagem do Produto</th>
				<th>Excluir Item</th>
				</tr>
            </thead>
            <tbody>
            <?php
            function listaProduto($conexao)
            {
            $sql = "select * from Produto where cod_loja = '{$_SESSION['userCod']}'";
            $resultado = mysqli_query($conexao,$sql);
            while ($array=mysqli_fetch_assoc($resultado))
            { ?>
                <tr>
                    <td><?php echo $array['nome_produto']; ?></td>
                    <td><?php echo "R$: ".number_format($array['preco_produto'], 2, ',', '.')?></td>
					<td><center><img src="<?php echo $array['nome_imagem']; ?>" height="80"/></center></td>
                    <td><a href="apagar_produto.php?codigo=<?php echo $codigo = $array['cod_produto'];?>
                "onclick="return confirm('Deseja realmente excluir esse produto?')">
                            <img src="img/lixeira.ico" width="25px" height="25px"></a></td>
                </tr>
            </tbody>
            <?php } ?>
            <?php  }
            listaProduto($conexao);
            ?>
        </table>
        </div>
    </div>
</div>
<br><br>
<script>
$(document).ready(function() {
    var fixHelperModified = function(e, tr) {
        var $originals = tr.children();
        var $helper = tr.clone();
    
        $helper.children().each(function(index) {
            $(this).width($originals.eq(index).width())
        });
        
        return $helper;
    };
  
    $(".table-sortable tbody").sortable({
        helper: fixHelperModified      
    }).disableSelection();

    $(".table-sortable thead").disableSelection();
});

</script>
<script type="text/javascript">
    $(document).ready(function(){
        $("input.dinheiro").maskMoney({showSymbol:true, symbol:"R$", decimal:",", thousands:"."});
    });
</script>
</body>
</html>