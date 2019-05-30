<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form id="compute" method="GET" action="<?php echo $_SERVER['PHP_SELF'] ?>">
	Num 1:
<input id="num1" type="number" name="num1" required=" please fill out this field with an integer">
Num 2:
<input type="number" name="num2" required=" please fill out this field with an integer">

<button name="Compute" value="yes">Compute</button>
</form>


<?php
$num3=0;
if (isset($_GET['Compute'])&& $_GET['Compute'] == 'yes') {
	# code...
	// $result = $_GET['result'];

	// $result_message = multiply($num1,$num2);
	// echo .$result_message.;
}
function multply(int $num1, int $num2){
	// int $quot = num1+ num2;
	$Compute= $num1+num2;
	if (num3<=num2) {
		# code...
		echo '$Compute';
	} 


}


?>


</body>
</html>
