<!DOCTYPE html>
<html lang="">
<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<title></title>
</head>

<body>
	<?php
	
	$aprilTemp = " 4, 3, 9, 19, 19, 9, 12, 20, 24, 20, 12, 14, 18, 21, 20, 23, 16, 16, 15, 19, 19, 17, 17, 15, 12, 13, 13, 15, 19, 21";
		
	$temp_array = explode(',', $aprilTemp);
	$tot_temp = 0;
	$temp_array_length = count($temp_array);
	foreach($temp_array as $temp)
	{
	 $tot_temp += $temp;
	}
	 $avg_high_temp = $tot_temp/$temp_array_length;
	
	echo "Average april temperature is : ".round($avg_high_temp)."<br> "; 
	
	
	$aprilTemp1 = array(4, 3, 9, 19, 19, 9, 12, 20, 24, 20, 12, 14, 18, 21, 20, 23, 16, 16, 15, 19, 19, 17, 17, 15, 12, 13, 13, 15, 19, 21);
	
	rsort($aprilTemp1);
	
	echo "Five highest temperatures: ";
	
	$higestTemp = array_slice($aprilTemp1, 0, 5);
	print_r($higestTemp);
	
	
	
	echo "Five lowest temperatures: ";
	
	$lowestTemp = array_slice($aprilTemp1, 25, 30);
	print_r($lowestTemp); 
	
 
	?>
			
</body>
</html>
