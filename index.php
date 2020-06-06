<?php
	session_start();
	$_SESSION["score"] = 0;
	$_SESSION["lives"] = 5;
?>
<!DOCTYPE html>
<html>
<head>
	<title>UTS PEMWEB MATH GAME</title>
</head>
<body>
<h1>MATH GAME</h1>
<?php
	if (isset($_SESSION["email"])) {
        echo 'hallo,'.$_SESSION["nama"]; 
        echo ", Selamat Datang Kembali di Permainan ini!! </br>"; 
        echo '<a href="mulai.php">[Start Game]</br>';
        echo 'bukan anda <a href="reset.php">[klik disini]</a>';
	} else {
?>
<form action="mulai.php" method="post">
		Nama <input type="text" name="nama" id="nama"><br><br>
		Email <input type="email" name="email" id="email">
		<br> <br>
		<input type="submit" value="Submit">
	</form>
<?php
	}
?>
</body>
</html>