<?php
require "header.php";
define('_BLOGUEUSE_IMG_PATH_','asset/images/');
$blogueuses =[
    [
        "name" => "Henriette Montuis",
        "description" => "Super mamie des recettes modernes",
        "image" => "granny-gd7e0b4702_1280.jpg",
        "slogan" => 'Mamie bouge-bouge',
        "favorite" => "soupe au potiron",
        "description_longue" => "Lorem ipsum dolor sit amet, consectetur adipisci elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisci elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."

    ],
    [
        "name" => "Marie montfort",
        "description" => "Super mamie des recettes d'antan",
        "image" => "mamie.jpg",
        "slogan" => 'Mamie rigolote',
        "favorite" => "Boeuf bourgignon",
        "description_longue" => "Lorem ipsum dolor sit amet, consectetur adipisci elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisci elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
    ],
    [
        "name" => "Gisèle Brunef",
        "description" => "Super mamie des recettes rapides",
        "image" => "meme.jpg",
        "slogan" => 'Mamie gourmande',
        "favorite" => "Mousse au chocolat",
        "description_longue" => "Lorem ipsum dolor sit amet, consectetur adipisci elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisci elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
    ]
];
?>
    <section class="container marketing">
<h1>Les blogueuses du site</h1>

        <div class="container marketing">

            <!-- Three columns of text below the carousel -->
            <div class="row">
                <?php
                foreach ($blogueuses as $key => $blogueuse ){
                    include "blogueuse_partial.php";
                } ?>
                <hr>
                <h2>Comment est venu l'idée du blog</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipisci elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisci elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

<hr>



    <!-- START THE FEATURETTES -->
                <h2>Faisons connaissance</h2>
                <p>Lorem ipsum dolor sit amet. Tous ceux qui travaillent dans le secteur graphique et typographique le savent très bien; en réalité tous le métiers concernant l’univers de la communication ont une relation stable avec ces mots, mais de quoi s’agit-il? Lorem picsum est un faux teste sans aucun sens.</p>
        <?php
        foreach ($blogueuses as $key => $blogueuse ){
            include "detail_blogueuse_partial.php";
        } ?>

    <!-- /END THE FEATURETTES -->

</div>
</section>
<?php
require "footer.php";
?>