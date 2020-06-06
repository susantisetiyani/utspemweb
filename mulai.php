<?php
	session_start();
	if (isset($_SESSION["email"])) {
	} else {
		$_SESSION["nama"] = $_POST["nama"];
		$_SESSION["email"] = $_POST["email"];
	}
	if ($_SESSION["lives"] == 0) {
		//game over
		header('Location: end.php');
	}
	$bil1 = rand(0,20);
	$bil2 = rand(0,20);
	$hasil = $bil1 + $bil2;
	$_SESSION["hasil"] = $hasil;
?>
<!DOCTYPE html>
<html>
<head>
	<title>MATH GAME</title>
</head>
<body>
	<form action="cek.php" method="post">	
		Hallo <?php echo $_SESSION["nama"]; ?>,tetap semangat ya….. you can do the best!! <br>
		Lives: <?php echo $_SESSION["lives"]; ?> | Score: <?php echo $_SESSION["score"]; ?> <br> <br>
		Berapakah <?php echo $bil1; ?> + <?php echo $bil2; ?> =  <br>
		<input type="number" name="hasil">
		<input type="submit" value="Kirim">
	</form>
</body>
</html>