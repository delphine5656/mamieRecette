


<div class="card" style="width: 18rem; margin-left: 1rem;">
                <img src="<?php echo getRecipeImage($recipe['image']);; ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $recipe["title"]; ?></h5>
                    <p class="card-text"><?php echo $recipe["description"]; ?></p>
                    <a href="uneRecette.php?id=<?=$recipe['id']; ?>" class="btn btn-primary">Voir la recette</a>
                </div>
            </div>

