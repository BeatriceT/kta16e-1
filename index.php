
<meta charset = "utf-8">


<script type = "text/javascript" src = "script.js"></script>
    
    
<?php

echo "<div></div>";
require 'function.php';
require 'components.php';
$name = "Siret";

aeg();

home();
menu($menu_begin,$menu_arr,$menu_end);

echo "$name esimene PHP´s kirjutatud lause!<br>";
echo '<b>$name esimene PHPs kirjutatud lause!</b><br>';
echo "Nüüd vaatame täpitähti<br>";

GetVisitorIp();
counter();

?>