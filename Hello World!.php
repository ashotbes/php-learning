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

$first_array = array("\n Lox", 18 , "cool", 4 , "oga");

echo count($first_array);

$with_function = array("PHP", "popcorn", 555.55 );

$short_array = ["PHP", "popcorn", 555.55];

$change_me = [3, 6, 9];

// the code that should be changed

$change_me[3] = "Some text";
$change_me[4] = 5;
$change_me[1] = "tadpole";

echo implode(",", $change_me);

$stack = ["\nwild success", "\nfailure", "\nstruggle"];
$new_stack = array_push($stack, "blocker ", "impediment");

$poped = array_pop($stack);
$poped = array_pop($stack);
$poped = array_pop($stack);
$poped = array_pop($stack);

echo implode("\n<", $stack);

$record_holders = [];
// Write your code below:

$ch_record = array_unshift(
    $record_holders,
    "Tim Montgomery ",
    "Maurice Greene ",
    "Donovan Bailey ",
    "Leroy Burrell  ",
    "Carl Lewis     ",
);

$ch_record    = array_unshift($record_holders, "Justin Gatlin", "Asafa Powell");

$ch_record_pr = array_shift($record_holders);
$wrong_js     = array_shift($record_holders);
$add_usain    = array_unshift($record_holders, "\nUsain Bolt");

echo implode(",", $record_holders);
