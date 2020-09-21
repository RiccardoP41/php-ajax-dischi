<?php
include "db.php";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>php-ajax-dichi</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.2/handlebars.min.js"></script>
        <link rel="stylesheet" href="dist/app.css">
    </head>
    <body>
        <header>
            <div class="container">
                <img src="img/logo.png" alt="logo" />
            </div>
        </header>

        <main>
            <div class="container">
                <?php foreach ($database as $value) { ?>
                    <div class="cd">
                        <img src="<?php echo $value["poster"];?>" alt="immagine disco">
                        <h3><?php echo $value["title"]; ?></h3>
                        <span class="author"><?php echo $value["author"]; ?></span>
                        <span class="year"><?php echo $value["year"]; ?></span>
                    </div>
                <?php } ?>
            </div>
        </main>
    </body>
</html>
