<?php
    namespace Microblog;

    final class ControleDeAcesso {

        public function __construct() {
            if(!isset($_SESSION)){
                session_start();
            }
        }

        public function verificaAcesso():void {
            //se não exisitir uma variável de sessãob cahamada "id" (ou seja, ainda nao houve login po rparte do usuário).
            if( !isset($_SESSION['id']) )
            //então destrua qualquer sessão e redirecione para a pagina de login e encerre.
            session_destroy();
            header("location:../login.php");
            die();
        }
        
    }



?>