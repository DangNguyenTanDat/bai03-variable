<?php
    $firstName = 'Dang Nguyen';
    $lastName = 'Tan Dat;';
    $fullName = $firstName . $lastName;
    echo $fullName;

    $a = 20;
    $A = 102;
    echo $a;
    echo '<br>;';
    echo $A;
    
    $str = 'Hello world;';
    echo $str;

    define('PI', 6.14);
    echo PI;
    
    $x = 12.365;
    var_dump($x);

    $cars = array('Yamaha', 'BMW', 'Honda;');
    var_dump($cars);

    

    $d = 5.6;
    $e = (int)$d;
    var_dump($e);

    $f = '20';
    //settype($f, 'integer');
    var_dump($f);

    $g = '34';
    echo gettype($g);

    $c = 102;
    $b = $c . 'Tan Dat;';
    var_dump($b);
?>