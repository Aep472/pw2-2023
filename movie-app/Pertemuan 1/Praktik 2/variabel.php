<?php
/*
 Variabel System
 Variabel built in PHP
*/
 echo $_SERVER["DOCUMENT_ROOT"];


/*
Variabel User
Variabel Yang dibuat oleh User
*/
echo '<br><br>';
$name = 'Aep';
$age = 19;
$weight = 50.5;

echo 'Nama Saya Adalah '. $name;


/*
   Variabel Konstan
   Variabel yang tidak bisa diubah nilainya
   1.Menggunakan define() |define ('Fruit', 'Apel');
   2.Menggunakan const  | const fruit ='Apel';

*/
echo'<br><br>';
define("SITE_NAME", "Elena");
const BASE_URL ="elena.nurulfikri.ac.id";

echo SITE_NAME;
echo'<br>';
echo BASE_URL;


?>