<!-- Page Content -->
<div class="container">

<div class="row">

    <!-- Blog Entries Column -->
    <div class="col-md-8">

        
        <!-- First Blog Post -->
        <?php
            foreach($postagem as $destaque){
        ?>
        <h2>
            <?php echo $destaque->titulo;?>
        </h2>
        <p class="lead">
            por <a href="<?php echo base_url('index.php/autor/'.$destaque->idautor.'/'.limpar($destaque->nome));//arrumar essa rota?>"><?php echo $destaque->nome;?></a>
        </p>
        <p><span class="glyphicon glyphicon-time"></span> <?php echo postadoem($destaque->data);?></p>
        <hr>
        <p><?php echo $destaque->subtitulo;?></p>
        <img class="img-responsive" src="http://placehold.it/900x300" alt="">
        <hr>
        <p><?php echo $destaque->conteudo;?></p>
       

        <hr>
        <?php }?>
        

    </div>