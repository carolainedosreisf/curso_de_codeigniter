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
        <?php 
            if($destaque->img == 1){
                $fotopub = base_url("assets/frontend/img/publicacao/".md5($destaque->id).".jpg");

        ?>
        <img class="img-responsive" src="<?php echo $fotopub?>" alt="">
        <hr>

        <?php 
            }
        ?>
        <p><?php echo $destaque->conteudo;?></p>
       

        <hr>
        <?php }?>
        
 
    </div>