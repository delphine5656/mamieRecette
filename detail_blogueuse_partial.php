


<div class="row featurette">
    <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1"><?php echo $blogueuse["name"] ?> <span class="text-body-secondary"><?php echo $blogueuse["slogan"] ?></span></h2>
        <p class="lead"><?php echo $blogueuse["description_longue"] ?></p>
        <h3 class="featurette-heading fw-normal lh-1">recette préférée: <span class="text-body-secondary"><?php echo $blogueuse["favorite"] ?></span></h3>

    </div>
    <div class="col-md-5">
        <img src="<?php echo  _BLOGUEUSE_IMG_PATH_.$blogueuse["image"]; ?>" class=" mx-auto d-block img-fluid" alt="..." style="height:500px;width:500px;">
    </div>
</div>

<hr class="featurette-divider">
