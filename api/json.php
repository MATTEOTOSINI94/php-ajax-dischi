<?php
include "../dati/dati.php";



if (isset($_GET['musica']) && !empty($_GET['musica'])) {
    $genere = $_GET["musica"];
    // var_dump($genere);
    $arr=[];

    foreach ($dischi as $key => $value) {
       if($value["genre"]===$genere){
           $arr[]=$value;
       }

    }
    $dischi = $arr;
}





header("Content-Type: application/json");
echo json_encode($dischi);
