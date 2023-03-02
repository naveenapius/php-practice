<?php
$bikes=array("R15", "Ninja 650", "S1000RR", "R1M", "MT03", "RC390", "GT650");
foreach($bikes as $i){
    echo $i."<br>";
}
echo "My fav: ".$bikes[1]."<br>";
echo $bikes[2]." vs ".$bikes[3];
?>