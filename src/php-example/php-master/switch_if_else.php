<?php
// -----------------swich---------------------------
$x = 6;
switch($x){
    case 5: echo "Var: 5"; break;
    case 7: echo "Var: 7"; break;
    case 8: echo "Var: 8"; break;
    case 9: echo "Var: 9"; break;
    case 6: echo "Var: 6"; break;
    default: echo "Default work";

}


// --------------------operators-if/else------------------------
$a = 51;
$str = "Hello!";
$isWeatherGood = true;

if($str == "Hello!" || !$isWeatherGood){        // && != >= =< || 
    echo 'YES!!';
} else if($str == ''){
    echo '--';
} else {
    echo 'NO!!';
};