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
				<th>ID</th>
				<th>Nome do Produtos</th>
				<th>Valor</th>
				<th>Imagem do Produto</th>
				<th>Excluir Item</th>
				</tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td><input type="text" value="name 1" class="form-control"></td>
                    <td><input type="number" value="valor 1" class="form-control"></td>
					<td><img src="img/12.png" height="80"/></td>
                    <td><button class="btn btn-xs btn-primary pull-left">X</button></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td><input type="text" value="name 2" class="form-control"></td>
                    <td><input type="number" value="valor 2" class="form-control"></td>
					<td><img src="img/12.png" height="80" /></td>
                    <td><button class="btn btn-xs btn-primary pull-left">X</button></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td><input type="text" value="name 3" class="form-control"></td>
                    <td><input type="number" value="valor 3" class="form-control"></td>
					<td><img src="img/12.png" height="80" /></td>
                    <td><button class="btn btn-xs btn-primary pull-left">X</button></td>
                </tr>
            </tbody>
        </table>
        </div>
    </div>
</div>
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
</body>
</html>