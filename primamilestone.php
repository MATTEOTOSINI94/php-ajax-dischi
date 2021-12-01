<?php
    include "./dati/dati.php";
    include "./dati/cardcomponent.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php require './dati/meta.php' ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/master.css">
    <title>Vue Dischi</title>
</head>
<body>
   <?php include "./dati/header.php" ?>
    <main>
        <div class="card-boxx">
            <div class="container pb-5">
                <div class="row row-cols-1 row-cols-md-5 g-5 m-0">
                <?php
                    foreach ($dischi as  $value) {
                        prinCard($value);
                    }
                ?>
                </div>
            </div>
        </div>
    </main>
</body>
</html>