<!-- Page Content -->
<div class="container">

<div class="row">

    <!-- Blog Entries Column -->
    <div class="col-md-8">

        <h1 class="page-header">
            <?php echo $titulo;?> 
            <small> > 
                <?php
                    if($subtitulo != ''){
                        echo $subtitulo;
                    }else{
                        foreach($subtitulodb as $dbsubtitulo){
                            echo $dbsubtitulo->titulo;
                        }
                    }
                ?>
            </small>
        </h1> 

        <!-- First Blog Post -->
        <?php
            foreach($postagem as $destaque){
        ?>
        <h2>
            <a href="<?php echo base_url('index.php/postagem/'.$destaque->id.'/'.limpar($destaque->titulo));//arrumar essa rota?>"><?php echo $destaque->titulo;?></a>
        </h2>
        <p class="lead">
            por <a href="<?php echo base_url('index.php/autor/'.$destaque->idautor.'/'.limpar($destaque->nome));//arrumar essa rota?>"><?php echo $destaque->nome;?></a>
        </p>
        <p><span class="glyphicon glyphicon-time"></span> <?php echo postadoem($destaque->data);?></p>
        <hr>
        <?php 
            if($destaque->img == 1){
                $fotopub = base_url("assets/frontend/img/publicacao/".md5($destaque->id).".jpg");

        ?>
        <img class="img-responsive" src="<?php echo $fotopub?>" alt="">
        <hr>

        <?php 
            }
            
        ?>
        <p><?php echo $destaque->subtitulo;?></p>
        <a class="btn btn-primary" href="<?php echo base_url('index.php/postagem/'.$destaque->id.'/'.limpar($destaque->titulo));//arrumar essa rota?>">Leia mais <span class="glyphicon glyphicon-chevron-right"></span></a>

        <hr>
        <?php 
            }
            echo "<div class='paginacao'>".$links_paginacao."</div>";

        ?>
        

    </div>