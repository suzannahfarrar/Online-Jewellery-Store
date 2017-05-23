<html>
<head>
<title> Gold - Earrings</title>
</head>
<body>
<center>
<div style="background:orange;border-width:5px;border-style:solid;border-color:black;float:top;margin-top:0;text-align:center;">
<br>
<h1 style="color:white">GOLDEN PARADISE</h1>
<br>
</div><br>
</center>
<?php
	//header("refresh:0");
	if(isset($_COOKIE['name1'])){
	echo "<font face='Times New Roman' size=4 color=blue>";
	echo "Logged in as ".$_COOKIE['name1']."!";
	echo "</font>";
	}
?>
<br><br>
<a align=right href="page1.php" style="position:absolute;float:left;margin-left:100px"><< Bangles</a>
<a align=right href="page2.php" style="position:absolute;float:left;margin-left:200px"><< Necklaces</a>
<a align=right href="page4.php" style="position:absolute;margin-left:1200px">Cart >></a>
<br>
<?php
if(isset($_POST['button3'])&&isset($_POST['earitems'])){
	echo "<br><center><font face='Times New Roman' size=4 color=red>";
	echo "<p style='background-color:yellow'>Items added to cart.</p>";
	echo "</font></center>";
}
?>
<br><br>
<form method="post">
<table align=center width="800px" height="1000px">
<tr><td align=center><img src="Pictures/e1.jpg" width="350px" height="300px"><br><br>
<b>Rajasthan Stone Earrings</b><br>
Rs.18,450<br>
<input type="checkbox" name="earitems[]" value="Rajasthan Stone Earrings">
</td><td align=center><img src="Pictures/e2.jpg" width="350px" height="300px"><br>
<br>
<b>White Beaded Earrings</b><br>
Rs. 10,450<br>
<input type="checkbox" name="earitems[]" value="White Beaded Earrings"></td><td align=center><img src="Pictures/e3.jpg" width="350px" height="300px"><br>
<br><b>Pure Gold Twisted Earrings</b><br>
Rs. 25,000<br>

<input type="checkbox" name="earitems[]" value="Pure Gold Twisted Earrings">
</td></tr>
<tr><td align=center><img src="Pictures/e4.jpg" width="350px" height="300px"><br><br>
<b>Stoned Beautiful Earrings</b><br>
Rs. 37,560<br>
<input type="checkbox" name="earitems[]" value="Stoned Beautiful Earrings">
</td><td align=center><img src="Pictures/e5.jpg" width="350px" height="300px"><br>
<br>
<b>Traditional Kerala Gold Earrings</b><br>
Rs. 29,500<br>
<input type="checkbox" name="earitems[]" value="Traditional Kerala Gold Earrings"></td><td align=center><img src="Pictures/e6.jpg" width="350px" height="300px"><br>
<br>
<b>Stone Embedded Earrings</b><br>
Rs. 9,950<br>
<input type="checkbox" name="earitems[]" value="Stone Embedded Earrings">
</td></tr>
<tr><td align=center><img src="Pictures/e7.jpg" width="350px" height="300px"><br>
<br>
<b>Gold Stud with Stones Earrings</b><br>
Rs. 8,400<br>
<input type="checkbox" name="earitems[]" value="Gold Stud with Stones Earrings">
</td><td align=center><img src="Pictures/e10.jpg" width="350px" height="300px"><br>
<br>
<b>Green Temple Earrings</b><br>
Rs. 16,090<br>
<input type="checkbox" name="earitems[]" value="Green Temple Earrings"></td><td align=center><img src="Pictures/e9.jpg" width="350px" height="300px"><br>
<br>
<b>Red Stone-studded Earrings</b><br>
Rs. 38,750<br>
<input type="checkbox" name="earitems[]" value="Red Stone-studded Earrings">
</td></tr>
<tr><td colspan="3" align=center><br><br><input type="submit" name="button3" value="Add to cart"></td></tr>
</table>
<br>
<br>
</form>
<?php
	if(isset($_POST['button3'])&&isset($_POST['earitems'])){
		
		session_start();
		$_SESSION['earrings']=$_POST['earitems'];
		$eitem=array();
		$eitem=$_SESSION['earrings'];
		$eamount=array();
		$i=0;
		foreach($eitem as $e){
			if($e=="Rajasthan Stone Earrings"){
				$eamount[$i]=18450;
			}
			if($e=="White Beaded Earrings"){
				$eamount[$i]=10450;
			}
			if($e=="Pure Gold Twisted Earrings"){
				$eamount[$i]=25000;
			}
			if($e=="Stoned Beautiful Earrings"){
				$eamount[$i]=9950;
			}
			if($e=="Traditional Kerala Gold Earrings"){
				$eamount[$i]=29500;
			}
			if($e=="Stone Embedded Earrings"){
				$eamount[$i]=9950;
			}
			if($e=="Gold Stud with Stones Earrings"){
				$eamount[$i]=8400;
			}
			if($e=="Green Temple Earrings"){
				$eamount[$i]=16090;
			}
			if($e=="Red Stone-studded Earrings"){
				$eamount[$i]=38750;
			}
			$i++;
		}
		$_SESSION['eprice']=$eamount;
		//print_r($_SESSION['earrings']);
	
		}
	?>
</body>
</html>