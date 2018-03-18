<html>
<head>
	<title>Tugas PEMWEB</title>
</head>
<body background="background.jpg" style="background-size: 1060px;">
	<h2 style="color: white; margin-left: 40px">
		<br><br>
		Selamat Datang 
		<?php 
		<h2>
<?php 
session_start();
if(strpos($_SERVER['HTTP_USER_AGENT'], 'Netscape')){
    $browser = 'Netscape';
} else if (strpos($_SERVER['HTTP_USER_AGENT'], 'Firefox')){
    $browser = 'Firefox';
} else if (strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome')){
    $browser = 'Chrome';
} else if (strpos($_SERVER['HTTP_USER_AGENT'], 'Opera')){
    $browser = 'Opera';
} else if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE')){
    $browser = 'Internet Explorer';
} else $browser = 'Other';
$_SESSION['web'] = $browser; 

date_default_timezone_set("Asia/Jakarta");

$b = time();
$hour = date("G",$b);

if ($hour>=0 && $hour<=11)
{
echo " Selamat Pagi :)";
}
elseif ($hour >=12 && $hour<=14)
{
echo " Selamat Siang :) ";
}
elseif ($hour >=15 && $hour<=17)
{
echo " Selamat Sore :) ";
}
elseif ($hour >=17 && $hour<=23)
{
echo " Selamat Malam :) ";
}
echo " Browser Anda adalah ".$_SESSION['web'];
 ?> 
		 </h2>
</body>
</html>
