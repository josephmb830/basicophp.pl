<?php
// Pesos variables atómicos o moleculares de Isótopos de Elementos Comunes en Bases Nitrogenadas:
//Carbono puede ser carbono 12 (12) o 13 (13):
$i_carbono = 12;
//Hidrógeno puede ser Hidrógeno-1(1H)(1.01) y Deuterio (2H o D) (2)
$i_hidrogeno = 1.01;

// echo "suma de pesos de carbono + hidrogeno es: " . $i_carbono + $i_hidrogeno;

//pesos constantes de bases nitrogenadas

define("B_ADENINA", 135.13);
define("B_GUANINA", 151.13);
define("B_CITOSINA", 111.10);
define("B_TIMINA", 126.11);
define("B_URACILO", 112.09);

echo "suma de pesos de bases es: " . B_ADENINA + B_GUANINA + B_CITOSINA + B_TIMINA + B_URACILO . " g/mol";