<?php

function fui()
{
    $a = 5;
    $b = 4;
    $c = $a + $b;
    return $c;
}

//echo fui();
function FunctionName()
{
    $a = 9;
    $b = $a + fui();
    return $b;
}

echo FunctionName();

$first_array = array("\nLox", 18 , "cool", 4 , "oga");

echo count($first_array);

$with_function = array("PHP", "popcorn", 555.55 );

$short_array = ["PHP", "popcorn", 555.55];

$change_me = [3, 6, 9];

// the code that should be changed

$change_me[3] = "Some text";
$change_me[4] = 5;
$change_me[1] = "tadpole";

echo implode(",", $change_me);
