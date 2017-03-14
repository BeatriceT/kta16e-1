<meta charset = "utf-8">

<?php

require 'function.php';
home();

$month = "veebruar";

$test = array('kolmapäev' , 3.14, $month, 8, "Klass nr A210" );

//massiivi sisu trükk
print_r($test);
echo "<br>";
//muutuja sisu näitamine
var_dump($test);
echo "<br>";
//massiivi üksiku elemendi näitamine
echo $test[0];
echo "<br>";
//massiivi liikme lisamine
$test[] = "uus massiivi liige";
    print_r($test);
    echo "<br>";

// järgnev on sidusmassiiv
$test_a = array('esimene' => 'Tauno' , 'teine' => 'Ragnar' , 'kolmas' => 'Kevin');

print_r($test_a);

//for on määratletud tsükkel, while puhul me anname tingimuse, ootame et midagi juhtuks
for ($i=0; $i < count($test); $i++ ){
    echo "<li>".$test[$i]."</li><br>";
}

//sidusmassiivi (assciative array) väljatrükk
foreach ($test_a as $jrk => $name){
    echo "<li>" .$name." on järjekorras ".$jrk."</li>"; // punktiga liidame
}
//kahemõõtmeline massiiv
$esta = "Eesti keel";
$mata = "Matemaatika";
$fyss = "Füüsika";


$hinded = array("Peeter" => array($esta => 4, $mata => 4, $fyss => 3), "Mari" => array($esta => 5, $mata => 3, $fyss => 4), "Jüri" => array($esta => 3, $mata => 2, $fyss => 2), "Pille" => array($esta => 5, $mata => 5, $fyss => 4));

echo $hinded ['Peeter'][$esta]."<br>";

// massiivi (KÕIGE KÕRGEMA) võtmed
print_r(array_keys($hinded));
echo "<br>";
// massiivi (KÕIGE KÕRGEMA) väärtused
print_r(array_values($hinded));
//kahemõõtmelise massiivi kultuurne väljatrükk
$hinded_id = array_keys($hinded);
echo "<br>";

for ($i=0; $i < count($hinded_id); $i++){
    echo $hinded_id[$i].":<br>";
    foreach($hinded[$hinded_id[$i]] as $aine => $hinne ){
        echo $aine." : ".$hinne. "<br>";
    }
}


?>