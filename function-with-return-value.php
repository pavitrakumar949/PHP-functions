<?php
function add($num1,$num2)
{
	$result=$num1+$num2;
	return $result;
}
$add1=add(899,1000);
echo add(899,1000);
$add2=add(200,5000);
echo add(200,5000);
echo $add1 * $add2;
?>
