<?php

require_once './data/libros.php';

$ElPrincipito = new Libro(1, 'El Principito', 'Antoine de Saint-Exupéry', 'Fantasía', 1943, false);
$IslaTesoro = new Libro(2, 'Isla Tesoro', 'Robert Louis Stevenson', 'Aventura', 1883, true);
$_1984 = new Libro(3, '1984', 'George Orwell', 'Ciencia Ficción', 1949);
$_100Anios = new Libro(4, 'Cien años de soledad', 'Gabriel García Marquez', 'Realismo mágico', 1967);
$harry_potter = new Libro(5, 'Harry Potter y la piedra filosofal', 'J. K. Rowling', 'Fantasía', 1997);

// echo '<pre>';
// var_dump($ElPrincipito);
// echo '</pre>';

echo$ElPrincipito->getTitulo();
echo '<br>';
echo$ElPrincipito->getAutor();
echo '<br>';
$ElPrincipito->setGenero('historia');

echo $ElPrincipito ->toString();
echo '<br>';
echo "Hace " . $ElPrincipito->getAntiguedad() . " años que se publicó";
echo '<br>';
echo $harry_potter->toString();
echo '<br>';
echo "Hace " . $harry_potter->getAntiguedad() . " años que se publicó";


