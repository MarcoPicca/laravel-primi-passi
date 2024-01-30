<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link rel="stylesheet" href="/../css/app.css">
       
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.min.js">
    </head>
    <body>
        <header class="w-100">
            <section class="d-flex justify-content-center align-item-center">
                <h1>La Pagina con i Fenicotteri!</h1>
            </section>
        </header>
        <main>
            <section>
                <p>
                La Pagina con le <a href="./anatre.blade.php">Anatre!</a>
                </p>
                <img src="https://makexp.it//xstore_temp/r,ra,2021,cervia,delta_po_gal_delta_2000_,x,696,archivio_atlantide.jpg" alt="">
            </section>
        </main>
    </body>
</html>
