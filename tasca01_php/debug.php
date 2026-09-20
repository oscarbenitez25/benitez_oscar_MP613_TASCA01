<?php
// debug.php
// Pàgina de depuració a part: demostra l'ús de var_dump() sobre
// l'array $biblioteca i sobre un dels seus elements.

require 'dades.php';
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Depuració</title>
    <link rel="stylesheet" href="estil.css">
</head>
<body>
    <div class="contenidor">
        <h1>Depuració (var_dump)</h1>
        <hr>

        <a class="boto" href="index.php">Índex</a>

        <h2>var_dump() de tot l'array $biblioteca</h2>
        <pre><?php var_dump($biblioteca); ?></pre>

        <h2>var_dump() d'un únic element ($biblioteca[0])</h2>
        <pre><?php var_dump($biblioteca[0]); ?></pre>
    </div>
</body>
</html>
