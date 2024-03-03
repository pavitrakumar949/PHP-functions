
<?php
$name='Mark';
echo $name;
function showname()
{
	global $name;		//by adding this, the below line will get printed which otherwise would not have been printed
	echo "The name of the student is $name";
}
showname();
?>
