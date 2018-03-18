<html>
<head>
	<title>Tugas PEMWEB</title>
</head>
<body background="background.jpg" style="background-size: 1060px;">
	<h2 style="color: white; margin-left: 40px">
		<br><br>
		Selamat Datang 
		<?php 
		echo $_POST['usr'];
		session_start();
		    if ( !isset( $_SESSION['hitung'] ) ) 
		     $_SESSION['hitung'] = 1; 
		 else $_SESSION['hitung']++;
		   echo "<br> Anda telah mengakses halaman ini sebanyak ".$_SESSION['hitung']." kali pada session ini" ; 
		 ?>
		 </h2>
</body>
</html>