<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mapa</title>
    <link rel="stylesheet" href="style.css">

    <style>
        *:not(div){
            transition: all .1s ease-in-out;
        }
    </style>

</head>
<body>

    <?php include("mapa.svg"); ?>

    <div info class="info">
        <h1>Município</h1>
        <p>Lorem ipsum</p>
    </div>
    
    <script src="mapa.js" type="module"></script>
</body>
</html>