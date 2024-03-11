<?php
//------------------methods--------------------------
$x= 10;
$y= 20;

echo $x + $y . '<br>';
echo $x - $y . '<br>';
echo $x * $y . '<br>';
echo $x / $y . '<br>';
echo $y % $x . '<br>';

$x += 20;
echo $x.'<br>';

echo M_PI .'<br>';
echo M_E .'<br>';
echo abs(-22) . '<br>';
echo ceil(3.1) . '<br>';
echo floor(3.9) . '<br>';
echo round(3.454444, 2) . '<br>';
echo mt_rand(1, 20) .'<br>';
echo min(3, 3, 2, 4, 6, 9, 11) . '<br>';
echo max(3, 3, 2, 4, 6, 9, 1000) . '<br>';

$str = "Hello!";
echo "VAR: $str" . '<br>';
echo "<input type='text'>" . '<br>';
$length = strlen($str) .'<br>';
echo $length .'<br>';
echo trim(" some ").'<br>';
echo strtoupper(" some ") . '<br>';
echo strtolower(" SOME ") . '<br>';
echo trim(strtoupper(" some ")) . '<br>';       
echo md5('some') . '<br>';                      // hashing



