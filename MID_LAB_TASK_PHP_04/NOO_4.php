<?php
$a = 5;
$b = 7;
$c = 2;
if($a>$b && $a>$c){
	echo "The largest number is $a";
}
else if ($b>$a && $b>$c){
	echo "The largest number is $b";
}
else
{
	echo "The largest number is $c";
}
?>