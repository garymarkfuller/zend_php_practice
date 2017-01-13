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
    
    $scrape = file_get_contents('http://www.canterburycollege.ac.uk/about/corporation/corporate-members/', NULL, NULL, 0, 2000);
    echo strip_tags($scrape);
    echo "<h3>Passing Variables by Reference</h3>";
    $variabletoreference = 3;
    $nonreference = $variabletoreference;
    $reference = &$variabletoreference;
    echo "<br />" . $nonreference;
    echo "<br />" . $reference;
    $variabletoreference = 4;
    echo "<br />" . $nonreference;
    echo "<br />" . $reference;
    echo "<h3>Functions - Passing Variables by Reference</h3>";
    function nonreference($variabletoreference) 
    {
        $variabletoreference ++;
        return $variabletoreference;
    }
    echo "<br />" . nonreference($variabletoreference);
    echo "<br />" . $variabletoreference;
    function reference(&$vartoreference)
    {
        $vartoreference ++;
        return $vartoreference;
    }
    $vartoreference = 0;
    echo "<br />" . $vartoreference;
    echo "<br />" . reference($vartoreference);
    echo "<br />" . $vartoreference . "<br />";
    
    // Using the + operator to add two arrays together. This works with var_dump, 
    // print_r and with assignment to a third array (it may work in other scenarios)
    $arrayone = array(0 => 1, 1 => 2, 2 => 3);
    $arraytwo = array(1 => 3, "2" => 4, 3 => 5);
    echo "<p>";
    var_dump($arrayone + $arraytwo);
    echo "</p><p>";
    print_r($arrayone + $arraytwo);
    $arraythree = $arrayone + $arraytwo;
    echo "</p><p>";
    print_r($arraythree);
    echo "</p>";
    
    echo "<h3>Arrays - Using usort</h3><p>";
    function myCmp ($left, $right)
    {
        echo $left . ", " . $right . "<br />";
        //Sort according to the length of the value.        
        $diff = strlen($left) - strlen($right);
        //If the length is the same, sort normally.
        if (!$diff) {
            return strcmp($left, $right);
        }
        // The echo is not needed. Just for me to understand the process.
        echo $diff . "<br />";
        return $diff;
    }
    echo "</p>";
    $usortarrayone = ['firstone', 'second1', 'third1', 'fourth'];
    echo "<h5>Array</h5>";
    usort($usortarrayone, 'myCmp');
    print_r($usortarrayone);
    $usortarraytwo = ['first1', '2nd', 'third', 'four'];
    echo "<h5>Array</h5>";
    usort($usortarraytwo, 'myCmp');
    print_r($usortarraytwo);
    echo "<h3>Adding to/removing from the end of an array</h3><p>";
    $pushpop = [1,2,3];
    print_r($pushpop);
    echo "<br />";
    array_push($pushpop, 4);
    print_r($pushpop);
    echo "<br />";
    $pop = array_pop($pushpop);
    echo $pop . "<br />";
    print_r($pushpop);
    echo "</p>";
    echo "<h3>Adding to/removing from the start of an array</h3><p>";
    $shiftunshift = [2,3,4];
    print_r($shiftunshift);
    echo "<br />";
    array_unshift($shiftunshift, 1);
    print_r($shiftunshift);
    echo "<br />";
    $unshift = array_shift($shiftunshift);
    echo $unshift . "<br />";
    print_r($shiftunshift);
    echo "</p>";
    ?>
  </body>
</html>
