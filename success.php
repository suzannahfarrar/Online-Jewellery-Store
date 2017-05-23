<html>
<head><title>Purchase Success</title>
</head>
<body>
<center>
<div style="background:orange;border-width:5px;border-style:solid;border-color:black;float:top;margin-top:0;text-align:center;">
<br>
<h1 style="color:white">GOLDEN PARADISE</h1>
<br>
</div>
<br>
</center>
<?php
	//header("refresh:0");
	echo "<font face='Times New Roman' size=4 color=blue>";
	echo "Logged in as ".$_COOKIE['name1']."!";
	echo "</font>";
?><br><br>
<b><center>Congratulations! Your order has been placed successfully!</b><br><br>
<?php
	if(isset($_POST['button'])){
		session_start();
		session_destroy();
		setcookie('name1','');
		
	}
?>
<br><br>
<a href="home.php" style="font-size:18px">Go back to home page</a>
</center>
</body>
</html>