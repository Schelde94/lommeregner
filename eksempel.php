<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<?php
	if (!isset($_GET['operator']))	{
		$res = 0;
	}
	else {
 		$op = $_GET['operator'];
		
		$v1 = filter_input(INPUT_GET, 'val1', FILTER_VALIDATE_INT);
		if ($v1 === false) { die('missing or illegal val1 parameter'); }
		
		$v2 = filter_input(INPUT_GET, 'val2', FILTER_VALIDATE_INT);
		if ($v2 === false) { die('missing or illegal val2 parameter'); }
 
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
				$res = 'Unknown operator "'.$op.'"';
		}
	}
	
	
?>
<body>
	<h1>Bedste lommeregner ever</h1>
	
	<form action="<?=$_SERVER['PHP_SELF']?>" method="get">
		<input type="hidden" name="val1" value="<?=$res?>" /><br>
		<input type="number" value="<?=$res?>" disabled /><br>
		<input type="number" name="val2" required placeholder="Indtast her" autocomplete="off" /><br>
		<button type="submit" name="operator" value="add">+</button>
		<button type="submit" name="operator" value="sub">-</button>
		<button type="submit" name="operator" value="mul">×</button>
		<button type="submit" name="operator" value="div">÷</button>
	</form>

	<form action="<?=$_SERVER['PHP_SELF']?>" method="get">
		<button type="submit">Reset</button>
	</form>
</body>
</html>