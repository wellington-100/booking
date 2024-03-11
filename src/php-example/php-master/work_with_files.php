<?php

$file = fopen("text.txt","a");  // w - write, r - read, wr - write&read, a - append
fwrite($file,"\nExample text\nHello!");
fclose($file);      // its required moment!!!

$filename = "text.txt";
$file = fopen($filename,"r");
$content = fread($file, filesize($filename));
fclose($file);
// print($content);
print(file_exists($filename));
// rename("a1.txt", "a.txt");       // rename file
// unlink("a.txt")                  // delete file


// file_put_contents("a.txt", "example\nHello!!!");
// print(file_get_contents("a.txt"));
print(fileperms(__FILE__));         //file permisions
chmod(__FILE__, 0777);              //change permisions -->