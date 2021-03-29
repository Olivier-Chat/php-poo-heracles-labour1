<?php
require_once 'src/Fighter.php';
$heracles = new Fighter('🧔 Hercules',20,6);
$nemeeLion = new Fighter('🦁 Lion de Némée',11,13);
echo $heracles->getName()." Vie: ".$heracles->getLife().PHP_EOL;
echo $nemeeLion->getName()." Vie: ".$nemeeLion->getLife().PHP_EOL;
$count = 0;
while($nemeeLion->getLife()>0 && $heracles->getLife() >0){
    $count++;
    echo 'Round '.$count.": ".PHP_EOL;
    $heracles->fight($nemeeLion);
    echo $heracles->getName().' attaque '.$nemeeLion->getName().' qui lui reste plus que '.$nemeeLion->getLife()." pts de vie".PHP_EOL;
    $nemeeLion->fight($heracles);
    echo $nemeeLion->getName().' attaque '.$heracles->getName().' qui lui reste plus que '.$heracles->getLife()." pts de vie".PHP_EOL;
}
$loser = ($heracles->getLife() <=0)? $heracles : $nemeeLion;
$winner = ($heracles->getLife() <=0)? $nemeeLion : $heracles;
echo $loser->getName().' is Dead';
echo $winner->getName().' wins, il lui reste: '.$winner->getLife()." pts de vie".PHP_EOL;
