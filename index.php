<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mapa Colorido</title>
    <link rel="stylesheet" href="./css/general.css">
    <link rel="stylesheet" href="./css/map.css">
    <link rel="stylesheet" href="./css/mapDetails.css">
    <link rel="stylesheet" href="./css/legenda.css">
</head>
<body >

    <section map-container style="max-height: 100vh;">
        <!-- <iframe title="mapa" src="mapa.php" width="100%" seamless="seamless" loading="eager"></iframe> -->

        <section details>
            <a back href="#">✖</a>

            <section>
                <div class="text-info">
                    <div class="title-description">
                        <h2>Almenara</h2>
                        <p>Este polo atende 96 Municípios.</p>
                    </div>
                    
                    <div class="cursos">
                        <h3>Cursos: </h3>
                        <ul>
                            <li>Administração Pública</li>
                            <li>Licenciatura em Física</li>
                            <li>Licenciatura em Matemática</li>
                            <li>Licenciatura em Química</li>
                            <li>Pedagogia</li>
                        </ul>
                    </div>
                </div>
                <div class="images">
                    <img src="http://www.ead.ufvjm.edu.br/wp-content/uploads/2016/01/almenara-2-300x225.jpg" alt="">
                    <img src="http://www.ead.ufvjm.edu.br/wp-content/uploads/2016/01/almenara-2-300x225.jpg" alt="">
                </div>
            </section>
        </section>


        <figure class="map">
            <?php include("mapa.svg"); ?>
        </figure>

        <div info class="info">
            <h1>Município</h1>
            <p>Lorem ipsum</p>
        </div>
        <span legenda></span>
    </section>

    <script src="./js/mapa.js" type="module"></script>
    <script src="./js/mapDetails.js" type="module"></script>
    <script src="./js/legenda.js" type="module"></script>
</body>
</html>