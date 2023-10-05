<div class="container marketing">
    <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-12">
            <h2 class="featurette-heading fw-normal lh-1"><?=$encabezado?></h2>
                <?php
                    foreach ($mensajes as $mensaje){
                        echo "<p class='lead'>".$mensaje."</p>";
                    }
                ?>
          </div>

        </div>

    <hr class="featurette-divider">
</div><!-- /.container -->