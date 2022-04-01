<?php

if(isset($_POST["submit"])){

$sub_1 = $_POST["sub"];
$sub_2 = $_POST["sub"];
$sub_3 = $_POST["sub"];
$sub_4 = $_POST["sub"];
$sub_5 = $_POST["sub"];


$total = 0;
$average = 0;
$percentage = 0;
$grade = 0;

// It will calculate total, average, percentage, and grade
$total = $sub_1 + $sub_2 + $sub_3 + $sub_4 + $sub_5;
$average = $total / 5.0;
$percentage = ($total / 500.0) * 100;

    if ($average >= 90){
    $grade = "A";}
    else if ($average >= 80 && $average < 90){
    $grade = "B";}
    else if ($average >= 70 && $average < 80){
    $grade = "C";}
    else if ($average >= 60 && $average < 70){
    $grade = "D";}
    else {
    $grade = "E";}

    echo "The Total marks   = " . $total . "/500\n";
    echo "The Average marks = " . $average . "\n";
    echo "The Percentage    = " . $percentage . "%\n";
    echo "The Grade         = '" . $grade . "'\n";

    }
// It will print the final output


?>

<!doctype html>
<html lang="en">
  <head>
    <title>grade</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>