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




function click(){
    static $count; // static => save your previous value
    $count++;
    echo $count."<br>";
}
click();
click();
click();

function info(){
    global $x;
    echo $x."<br>";
}

$x = 10;
info();
echo $x;


function summary($arr){
    $summa = 0;
    foreach($arr as $value){
        $summa += $value;
    }
    return $summa;
}
$list = [5, 6, 7];
echo summary($list)."<br>";
echo summary([5, 3, 6])."<br>";



// function info($word){
//     echo "$word<br>";
// }

function math($x, $y){
    return $x + $y;
}
$res1 = math(3, 6);
$res2 = math(2, 4);

// info($res1);
// info($res2);
