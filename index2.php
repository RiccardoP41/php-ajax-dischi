<?php
include "db.php";











 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>ex-dischi-musicali</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.2/handlebars.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header>
            <div class="container">
                <img src="img/logo.png" alt="logo" />
            </div>
        </header>

        <!-- <select class="scelta" name="">
            <option value="All" class="selezione">All</option>
            <option value="Pop" class="selezione">Pop</option>
            <option value="Rock" class="selezione">Rock</option>
            <option value="Metal" class="selezione">Metal</option>
            <option value="Jazz" class="selezione">Jazz</option>
        </select> -->
        <div class="cds-container container">
            <!-- Disco ad esempio -->
            <!-- <div class="cd">
                <img src="https://upload.wikimedia.org/wikipedia/en/9/9f/Ten_Summoner%27s_Tales.jpg" alt="">
                <h3>Ten's Summoners Tales</h3>
                <span class="author">Sting</span>
                <span class="year">1993</span>
            </div> -->
        </div>

        <script id="entry-template" type="text/x-handlebars-template">
            <div class="cd {{genre}} ">
                <img src="{{poster}}" alt="">
                <h3>{{title}}</h3>
                <span class="author">{{author}}</span>
                <span class="year">{{year}}</span>
            </div>
        </script>


        <script src="main.js" charset="utf-8"></script>
    </body>
</html>
