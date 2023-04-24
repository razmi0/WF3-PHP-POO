

<?php

//HEAD HTML
include "html/head.html.php";





// BLOC INIT
require_once "classes/Character.php";
require_once "utils/stats.php";

$Batman = new Character("Batman", 100, Character::MEDIUM);
$Superman = new Character("Superman", 100, Character::NOVICE);


include "html/body.html.php";

// BLOC INSTRUCTIONS


// echo "
// <br>1. Batman salue Superman
// <br>";
// echo $Batman->sayHello($Superman);
// echo getHeroStats($Batman, $Superman);




echo "
<br>2. Superman salue Batman
<br>";
echo $Superman->sayHello($Batman);
echo getHeroStats($Batman, $Superman);




echo "<br>3. Batman attaque Superman 
<br>";
echo $Batman->doAttack($Superman);
echo getHeroStats($Batman, $Superman);





echo "<br>4. Superman riposte d'une attaque suivi d'une super attaque
<br>";
echo $Superman->doAttack($Batman);
echo "<br>";
echo $Superman->doSuperAttack($Batman);
echo getHeroStats($Batman, $Superman);





echo "<br>5. Batman , furax , fait une super attaque <br>";
echo $Batman->doSuperAttack($Superman);
echo getHeroStats($Batman, $Superman);




echo "<br>6. Superman se soigne (il pleure) <br>";
echo $Superman->doHeal();
echo getHeroStats($Batman, $Superman);




echo "<br>7. Batman tente une attaque secrète (B70 - S50)";
$Batman->doSneakyAttack($Superman);
echo getHeroStats($Batman, $Superman);




echo "<br>8. Superman encore affaiblie lance une double attaque (B50 - S50) <br>";
echo $Superman->doAttack($Batman);
echo "<br>";
echo $Superman->doAttack($Batman);
echo getHeroStats($Batman, $Superman);






echo "<br>9. Batman répond d'une attaque simple suivi d'une attaque secrète (et paf un coup de kryptonite) (B50 - S30 / S0) <br>";
$Batman->doAttack($Superman);
echo "<br";
$Batman->doSneakyAttack($Superman);
echo getHeroStats($Batman, $Superman);




echo "<br>10. Superman est au tapie et Batman gagne un point d'expérience <br>";
$Batman->setExperience(3);
echo getHeroStats($Batman, $Superman);

