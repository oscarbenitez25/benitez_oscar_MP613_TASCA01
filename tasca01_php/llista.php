<?php
// llista.php
// Vista en format llista (<ul>) que mostra tota la informació de cada llibre.

require 'dades.php';

define('MAX_ESTRELLES', 5);

// Funció auxiliar per pintar les estrelles de valoració (plenes/buides)
function pintaEstrelles($valoracio, $max)
{
    $plenes = str_repeat('★', $valoracio);
    $buides = str_repeat('☆', $max - $valoracio);
    return $plenes . $buides;
}
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

        <h2>La Biblioteca de DAW</h2>

        <a class="boto" href="index.php">Índex</a>

        <ul class="graella-llibres" style="margin-top:20px;">
            <?php foreach ($biblioteca as $llibre): ?>
                <li class="targeta-llibre">
                    <h3><?php echo $llibre['titol']; ?></h3>
                    <p><b>Autor:</b> <?php echo $llibre['autor']; ?></p>
                    <p><b>Any:</b> <?php echo $llibre['any']; ?></p>
                    <p><span class="tag"><?php echo $llibre['genere']; ?></span></p>

                    <?php if ($llibre['llegit']): ?>
                        <p class="llegit-si">Llegit</p>
                        <p class="estrelles">
                            Valoració: <?php echo pintaEstrelles($llibre['valoracio'], MAX_ESTRELLES); ?>
                        </p>
                    <?php else: ?>
                        <p class="llegit-no">No llegit</p>
                    <?php endif; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</body>
</html>
