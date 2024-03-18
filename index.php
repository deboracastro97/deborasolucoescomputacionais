<?php
$x =5;
$y = 5.0;
print("A soma é: ");
echo( $x + $y );

if ($x == $y ){
echo("<br>The value of all variaties are equal");
}else{
echo("<br>The values are diferent");
}

if( $x === $y ){
echo("<br>They are the same");
}
else { echo("<br>The variable are NOT the same");
}


switch($x ){
    case $y:
        echo("<br> $x is equal $y");
        break;
        case 1:
        echo("<br> value is 1");
        break;
        default:
        echo("<br>value default");
} 

?>

<hr>

<?php

for($i = 1; $i <= 11; $i++){
    echo("$i . <br>");
}
echo("<hr>");
    for($i = 1; $i < 24; $i+=2){
        echo("$i . <br>");}

$soma = 0;
for( $i = 1; $i <= 100 ; $i++){
$soma += $i;
}

echo("<hr> the result is:$soma");
echo("<hr>");

$soma = 0;
for ( $i = 1; $i <= 100; $i++){
if($i % 2 == 0){
    $soma += $i;}};
    echo("<br> adding numbers, sise 1 at 100 and just stop is: $soma");
;

echo("<hr>");
$fatorial = 1;
for( $i = 2; $i <= 5; $i++){
    $fatorial = $fatorial * $i;
} ;

echo("<hr> the final countdown is:$fatorial");


?>
