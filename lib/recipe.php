<?php


function getRecipeById(PDO $pdo , int $id){
    $query = $pdo->prepare("SELECT * FROM recipes WHERE id = :id");
    $query->bindParam(':id', $id, PDO::PARAM_INT);
    $query->execute();
   return  $query->fetch();
}

