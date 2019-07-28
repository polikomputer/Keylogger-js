<?php

$keyvalue = $_POST['key'];
$file = 'data.txt';
if(!file_exists($file))
{
    $fh = fopen($file, 'w');
}

$string = $keyvalue."|";
 
file_put_contents($file, $string, FILE_APPEND);

?>