<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<h1>Bedste lommeregner ever</h1>
	
	<form action="<?=$_SERVER['PHP_SELF']?>" method="get">
		<input type="text" name="val1" >
		<br>
		<input type="text" name="val2" >
		<br>
		<button type="submit" name="operator" value="add">+
		</button>
		<button type="submit" name="operator" value="sub">-
		</button>
		<button type="submit" name="operator" value="mul">*
		</button>
		<button type="submit" name="operator" value="div">/
		</button>
	</form>
	
	<?php
		$v1 = $_GET['val1'];
		$v2 = $_GET['val2'];
		$op = $_GET['operator'];
		  
		  
		  
		switch($op){
			case 'add':
				$res = $v1+$v2;
				break;
			case 'sub':
				$res = $v1-$v2;
				break;
			case 'mul':
				$res = $v1*$v2;
				break;
			case 'div':
				$res = $v1/$v2;
				break;
			
			default: 
				$res = 'Syntax Error "'.$op.'"';
		}
		  
		  echo $v1.' '.$op.' '.$v2.' = '.$res;
	?>
</body>
</html>