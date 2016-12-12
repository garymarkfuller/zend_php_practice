<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <?php
    $array = array("one", "two", "three", "four", "five", "six");
    $rand = array_rand($array, 2);
    foreach ($rand as $value) {
        echo $array[$value] . ". ";
    } 
    $a_array = array(1,2,3,4,5,6,7,8,9);
    $a = array_rand($a_array);
    $b = 5;
    
    switch ($a) {
        case $b > $a: 
            echo "<p>$b is bigger than $a</p>";
            break;
        case $b == $a:
            echo "<p>$b is equal to $a</p>";
            break;
        default:
            echo "<p>$b is smaller than $a</p>";
    }
    $c = 'e'; // Can't use this in a function unless using global $c, $GLOBALS['c'], or passing it as a parameter in the function call ($arg)
    function date_test($arg) {
        echo "<p>" . date($arg) . "</p>";
    }
    date_test($c);
    
    $myvar = "James";
    
    echo '<p>Global: ' . $myvar . '</p>';
    
    function test_scope() {
        global $myvar;
        $myvar = 'Kelly';
        echo '<p>Local: ' . $myvar . '</p>';
    }
    
    test_scope();
    
    echo '<p>Global: ' . $myvar . '</p>';
    
    $scrape = file_get_contents('http://www.canterburycollege.ac.uk/about/corporation/corporate-members/', NULL, NULL, 0, 20000);
    echo strip_tags($scrape);
    
    ?>
  </body>
</html>
