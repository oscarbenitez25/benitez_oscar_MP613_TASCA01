<?php
// taula.php
// Vista en format taula (<table>) que mostra tota la informació de cada llibre.

require 'dades.php';

define('MAX_ESTRELLES', 5);

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

        <table style="margin-top:20px;">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titol</th>
                    <th>Autor</th>
                    <th>Any</th>
                    <th>Gènere</th>
                    <th>Llegit</th>
                    <th>Valoració</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($biblioteca as $llibre): ?>
                    <tr>
                        <td><?php echo $llibre['id']; ?></td>
                        <td><?php echo $llibre['titol']; ?></td>
                        <td><?php echo $llibre['autor']; ?></td>
                        <td><?php echo $llibre['any']; ?></td>
                        <td><span class="tag"><?php echo $llibre['genere']; ?></span></td>
                        <td>
                            <?php if ($llibre['llegit']): ?>
                                <span class="llegit-si">Llegit</span>
                            <?php else: ?>
                                <span class="llegit-no">No llegit</span>
                            <?php endif; ?>
                        </td>
                        <td class="estrelles">
                            <?php echo $llibre['llegit']
                                ? pintaEstrelles($llibre['valoracio'], MAX_ESTRELLES)
                                : '-'; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
