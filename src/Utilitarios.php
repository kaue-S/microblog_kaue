<?php
    namespace Microblog;

    abstract class Utilitarios {
        //o parâmetro pode se array ou boleano
        public static function dump(array | bool $dados):void {
            echo "<pre>";
            var_dump($dados);
            echo "</pre>";
        }
    }
?>