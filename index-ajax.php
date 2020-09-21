<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>php-ajax-dischi</title>
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
            <div class="container dischi">
                <script id="entry-template" type="text/x-handlebars-template">
                    <div class="cd">
                        <img src="{{poster}}" alt="immagine disco">
                        <h3>{{title}}</h3>
                        <span class="author">{{author}}</span>
                        <span class="year">{{year}}</span>
                    </div>
                </script>
            </div>
        </main>
        <script src="dist/app.js" charset="utf-8"></script>
    </body>
</html>
