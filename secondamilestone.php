<!DOCTYPE html>
<html lang="en">
<head>
    <?php require './dati/meta.php' ?>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <title>Document</title>
</head>
<body>
<div id="root">
   <?php include "./dati/header.php" ?>
   <main>
       <div class="card-boxx">
       <div class="container pb-5">
                <div class="row row-cols-1 row-cols-md-5 g-5 m-0">
                    
                    <div class="col" v-for="disco in dischiArr">
                            <div id="card-style" class="card">
                    <img :src="disco.poster" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{disco.title}}</h5>
                        <p class="card-text">{{disco.author}}
                        ({{disco.genre}})</p>
                    </div>
                            </div>
                    </div>

                </div>
            </div>
       </div>
   </main>
   <footer></footer>
</div>

   <script src="mainvue.js"></script>
</body>
</html>