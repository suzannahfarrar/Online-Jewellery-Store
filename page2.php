<html>
<head>
<title> Gold - Necklaces</title>
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
<a align=right href="page1.php" style="position:absolute;float:left;margin-left:100px"><< Bangles</a><a align=right href="page3.php" style="position:absolute;float:right;margin-left:1200px">Earrings >></a>
<br>
<?php
if(isset($_POST['button2'])&&isset($_POST['neckitems'])){
	echo "<br><center><font face='Times New Roman' size=4 color=red>";
	echo "<p style='background-color:yellow'>Items added to cart.</p>";
	echo "</font></center>";
}
?>
<br><br>
<form method="post">
<table align=center width="800px" height="1000px">
<tr><td align=center><img src="Pictures/n2.jpg" width="350px" height="300px"><br><br>
<b>Beaded Necklace Set</b><br>
Rs. 1,25,000<br>
<input type="checkbox" name="neckitems[]" value="Beaded Necklace Set">
</td><td align=center><img src="Pictures/n10.jpg" width="350px" height="300px"><br>
<br>
<b>Ancient Arc Necklace Set</b><br>
Rs. 2,10,450<br>
<input type="checkbox" name="neckitems[]" value="Ancient Arc Necklace Set"></td><td align=center><img src="Pictures/n3.jpg" width="350px" height="300px"><br>
<br><b>Peacock-stone Necklace Set</b><br>
Rs. 2,05,000<br>

<input type="checkbox" name="neckitems[]" value="Peacock-stone Necklace Set">
</td></tr>
<tr><td align=center><img src="Pictures/n4.jpg" width="350px" height="300px"><br><br>
<b>Beads-special Necklace Set</b><br>
Rs. 87,560<br>
<input type="checkbox" name="neckitems[]" value="Beads-special Necklace Set">
</td><td align=center><img src="Pictures/n5.jpg" width="350px" height="300px"><br>
<br>
<b>Traditional South Indian Necklace Set</b><br>
Rs. 2,02,000<br>
<input type="checkbox" name="neckitems[]" value="Traditional South Indian Necklace Set"></td><td align=center><img src="Pictures/n6.jpg" width="350px" height="300px"><br>
<br>
<b>Indus Wedding Necklace Set</b><br>
Rs. 1,50,000<br>
<input type="checkbox" name="neckitems[]" value="Indus Wedding Necklace Set">
</td></tr>
<tr><td align=center><img src="Pictures/n7.jpg" width="350px" height="300px"><br>
<br>
<b>Navaratna Gold Necklace Set</b><br>
Rs. 1,65,400<br>
<input type="checkbox" name="neckitems[]" value="Navaratna Gold Necklace Set">
</td><td align=center><img src="Pictures/n8.jpg" width="350px" height="300px"><br>
<br>
<b>Kerala Temple Necklace Set</b><br>
Rs. 1,75,890<br>
<input type="checkbox" name="neckitems[]" value="Kerala Temple Necklace Set"></td><td align=center><img src="Pictures/n9.jpg" width="350px" height="300px"><br>
<br>
<b>Thin Chain Gold Necklace</b><br>
Rs. 78,000<br>
<input type="checkbox" name="neckitems[]" value="Thin Chain Gold Necklace">
</td></tr>
<tr><td colspan="3" align=center><br><br><input type="submit" name="button2" value="Add to cart"></td></tr>
</table>
<br>
<br>
</form>
<?php
	if(isset($_POST['button2'])&&isset($_POST['neckitems'])){
			session_start();
		
		
		$_SESSION['necklaces']=$_POST['neckitems'];
		$nitem=array();
		$nitem=$_SESSION['necklaces'];
		$namount=array();
		$i=0;
		foreach($nitem as $n){
			if($n=="Beaded Necklace Set"){
				$namount[$i]=125000;
			}
			if($n=="Ancient Arc Necklace Set"){
				$namount[$i]=210450;
			}
			if($n=="Peacock-stone Necklace Set"){
				$namount[$i]=205000;
			}
			if($n=="Beads-special Necklace Set"){
				$namount[$i]=87560;
			}
			if($n=="Traditional South Indian Necklace Set"){
				$namount[$i]=202000;
			}
			if($n=="Indus Wedding Necklace Set"){
				$namount[$i]=150000;
			}
			if($n=="Navaratna Gold Necklace Set"){
				$namount[$i]=165400;
			}
			if($n=="Kerala Temple Necklace Set"){
				$namount[$i]=175890;
			}
			if($n=="Thin Chain Gold Necklace"){
				$namount[$i]=78000;
			}
			$i++;
		}
		$_SESSION['nprice']=$namount;
		//print_r($_SESSION['necklaces']);
		//print_r($_SESSION['bangles']);
	}
	?>
</body>
</html>