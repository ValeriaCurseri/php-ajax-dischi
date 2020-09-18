<!-- Utilizzare: Html, Sass, JS, jQuery, handlebars, PHP
Stampiamo i dischi solo con l’utilizzo di PHP, che stampa direttamente i dischi in pagina: al caricamento della pagina ci saranno tutti i dischi. -->

<!DOCTYPE html>
<html lang="it" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Database Musica</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.6/handlebars.min.js" integrity="sha512-zT3zHcFYbQwjHdKjCu6OMmETx8fJA9S7E6W7kBeFxultf75OPTYUJigEKX58qgyQMi1m1EgenfjMXlRZG8BXaw==" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="dist/app.css">
    </head>
    <body>
        <header>
            <div class="container">
                <div id="logo">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/f/f2/Logoappliandrospotify.png" alt="Logo Spotify">
                </div>
            </div>
        </header>
        <main>
            <div class="container">
                <div id="dischi">

                </div>
            </div>
        </main>
    </body>

    <script id="disco-template" type="text/x-handlebars-template">
        <div class="disco">
            <img src="{{poster}}" alt="{{title}}, album di {{author}} del {{year}}">
            <span class='titolo'>{{title}}</span>
            <span class='autore'>{{author}}</span>
            <span class='anno'>{{year}}</span>
        </div>
    </script>

    <script type="text/javascript" src="dist/app.js"></script>
</html>
