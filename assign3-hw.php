<?php

for($i=0 ; $i<10 ; $i++){
    for($j=0 ; $j<$i ; $j++){
        echo "*  ";
    }
    echo "<br/>";
}


for($i=0;$i<=5;$i++){
    echo "<br/>";
}

for ($k=0 ;$k<10 ; $k++){
    for($l=0 ; $l<9-$k ; $l++){
        echo "*  ";
    }
    echo "<br/>";
}

for($i=0;$i<=5;$i++){
    echo "<br/>";}


$h = 10;

for($i=1;$i<=$h;$i++){

    for($t = 1;$t <= $h-$i;$t++)
    {
        echo "&nbsp;&nbsp;";
    }

    for($j=1;$j<=$i;$j++)
    {

        echo "*&nbsp;&nbsp;";
    }
echo "<br />";
}

for($i=0;$i<=5;$i++){
    echo "<br/>";}

$a="* ";
for($i=1; $i<=45 ;$i++ ){
    echo $a;
    if($i==15){
        echo "<br/>";
    }
    elseif($i==30){
        echo "<br/>";
    }
}


for($i=0;$i<=5;$i++){
    echo "<br/>";}
    

$n =9;
for ($i =9; $i > 0; $i--) {
    for ($j = $n - $i; $j > 0; $j--)
        echo "&nbsp;&nbsp;";
    for ($j = 2 * $i - 1; $j > 0; $j--)
        echo ("&nbsp;*");
    echo "<br>";
}


?>


