<html>
<head>
</head>
<body>
	<h1>hii this is dora</h1>
	<?php
	echo "madhuri";
	$var=90;
	function fun(){
		static $sta=34;
		echo $sta;
		$sta++;
		global $var;
		$name="Madhuri";
		echo strtoupper($name);
		echo strtolower($name);
		echo $name;
		echo $var;
		echo "\n \t";
		echo $sta;
	}
	fun();
	fun();
	fun();
	?>
	<form action="hi.php">
		<label>NAME:</label><input type="text" style="display:inline-block;">
		<input type="submit" style="display:inline-block;">
	</form>
</body>
</html>