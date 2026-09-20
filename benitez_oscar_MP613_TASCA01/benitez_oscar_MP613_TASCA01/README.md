# MP613 B1 - Tasca 1: Biblioteca personal en PHP

Tasca 1 del mòdul MP613 (Programació web en entorn servidor), 2n DAW.
Autor: Óscar Benítez Uroz

## Descripció

Petita aplicació web en PHP que mostra una biblioteca personal de llibres
en dues vistes (llista i taula) a partir d'un array associatiu.

## Entorn de desenvolupament

- XAMPP 8.2.12 per a Windows
- Apache 2.4.58
- PHP 8.2.12
- Base de dades: MariaDB 10.4.32 (inclosa amb XAMPP)

## Fitxers

| Fitxer | Contingut |
|---|---|
| `dades.php` | Definició única de l'array `$biblioteca`; la resta de fitxers l'inclouen amb `require` |
| `index.php` | Pàgina principal: nombre de llibres llegits i no llegits, valoració mitjana i enllaços a les vistes |
| `llista.php` | Vista en format llista (`<ul>`) |
| `taula.php` | Vista en format taula (`<table>`) |
| `debug.php` | Pàgina de depuració amb exemples de `var_dump()` |
| `estil.css` | Estils compartits per totes les pàgines |

## Funcionalitats

- Dues vistes de la mateixa informació, entre les quals es pot alternar.
- Recompte de llibres llegits i no llegits, guardat en variables pròpies.
- Valoració mitjana dels llibres llegits, arrodonida a 1 decimal amb `round()`.
- Constants (`define()`) per a valors fixos, com el nom de la biblioteca i el
  màxim d'estrelles.
- `var_dump()` de l'array i d'un element a `debug.php`.

## Com executar-ho

1. Engega Apache des del Panell de Control de XAMPP.
2. Copia la carpeta del projecte dins de `C:\xampp\htdocs\`.
3. Obre `http://localhost/benitez_oscar_MP613_TASCA01/index.php` al navegador.
