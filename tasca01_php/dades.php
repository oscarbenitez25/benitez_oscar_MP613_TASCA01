<?php
// dades.php
// Aquest fitxer conté la definició única de l'array $biblioteca.
// Es defineix aquí una sola vegada i s'inclou des dels altres fitxers
// mitjançant require, tal com demana l'enunciat (no es redefineix mai).

$biblioteca = [
    [
        'id' => 1,
        'titol' => 'El nom del vent',
        'autor' => 'Patrick Rothfuss',
        'any' => 2007,
        'genere' => 'Fantasia',
        'llegit' => true,
        'valoracio' => 5
    ],
    [
        'id' => 2,
        'titol' => '1984',
        'autor' => 'George Orwell',
        'any' => 1949,
        'genere' => 'Ciència-ficció',
        'llegit' => true,
        'valoracio' => 4
    ],
    [
        'id' => 3,
        'titol' => 'Cien años de soledad',
        'autor' => 'Gabriel García Márquez',
        'any' => 1967,
        'genere' => 'Realisme màgic',
        'llegit' => false,
        'valoracio' => 0
    ],
    [
        'id' => 4,
        'titol' => 'El codi Da Vinci',
        'autor' => 'Dan Brown',
        'any' => 2003,
        'genere' => 'Misteri',
        'llegit' => true,
        'valoracio' => 3
    ],
    [
        'id' => 5,
        'titol' => 'La plaça del Diamant',
        'autor' => 'Mercè Rodoreda',
        'any' => 1962,
        'genere' => 'Drama',
        'llegit' => false,
        'valoracio' => 0
    ]
];

// Exemple d'ús de var_dump() per demostrar-ne la comprensió (comentat perquè
// no es mostri sempre; es pot descomentar per depurar, o veure'l executat a
// la pàgina debug.php inclosa a part).
// var_dump($biblioteca[0]);
