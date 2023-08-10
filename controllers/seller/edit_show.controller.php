<?php
require "models/seller_list_show.model.php";
require "models/list_show.model.php";


// $showId = $_GET["movie_id"] ? $_GET["movie_id"] : null;

// $getID = ($_GET['movie_id']);
// $movies = getDetailMovieFromHall($getID);
// $movie = TRUE;
// if (empty($movies)){
//     $movies = getDetailMovie($getID);
//     $movie = FALSE;
// }
// $shows = notListShow($getID);

$show_id = $_POST['show_id'];
if (!is_numeric($show_id)) {
    // handle the error here
    print_r('Error');
} else {
    $id = (int) $show_id;
    var_dump($id); // add this line
}

// call the editShow() function with the $id parameter
// assuming $show_id is the integer value of the show ID that you want to update
$result = editShow($dateShow, $hallName, $timeStart, $show_id);


require("views/seller/edit_show.view.php");

