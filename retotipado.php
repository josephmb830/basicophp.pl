<?php

//Contexto
/*
El color de ojos es una característica poligénica determinada por varios genes, entre ellos el gen HERC2,
que regula el gen OCA2. Una variante específica del gen HERC2, en el intrón 86 y conocida como rs12913832,
su secuencia es: '5-CTTCCCAGGAGTCACCCACCCGACCTGACTGCCAGTCCAGAGTCCAGGTCCAGGTTCTCAGGACGGTGGAGGAGCTGTTGCCCGTTGCGGCTC-3'
se asocia con los ojos azules. Las personas con ojos azules generalmente tienen una "T" en esta posición.
La secuencia de ADN se lee desde el extremo 5' al 3', lo que es crucial para su función biológica.
*/

//Fácil
$ojos_azules = "HERC2"; //String
$rs12913832 = "5-CTTCCCAGGAGTCACCCACCCGACCTGACTGCCAGTCCAGAGTCCAGGTCCAGGTTCTCAGGACGGTGGAGGAGCTGTTGCCCGTTGCGGCTC-3"; //String
$intrón = 86; // int
$T = true; // bool

//Medio
$promedio = (8 + 9.5 + 9 + 10 + 8) /5; //float
$nombre_completo = $nombre." ".$apellido; //string
$presento_examen = (bool)1; //bool(true)

//Avanzado
$numero_preguntas = 5+ "5"; //int(10)
$numero_respuestas = "5" + 5; //int(10)
$promedio_maximo = $numero_respuestas / 1.0; //float(10), solo porque se divide en 1.0, si fuera 1, sería int
$michis = 3 + "5 michis"; //int(8) (con Warning)


//testear resultados:
var_dump($promedio_maximo);


/*

<?php
//Fácil
$nombre = "Carlos"; //String
$apellido = "Gómez"; //String
$edad = 18; // int
$aprobado = true; // bool

//Medio
$promedio = (8 + 9.5 + 9 + 10 + 8) /5; //float
$nombre_completo = $nombre." ".$apellido; //string
$presento_examen = (bool)1; //bool(true)

//Avanzado
$numero_preguntas = 5+ "5"; //int(10)
$numero_respuestas = "5" + 5; //int(10)
$promedio_maximo = $numero_respuestas / 1.0; //float(10), solo porque se divide en 1.0, si fuera 1, sería int
$michis = 3 + "5 michis"; //int(8) (con Warning)


//testear resultados:
var_dump($promedio_maximo);

*/