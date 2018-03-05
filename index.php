<?php require_once("dao/UsuarioDao.php")

$usuario = buscaUsuario($conexao, $_POST["nome"], $_POST["senha"]);

?>

<?php include("cabecalho.php"); ?>
<?php include("form.php"); ?>
<?php include("rodape.php"); ?>
