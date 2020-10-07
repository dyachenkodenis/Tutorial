<?php 


require_once("OOP.php");
$obj = new \Home\User("Name", "123456", "example@gmail.com", "City");
echo $obj->getInfo();

use newClass\Home as Home;
//use some\namespace\{ClassA,ClassB}
//use function some\namespace\{fn_a, fn_b}
//use const some\namespace\{const, const}