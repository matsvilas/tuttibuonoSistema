<?php include("cabecalho.php"); ?>


<?php
$nome = $_GET["nome"];
$preco = $_GET["preco"];
$conexao = mysqli_connect('104.200.144.20', 'matheus', 'vilas123', 'tuttibuono');
$query = "insert into produtos (nome, preco) values ('{$nome}' , {$preco})";

if (mysqli_query($conexao, $query)) { ?>
<p class="alert-success"> O Produto <?= $nome; ?> com preço <?= $preco; ?> foi adicionado.</p>

<?php } else { ?>
	<p class="alert-danger"> O Produto <?= $nome; ?> não foi adicionado.</p>
<?php	
}
?>





<?php include("rodape.php"); ?>
