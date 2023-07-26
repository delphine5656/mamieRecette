<?php
require "header.php";

?>


<section class="container marketing">
    <h1 class="mt-5 mb-5">Nos recettes</h1>
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
