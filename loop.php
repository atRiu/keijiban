<?php

require_once 'readfile3.php';

$file = @file('1280619065.dat');

for($i =0; $i < 100; $i++){
    echo "<br>";

    $da = data_from_line($file[$i],true);
    echo $da['name'];

/*
    $data = file[0];
    for($data=0; $data<100; $data++){
        echo"<br>";

    }
*/
}




?>