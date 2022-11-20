<html>
<body>
		<?php		
				echo "<br><br>";
			$name = "Salvador Gabriel";
			$grade = 69;
			if ($grade >= 70) 
			{
				echo "Name: ".$name . "<br>Grade: ". $grade . ", Passed <br>";
			} 
			elseif (($grade >=60) && ($grade <=69))
			{
				echo "Name: ".$name . "<br>Grade: ".$grade . ", For Remedials <br>";
			}
			else
			{
				echo "Name: ".$name . "<br>Grade: ".$grade . ", You failed <br>";
			}			
		?>
		
		
</body>
</html>

<?php

$month = "December"; 
if($month == "December") echo "It's christmas time";
	//equality
$a = 2;
$b = 3;
echo "<br>";

	if($a !=$b) echo "1";
	if($a !== $b) echo "2";
echo "<br>";
	//comparison operator 
	$a = 2;
	$b = 3;
	
	if($a > $b) echo "is a greater than b <br>";
	if($a < $b) echo "is a less than b <br>";
	if($a >= $b) echo "is a greater than or equal to b <br>";
	if($a <= $b) echo "is a less than or equal to b <br>";
	
	//logical operators
	$a = 1;
	$b = 0;
	
	echo ($a AND $b). "<br>";
	echo ($a or $b). "<br>";
	echo ($a XOR $b). "<br>";
	echo !$a . "<br>";
	
	//if statemanet
	$bank_balance = 99;
	if($bank_balance<100)
	{
			$money = 1000;
			$bank_balance+=$money;
			echo $bank_balance;
	}
		elseif($bank_balance>200)
		{
			$savings +=100;
			$bank_balance -=100;
		}
		else
		{
			$savings +=50;
			$bank_balance-=50;
		}
?>
Footer
© 2022 GitHub, Inc.
Footer navigation
Terms
Privacy
Security
