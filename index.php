<?php
require "header.php";

$recipies = getRecipes($pdo, _HOME_RECIPES_LIMIT_);
?>

<section>
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="asset/header1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                    <p><a class="btn btn-lg btn-primary" href="recette.php">Voir les recettes</a></p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="asset/woman-g85bc98048_1920.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                    <p><a class="btn btn-lg btn-primary" href="recette.php">Voir les recettes</a></p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="asset/raspberry-g8d1a737e4_1920.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                    <p><a class="btn btn-lg btn-primary" href="recette.php">Voir les recettes</a></p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>

<section class="container marketing">
    <h2 class="mt-5 mb-5">Nos recettes populaires</h2>
    <div class=" cardRecette d-flex">
        <?php
        foreach ($recipies as $key => $recipe ){
            include "recipe_partial.php";
         } ?>
    </div>

</section>
<?php

    require "footer.php";
    ?>
</body>
</html>