<html>
<head>
<title>Gold - Cart</title>
</head>
<body>
<center>
<div style="background:orange;border-width:5px;border-style:solid;border-color:black;float:top;margin-top:0;text-align:center;">
<br>
<h1 style="color:white">GOLDEN PARADISE</h1>
<br>
</div>

<br><br>
<form action="success.php" method="post">
<h2><u>My Cart</u></h2><br><br>
<?php
	session_start();
	if(isset($_SESSION['bangles'])||isset($_SESSION['necklaces'])||isset($_SESSION['earrings'])){
		if(isset($_SESSION['bangles'])){
			$bangles=implode("<br><br>",$_SESSION['bangles']);
			
		}
		if(isset($_SESSION['necklaces'])){
	$necklaces=implode("<br><br>",$_SESSION['necklaces']);
	
		}
		if(isset($_SESSION['earrings'])){
	$earrings=implode("<br><br>",$_SESSION['earrings']);
		}
	//function to format money in rupees
	function IND_money_format($money){
		$len = strlen($money);
		$m = '';
		$money = strrev($money);
		for($i=0;$i<$len;$i++){
			if(( $i==3 || ($i>3 && ($i-1)%2==0) )&& $i!=$len){
				$m .=',';
			}
			$m .=$money[$i];
		}
		return strrev($m);
	}
	echo "<table bgcolor='white' style='border:2;border-color:black;border-style:dotted;padding:20;' width=700px height=500px align=center>";
	echo "<tr><th style='padding:20;font-size:20' align=left><u>ITEMS</u></th><th style='font-size:20' align=left><u>PRICE</u></th></tr>";
	echo "<tr><td colspan=2><hr></td></tr>";
	if(isset($_SESSION['bangles'])&&$bangles!=""){
	echo "<tr><th align=left><br><u>Bangles</u></th></tr><tr><td><br>";
	echo "$bangles</td>";
	
	echo "<td><br><br>";
	for($i=0;$i<=count($_SESSION['bprice'])-1;$i++){
		echo "Rs. ";
		echo IND_money_format($_SESSION['bprice'][$i]);
		echo "<br><br>";
	}
		echo "</td></tr>";
	}
	if(isset($_SESSION['necklaces'])&&$necklaces!=""){
	echo "<tr><th align=left><br><u>Necklaces</u></th></tr><tr><td><br>";
	echo "$necklaces";
	echo "<td><br><br>";
	for($i=0;$i<=count($_SESSION['nprice'])-1;$i++){
		echo "Rs. ";
		echo IND_money_format($_SESSION['nprice'][$i]);
		echo "<br><br>";
	}
		echo "</td></tr>";
	}
	if(isset($_SESSION['earrings'])&&$earrings!=""){
	echo "<tr><th align=left><br><u>Earrings</u></th></tr><tr><td><br>";
	echo "$earrings";
	echo "<td><br><br>";
	for($i=0;$i<=count($_SESSION['eprice'])-1;$i++){
		echo "Rs. ";
		echo IND_money_format($_SESSION['eprice'][$i]);
		echo "<br><br>";
	}
		echo "</td></tr>";
	}
	$bang=0;
	if(isset($_SESSION['bprice'])){
	$bang=array_sum($_SESSION['bprice']);
	}
	$neck=0;
	if(isset($_SESSION['nprice'])){
	$neck=array_sum($_SESSION['nprice']);
	}
	$ear=0;
	if(isset($_SESSION['eprice'])){
	$ear=array_sum($_SESSION['eprice']);
	}
	$total=$bang+$neck+$ear;
	echo "<tr><td colspan=2><br><hr></td></tr>";
	echo "<tr><th align=left><br>Total</th><td align=left><br>Rs. ";
	echo IND_money_format($total)."</td></tr>";
	echo "<tr><th align=left><br>Wastage (18%)</th><td align=left><br>Rs. ";
	$was=round($total*0.18);
	echo IND_money_format($was)."</td></tr>";
	echo "<tr><th align=left><br>Making charges (2%)</th><td align=left><br>Rs. ";
	$making=round($total*0.02);
	echo number_format($making)."</td></tr>";
	echo "<tr><th align=left><br>VAT charges (12%)</th><td align=left><br>Rs. ";
	$vat=round($total*0.12);
	echo IND_money_format($vat)."</td></tr>";
	echo "<tr><th align=left><br>Bill Amount</th><td align=left><br><b>Rs. ";
	$bill=round($total+$was+$making+$vat);
	echo IND_money_format($bill)."</b></td></tr>";
	echo "<tr><td align=center colspan=2><br><br><br><input type='submit' name='button' value='Buy!'></td></tr>";
	echo "</table>";
	}
	else{
		echo "Your cart is empty";
	}
	//session_destroy();
?>
<br><br><br><br>
Having second thoughts? Choose again.<br><br>
<a align=right href="page1.php" style="font-size:18px">Bangles</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a align=right href="page2.php" style="font-size:18px">Necklaces</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a align=right href="page3.php" style="font-size:18px">Earrings</a>
</body>
</html>