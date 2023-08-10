<?php


require "views/partials/head.php";
require "models/delete_show.model.php";
require "models/seller_list_show.model.php";
require "controllers/alert/alert.controller.php";

if (array_key_exists('movie_id',$_GET)){
    $movieId = $_GET['movie_id'];
}

if (array_key_exists('postnow', $_GET)){ 
    $moviePost = $_GET['postnow'];
    updatePost($moviePost,$movieId);
}

$sellerShows = sellerShowMovie();

$listmovies = [];
if (!empty($sellerShows)){
    foreach ($sellerShows as $shows) {
        if ($shows['post'] === 0) {
            array_push ($listmovies,$shows);
        }
    }
    foreach ($sellerShows as $shows) {
        if ($shows['post'] === 1) {
            array_push ($listmovies,$shows);
        }
    }
}

require("views/seller/setting_movie.view.php");
?>