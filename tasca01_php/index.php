<?php
// index.php
// Pàgina principal: carrega les dades una única vegada, fa els càlculs
// demanats (guardats en variables, no "al vol" dins l'HTML) i enllaça
// a les dues vistes (llista i taula).

require 'dades.php';

// Almenys una constant per a un valor fix del programa
define('NOM_BIBLIOTECA', 'La Biblioteca de DAW');
define('MAX_ESTRELLES', 5);

// Variables pròpies per als càlculs (no comptats dins l'HTML)
$llegits = 0;
$noLlegits = 0;
$sumaValoracionsLlegits = 0;

foreach ($biblioteca as $llibre) {
    if ($llibre['llegit']) {
        $llegits++;
        $sumaValoracionsLlegits += $llibre['valoracio'];
    } else {
        $noLlegits++;
    }
}

// Valoració mitjana dels llibres llegits, arrodonida a 1 decimal
$valoracioMitjana = ($llegits > 0)
    ? round($sumaValoracionsLlegits / $llegits, 1)
    : 0;
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="estil.css">
</head>
<body>
    <div class="contenidor">
        <h1>Tasca 1 B1 613</h1>
        <hr>

        <h2><?php echo NOM_BIBLIOTECA; ?></h2>

        <p class="stats">
            Llibres llegits: <b><?php echo $llegits; ?></b> |
            No llegits: <b><?php echo $noLlegits; ?></b> |
            Valoració mitjana: <b><?php echo $valoracioMitjana; ?></b> / <?php echo MAX_ESTRELLES; ?>
        </p>

        <ul class="botons">
            <li><a class="boto" href="llista.php">Llista de llibres</a></li>
            <li><a class="boto" href="taula.php">Taula de llibres</a></li>
        </ul>

        <p style="font-size:13px;">
            <a href="debug.php">Depuració (var_dump)</a>
        </p>
    </div>
</body>
</html>
