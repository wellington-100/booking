<?php


// indexed array
$nums = array(4, 5, 7, 2, -23, 6, 0);       
$nums[0] = 1;
echo $nums[0];

$arr = [66, 44, 54, 78.6, '8', false];      
echo $arr[5];


// associative array
$list = ['age'=>50, 'name'=>'Alex', 'hobby'=>'football'];   
echo '<br>'.$list['name'];


// multidimensional array
$matrix = [
    [4, 5, true],
    [3, 2, 'max'],
    ['age' => 50, 'name' => 'Alex', 'hobby' => 'football'],
];
$matrix[2]['hobby'] = 'chess';
echo '<br>' .$matrix[2]['hobby'];
