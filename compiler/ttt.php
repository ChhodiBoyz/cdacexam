<?php
$file = 'test.txt';
$searchfor = 'class';
header('Content-Type: text/plain');
$contents = file_get_contents($file);
$pattern = preg_quote($searchfor, '/');
$pattern = "/^.*$pattern.*\$/m";
if(preg_match_all($pattern, $contents, $matches)){
   $test = $matches[0];
   $name = explode(" ", $test[0]);
   echo $name[2];
}
else{
   echo "A Java program should have a class name";
}