<?php
require "header.php";
require_once  "lib/recipe.php";
require_once "lib/tools.php";



$id = $_GET['id'];

$recipe = getRecipeById($pdo, $id);

if ($recipe){

    if ($recipe['image'] === null){
        $imagePath = _DEFAULT_IMG_PATH_.'recipe-gf87dcc598_1920.jpg';
    }
    else{
        $imagePath = _RECIPES_IMG_PATH_.$recipe['image'];
    }

//on va créer une liste d'ingrédient avec des li avec la fonction explode qui génère un saut de ligne, le php eol est le param du saut de ligne

    $ingredients = linesToArray($recipe['ingredients']);
    $instructions = linesToArray($recipe['instructions']);

    ?>
<div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-10 col-sm-8 col-lg-6">
            <img src="<?php echo $imagePath; ?>" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
        </div>
        <div class="col-lg-6">
            <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3"><?php echo $recipe['title'] ?></h1>
            <p class="lead"><?php echo $recipe['description'] ?></p>
        </div>
    </div>
</div>

<div>
    <h3 class="container marketing">Les ingrédients </h3>
    <ul class="list-group container marketing">
        <li class="list-group-item">
            <?php  foreach ($ingredients as $key => $ingredient) { ?>
        <li class="list-group-item"> <?php echo $ingredient; ?></li>
        <?php } ?>
        </li>
    </ul>
</div>

<div>
    <h3 class="container marketing">Les instructions </h3>

    <p class="container marketing">
        <?php  foreach ($instructions as $key => $instruction) { ?>
    <p class="container marketing"> <?php echo $instruction; ?></p>
    <?php } ?>
    </p>

</div>
<?php } else{ ?>
        <h3 class="row text-center container marketing">Il n'y a pas de recette correspondante</h3>
    <?php } ?>




<?php

require "footer.php";
?>
</body>
</html>
