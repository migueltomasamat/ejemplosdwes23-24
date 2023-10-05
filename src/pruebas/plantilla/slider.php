<div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
    <div class="carousel-indicators">

        <?php
            for($i=0;$i<count($diapositivas);$i++){
                if ($i===0){
                    echo "<button type='button' data-bs-target='#myCarousel' data-bs-slide-to='$i' class='active' aria-current='true' aria-label='Slide ".($i+1)."'>";
                }else{
                    echo "<button type='button' data-bs-target='#myCarousel' data-bs-slide-to='$i' aria-label='Slide ".($i+1)."'></button>";
                }
            }

        ?>
    </div>
    <div class="carousel-inner">
        <?php
            foreach ($diapositivas as $clave=>$diapositiva){
                if (array_key_first($diapositivas)==$clave){
                    echo " <div class='carousel-item active'>";
                }else{
                    echo " <div class='carousel-item'>";

                }
                echo "<svg class='bd-placeholder-img' width='100%' height='100%' xmlns='http://www.w3.org/2000/svg' aria-hidden='true' preserveAspectRatio='xMidYMid slice' focusable='false'><rect width='100%' height='100%' fill='var(--bs-secondary-color)'/></svg>
                        <div class='container'>
                        <div class='carousel-caption text-start'>";
                        echo "<h1>".$diapositiva['titulo']."</h1>";
                        echo "<p class='opacity-75'>".$diapositiva['subtitulo']."</p>";
                        echo "<p><a class='btn btn-lg btn-primary' href='".$diapositiva['enlace']."'>".$diapositiva['desc_enlace']."</a></p>";
                        echo "</div>
                        </div>
                        </div>";
            }

        ?>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previo</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Siguiente</span>
    </button>
</div>
</div>