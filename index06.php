<!DOCTYPE html>
<html lang="">
<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<title></title>
</head>

<body>
	
<?php 
	$cities3 = array(
			'Tokijas' => array('13.5', '1868', 'Japonija'),
			'Vasingtonas' => array('0.6', '1790', 'JAV'),
			'Maskva' => array('11.5', '1147', 'Rusija'));
		$cities3['Londonas'] = ['8.6', '43', 'Anglija'];
	

	
	$metai = 1774; 
	$likometu = $cities3['Vasingtonas'][1] - $metai;

	
		if($metai >= $cities3['Vasingtonas'][1]){
		echo 'Vasingtonas yra JAV sostine.';
		}
		elseif($metai==1774){
		echo 'JAV sostinė vis dar Filadelfijoje.';	
		}
		else{ 
		echo 'Liko ' .$likometu. ' metai(u).';
		}

	?>
			
</body>
</html>
