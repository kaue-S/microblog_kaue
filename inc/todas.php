<?php

    $todasAsNoticias = $noticia->listarTodas();

?>

<hr class="my-5 w-50 mx-auto">
        

        <div class="row my-1">
            <div class="col-12 px-md-1">
                <div class="list-group">
                    <h2 class="fs-6 text-center text-muted">Todas as notícias</h2>

                <?php foreach( $todasAsNoticias as $noticias ){ ?>
                    <a href="noticia.php?id=<?=$noticias['id']?>" class="list-group-item list-group-item-action">
                         <h3 class="fs-6"><time><?=$noticias['data']?></time> | <?=$noticias['titulo']?></h3>
                        <p><?=$noticias['resumo']?></p>
                    </a>
                <?php }?>
                </div>
            </div>
        </div>