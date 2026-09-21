<?php
        $titulo = "Valencia C.F. contra Barcelona";
        $equipo1 = "Valencia C.F.";
        $equipo2 = "Barcelona";
        $escudoEquipo1 = "assets/valencia.png";
        $escudoEquipo2 = "assets/fcbarcelona.png";
        $resultado1p1 = "0";
        $resultado2p1 = "5";

?>

<html>
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Resultados Partidos </title>
        <link rel="stylesheet" href="estilos.css">
    </head>
    <body>
        <div class="central">
              <div class="carta">
                    <header>
                         <h1> <?= $titulo ?></h1>
                    </header>
                    <div class="contenido">
                        <div class="borde">
                            <div class="equipos">
                                <div class="equipo1p1">
                                     <img src="<?php echo $escudoEquipo1 ?>" alt="">
                                     <p class="equipo"> <?php echo $equipo1 ?></p>
                                     <p class="resultado"> <?php echo $resultado1p1 ?></p>
                                </div>
                                <div class="equipo2p1">
                                     <img src="<?php echo $escudoEquipo2 ?>" alt="">
                                     <p class="equipo"> <?php echo $equipo2 ?></p>
                                     <p class="resultado"> <?php echo $resultado2p1 ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
              </div>
        </div>
    </body>
    </html>
</html>
