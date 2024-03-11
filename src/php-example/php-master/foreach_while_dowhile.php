<?php
$list = ['age' => 50, 'name' => 'Alex', 'hobby' => 'football'];
$array = [3, 5, 6, 7, 8];
foreach($array as $value){
    echo "Value: $value<br>";
}

foreach($list as $item => $value){
    echo "Key: $item / Value: $value<br>";
}


$list = [5, 6, 3, 6, 'some', 45.6];
for($i = 0; $i < count($list); $i++)
    echo "Element $i: $list[$i]<br>";

// operators in loops / break - continue
for($el = 100; $el > 10; $el /=2 ){
    if($el < 15){
        break;
    }
    if($el % 2 == 0){
        continue;
    }
    echo $el . '<br>';
}

// do while
$n = 100;
do{
    echo $n;
} while($n<10);


// while
$i = 1;
while($i<=10){
    echo $i . '<br>';
    $i++;
}

// for
for($i=100; $i>=20; $i-=5){
    echo $i.'<br>';
};