<html>
<head>
<title>Gold - Bangles</title>
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
?><br>
<a align=right href="page2.php" style="position:absolute;margin-left:1000px">Necklaces >></a>&nbsp;&nbsp;
<a align=right href="page3.php" style="position:absolute;margin-left:1100px">Earrings >></a>
<a align=right href="page4.php" style="position:absolute;margin-left:1200px">Cart >></a>
<?php
if(isset($_POST['button1'])&&isset($_POST['bangitems'])){
	echo "<br><center><font face='Times New Roman' size=4 color=red>";
	echo "<p style='background-color:yellow'>Items added to cart.</p>";
	echo "</font></center>";
}
?>
<br><br>
<form method="post">
<table align=center width="800px" height="1000px">
<tr><td align=center><img src="Pictures/b1.jpg" width="350px" height="300px"><br><br>
<b>Traditional Bangle Set</b><br>
Rs. 3,45,000<br>
<input type="checkbox" name="bangitems[]" value="Traditional Bangle Set">
</td><td align=center><img src="Pictures/b9.jpg" width="350px" height="300px"><br>
<br>
<b>Althea Trellis Bangle Pair</b><br>
Rs. 1,25,450<br>
<input type="checkbox" name="bangitems[]" value="Althea Trellis Bangle Pair"></td><td align=center><img src="Pictures/b14.jpeg" width="350px" height="300px"><br>
<br><b>Cross-pattern Broad Bangle</b><br>
Rs. 65,000<br>

<input type="checkbox" name="bangitems[]" value="Cross-pattern Broad Bangle">
</td></tr>
<tr><td align=center><img src="Pictures/b3.jpg" width="350px" height="300px"><br><br>
<b>Peacock-design Bangle</b><br>
Rs. 97,560<br>
<input type="checkbox" name="bangitems[]" value="Peacock-design Bangle">
</td><td align=center><img src="Pictures/b4.jpg" width="350px" height="300px"><br>
<br>
<b>Axial Bangle Set</b><br>
Rs. 1,02,000<br>
<input type="checkbox" name="bangitems[]" value="Axial Bangle Set"></td><td align=center><img src="Pictures/b11.jpg" width="350px" height="300px"><br>
<br>
<b>Leafy Bangle with Stones Pair</b><br>
Rs. 2,50,000<br>
<input type="checkbox" name="bangitems[]" value="Leafy Bangle with Stones Pair">
</td></tr>
<tr><td align=center><img src="Pictures/b5.jpg" width="350px" height="300px"><br>
<br>
<b>Stoned Rajasthani Bangle Pair</b><br>
Rs. 2,68,400<br>
<input type="checkbox" name="bangitems[]" value="Stoned Rajasthani Bangle Pair">
</td><td align=center><img src="Pictures/b6.jpg" width="350px" height="300px"><br>
<br>
<b>Twisted Bangle Pair</b><br>
Rs. 1,75,890<br>
<input type="checkbox" name="bangitems[]" value="Twisted Bangle Pair"></td><td align=center><img src="Pictures/b13.jpg" width="350px" height="300px"><br>
<br>
<b>South Indian Traditional Bangle Set</b><br>
Rs. 2,50,000<br>
<input type="checkbox" name="bangitems[]" value="South Indian Traditional Bangle Set">
</td></tr>
<tr><td colspan="3" align=center><br><br><input type="submit" name="button1" value="Add to cart"></td></tr>
</table>
<br>
<br>
</form>
<?php

		if(isset($_POST['button1'])&&isset($_POST['bangitems'])){
			session_start();
		
		
		$_SESSION['bangles']=$_POST['bangitems'];
	
		//print_r($_SESSION['bangles']);
		
		$bitem=array();
		$bitem=$_SESSION['bangles'];
		$bamount=array();
		$i=0;
		foreach($bitem as $b){
			if($b=="Traditional Bangle Set"){
				$bamount[$i]=345000;
			}
			if($b=="Althea Trellis Bangle Pair"){
				$bamount[$i]=125450;
			}
			if($b=="Cross-pattern Broad Bangle"){
				$bamount[$i]=65000;
			}
			if($b=="Peacock-design Bangle"){
				$bamount[$i]=97560;
			}
			if($b=="Axial Bangle Set"){
				$bamount[$i]=102000;
			}
			if($b=="Leafy Bangle with Stones Pair"){
				$bamount[$i]=250000;
			}
			if($b=="Stoned Rajasthani Bangle Pair"){
				$bamount[$i]=268400;
			}
			if($b=="Twisted Bangle Pair"){
				$bamount[$i]=175890;
			}
			if($b=="South Indian Traditional Bangle Set"){
				$bamount[$i]=250000;
			}
			$i++;
		}
		$_SESSION['bprice']=$bamount;
		
		//print_r($_SESSION['bangles']);
		}
	?>
</body>
</html>