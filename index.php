<?php
include "Complex.php";

if(!function_exists("debugShow")) {
    function debugShow($msg) {
        echo '<pre>';
        print_r($msg);
        echo '</pre>';
    }
}

$complex = new Complex("1+1i","2+1i");
$complex2 = new Complex("21+1i","2+7i");

debugShow("value 1: 1+1i,2+1i");
debugShow("value 2: 21+1i,2+7i");

debugShow("multiplication");
debugShow($complex->multiplication());
debugShow($complex2->multiplication());

debugShow("divistion");
debugShow($complex->division());
debugShow($complex2->division());

debugShow("addition");
debugShow($complex->addition());
debugShow($complex2->addition());

debugShow("sub");
debugShow($complex->subtraction());
debugShow($complex2->subtraction());


?>
