<?php

include "classes/Personnage.php";

// Creation d'une instance de la classe personnage
$perso = new personnage();

echo $perso->getName();

echo"<br><br>";



$perso2 = new personnage();
$perso2->setName("Pierrette");
echo $perso2->getName();



$perso->walkRight();
$perso->walkLeft();
$perso->walkTop();
$perso->walkBottom();
