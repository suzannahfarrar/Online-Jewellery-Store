<html>
<head>
<title>Gold - Home Page</title>
</head>
<body>
<center>
<div style="background:orange;border-width:5px;border-style:solid;border-color:black;float:top;margin-top:0;text-align:center;">
<br>
<h1 style="color:white">GOLDEN PARADISE</h1>
<br>
</div>
<hr>
<br><br><br>
<form method="post">
<table align=center width="300px" height="150px" style="font-size:16px">
<tr>
<td>Name:</td><td> <input type="text" name="name"></td></tr>
<td valign=top><br>Gender:</td><td> <br><input type="radio" name="gender" value="male" checked>Male<br>
<input type="radio" name="gender" value="female">Female</td></tr>
<tr><td colspan=2 align=center><br><input type="submit" value="Register" name="button"></td></tr>
</table>
</form>
<br><br>

<?php
if(isset($_POST['button'])){	

	$name=$_POST['name'];
	
	unset($_COOKIE['name']);
	if($_POST['gender']=="male"){
		$name1="Mr. ".$name;
	}
	else if($_POST['gender']=="female"){
		$name1="Ms. ".$name;
	}
	setcookie('name1',$name1);
	echo "Thank you for registering! Click the link below<br>";
	echo '<a href="page1.php">Let me in!</a>';
	echo "<br><br><br><br>";
	if (!isset($_COOKIE['count']))
    {
		echo "Welcome! This is the first time you have viewed this page."; 
        $cookie = 1;
        setcookie("count", $cookie);
    }
    else
    {
        $cookie = ++$_COOKIE['count'];
        setcookie("count", $cookie);
		echo "You have viewed this page ".$_COOKIE['count']." times.";
	}
}
?>
<br><br><br><br><br><br><br><br><br><br><br><br><br>
<marquee style="background-color:black;color:yellow;font-size:20px;font-weight:bold">Welcome to Golden Paradise! We provide our customers with the best price possible! Register today and view all our products. We wish you have a good time shopping. With Love - The Golden Paradise Community.</marquee>
</center>
</body>
</html>