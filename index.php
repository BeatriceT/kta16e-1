<meta charset = "utf-8">

<?php
require 'components.php';
require 'function.php';
$name = "Siret";

//üherealine kommentaar

/*
mitmerealine kommentaar
*/

// tagasi algusesse




home();
menu($menu_begin, $menu_arr, $menu_end);
// näitame praegust aega ja anname soovitusi


aeg();



// näiteid teksti kuvamise kohta
echo "$name esimene PHP´s kirjutatud lause!<br>";
echo '<b>$name esimene PHPs kirjutatud lause!</b><br>';
echo "Nüüd vaatame täpitähti<br>";

GetVisitorIp();

?>