<?php
require_once "../vendor/autoload.php";
    use Microblog\ControleDeAcesso;
    use Microblog\Categoria;

    $categoria = new Categoria;
    $categoria->setId($_GET['id']);
    $categoria->excluir();
    header("location:categorias.php");

    $sessao = new ControleDeAcesso;
    $sessao->verificaAcesso();
?>