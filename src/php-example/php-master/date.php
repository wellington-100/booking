<?php


echo date('m-l H:i:s').'<br>';
echo time().'<br>';

echo date('m-l H:i:s', strtotime('+1 Week 2 Day')) . '<br>';
echo date('m-l H:i:s', strtotime('last Monday')) . '<br>';

