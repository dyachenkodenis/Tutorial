<?php

require('../inc/test.php');


// 1
echo "I like " . $coffe[0] . " and " .$coffe[1]. ".";

// 2
$arrlength = count($coffe);
for($x = 0; $x < $arrlength; $x++)
{
	echo $coffe[$x];
	n(); // <br />
}
// 3
foreach($associative_arr as $key => $value)
{
	echo "Key = {$key}, and Value = {$value}";
	n(); // <br />
}

