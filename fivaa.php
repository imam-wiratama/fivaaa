<?php 

?>
<!DOCTYPE html>
<html>
<head>
	<title>Fivaa</title>
</head>
<body>

<form method="post" action="fivaa.php">
	<input type="number" name="input">
	<input type="submit">
</form>
<?php 
	
	if(!isset($_POST["submit"])) {
	  if(isset($_POST["input"])){
	$sebelum = $_POST["input"] - 1;
	$sesudah = $_POST["input"] + 1;

	for($x = 0; $x < $_POST["input"]; $x++  ){
	
		for ($i=0; $i < 2; $i++) { 
			echo $sebelum;
			
		}$sebelum--;
		
		for($j = 0; $j < (($sesudah - 1 ) - $_POST["input"]) + $_POST["input"]; $j++){
			echo $sesudah;
			
		}$sesudah--;
		echo "<br>";
	  }	
	}
}
	

?>
</body>
</html>