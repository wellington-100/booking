
<?php
$title = "HOME";
    require_once "blocks/header.php" // include => whithout same file  // include_once, require, require_once
?>
    <h1>HOME</h1>
<?php
    
    $list = [6, 2, 5, 9, 11, 6];

    unset($list[1]);                                // delete item from array by index !!! delete also the index
    $arr = array_slice($list, 0, count($list));     // delete some segment !!! return the segment
    // $arr = array_slice($list, 2, 2);                // delete some segment !!! return the segment
    var_dump($arr);                                 // var_dump() analogic print_r()
    echo '<br>';

    $list = array_values($list);                    // update the array -- of deleted indexes
    sort($list);                                    // sort in ascending order
    rsort($list);                                   // sort in descending order
    // shuffle($list);                              // shuffle the items / chaos

    // if(in_array(12, $list) == '')                // in_array >> boolean
    //    echo 'Not found <br>';
    // else
    //    echo "Found <br>";

    print_r( $list );                               // print array
    echo '<br>';

    $arr1 = [1, 2, 3];
    $arr2 = [4, 5, 6];
    $arr3 = array_merge($arr1, $arr2);              // concatinate arrays
    var_dump($arr3);
    echo '<br>';



    $x = floatval('10');                            // type of...
    echo gettype($x);
    echo '<br>'.is_numeric($x);
    echo '<br>' . is_integer($x);
    echo '<br>' . is_double($x);


    $str = "Example";
    echo "<br>".strpos($str, "am")."<br>";                 // find a simbol/s in a str

    $words = "john,bob,alex";
    $arr_words = explode(",", $words);
    "<br>" .print_r($arr_words);
    echo "<br>".implode(" | ", $arr_words)."<br>";







?>

<!-- //-----------------date---------------------------

// echo date('m-l H:i:s').'<br>';
// echo time().'<br>';

// echo date('m-l H:i:s', strtotime('+1 Week 2 Day')) . '<br>';
// echo date('m-l H:i:s', strtotime('last Monday')) . '<br>';

// require_once "blocks/footer.php" -->

<!--//-----------------functions---------------------------
// function click(){
//     static $count; // static => save your previous value
//     $count++;
//     echo $count."<br>";
// }
// click();
// click();
// click();

// function info(){
//     global $x;
//     echo $x."<br>";
// }

// $x = 10;
// info();
// echo $x;


// function summary($arr){
//     $summa = 0;
//     foreach($arr as $value){
//         $summa += $value;
//     }
//     return $summa;
// }
// $list = [5, 6, 7];
// echo summary($list)."<br>";
// echo summary([5, 3, 6])."<br>";



// function info($word){
//     echo "$word<br>";
// }

// function math($x, $y){
//     return $x + $y;
// }
// $res1 = math(3, 6);
// $res2 = math(2, 4);

// info($res1);
// info($res2);


//-----------------foreach---------------------------

// $list = ['age' => 50, 'name' => 'Alex', 'hobby' => 'football'];
// $array = [3, 5, 6, 7, 8];
// foreach($array as $value){
//     echo "Value: $value<br>";
// }

// foreach($list as $item => $value){
//     echo "Key: $item / Value: $value<br>";
// }


// $list = [5, 6, 3, 6, 'some', 45.6];
// for($i = 0; $i < count($list); $i++)
//     echo "Element $i: $list[$i]<br>";

// operators in loops / break - continue
// for($el = 100; $el > 10; $el /=2 ){
//     if($el < 15){
//         break;
//     }
//     if($el % 2 == 0){
//         continue;
//     }
//     echo $el . '<br>';
// }



// do while
// $i = 100;
// do{
//     echo $i;
// } while($i<10);


// while
// $i = 1;
// while($i<=10){
//     echo $i . '<br>';
//     $i++;
// }

// for
// for($i=100; $i>=20; $i-=5){
//     echo $i.'<br>';
// };


//-----------------array---------------------------

// // indexed array
// $nums = array(4, 5, 7, 2, -23, 6, 0);       
// $nums[0] = 1;
// echo $nums[0];

// $arr = [66, 44, 54, 78.6, '8', false];      
// echo $arr[5];


// // associative array
// $list = ['age'=>50, 'name'=>'Alex', 'hobby'=>'football'];   
// echo '<br>'.$list['name'];


// // multidimensional array
// $matrix = [
//     [4, 5, true],
//     [3, 2, 'max'],
//     ['age' => 50, 'name' => 'Alex', 'hobby' => 'football'],
// ];
// $matrix[2]['hobby'] = 'chess';
// echo '<br>' .$matrix[2]['hobby'];



//-----------------swich---------------------------
// $x = 6;
// switch($x){
//     case 5: echo "Var: 5"; break;
//     case 7: echo "Var: 7"; break;
//     case 8: echo "Var: 8"; break;
//     case 9: echo "Var: 9"; break;
//     case 6: echo "Var: 6"; break;
//     default: echo "Default work";

// }


//--------------------operators-if/else------------------------
// $a = 51;
// $str = "Hello!";
// $isWeatherGood = true;

// if($str == "Hello!" || !$isWeatherGood){        // && != >= =< || 
//     echo 'YES!!';
// } else if($str == ''){
//     echo '--';
// } else {
//     echo 'NO!!';
// };


//-----------------methods---------------------------

// $str = "Hello!";
// echo "VAR: $str" . '<br>';
// echo "<input type='text'>" . '<br>';
// $length = strlen($str) .'<br>';
// echo $length .'<br>';
// echo trim(" some ").'<br>';
// echo strtoupper(" some ") . '<br>';
// echo strtolower(" SOME ") . '<br>';
// echo trim(strtoupper(" some ")) . '<br>';       
// echo md5('some') . '<br>';                      // hashing




//------------------methods--------------------------
// $x= 10;
// $y= 20;

// echo $x + $y . '<br>';
// echo $x - $y . '<br>';
// echo $x * $y . '<br>';
// echo $x / $y . '<br>';
// echo $y % $x . '<br>';

// $x += 20;
// echo $x.'<br>';

// echo M_PI .'<br>';
// echo M_E .'<br>';
// echo abs(-22) . '<br>';
// echo ceil(3.1) . '<br>';
// echo floor(3.9) . '<br>';
// echo round(3.454444, 2) . '<br>';
// echo mt_rand(1, 20) .'<br>';
// echo min(3, 3, 2, 4, 6, 9, 11) . '<br>';
// echo max(3, 3, 2, 4, 6, 9, 1000) . '<br>';



//---------------vatiables-----------------------------
// echo "<b>Hello World!</b>";
// echo "</br>Hello";
// echo "\"";

// define( 'MY_AGE', 24);
// echo MY_AGE .'<br>';

// $num = -0.55;
// $number = 5;
// $str = "Variabila: ";
// $bool = false;

// $a = 0.55;
// $b = '0.55';

// // echo $str.$number.$num;
// echo $a + floatval($b);   //intval