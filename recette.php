<?php
require "header.php";
require_once('lib/recipe.php');

$pdo = new PDO('mysql:dbname=mamie_recette;host=localhost;charset=utf8mb4', 'root', '');

$recipes = getRecipes($pdo);

?>


<section class="container marketing">
    <h1 class="mt-5 mb-5">Nos recettes</h1>
    <div class=" cardRecette d-flex" style="flex-wrap: wrap">
        <?php
        foreach ($recipes as $key => $recipe ){
            include "recipe_partial.php";
        } ?>
    </div>

</section>
<?php

require "footer.php";
?>
</body>
</html>
