<?php
function prinCard($dati_arr){
    if (empty($dati_arr)) {
      return;
    }
    $titolo = $dati_arr["title"];
    $img = $dati_arr["poster"];
    $genere= $dati_arr["genre"];
    $annoDrop=$dati_arr["year"];
    $autore =$dati_arr["author"];
    ?>
    <div class="col">
            <div id="card-style" class="card">
                    <img src="<?php echo $img ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $titolo ?></h5>
                        <p class="card-text"> <?php echo $autore ?> <br><?php echo $genere ?></p>
                    </div>
            </div>
    </div>
    <?php
}
?>


