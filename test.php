<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
	</head>
	<body>
		<form action="result.php" method="post">
			<table width="300" border="0">
				<tr><td>��һ������</td><td><input type="text" name="name1"></td></tr>
				<tr><td>�ڶ�������</td><td><input type="text" name="name2"></td></tr>
				<tr><td>����</td><td>
				<select name="oper">
					<option value="+">+</option>
					<option value="-">-</option>
					<option value="*">*</option>
					<option value="/">/</option>
				</select>
				</td></tr>
				<tr><td colspan="2"><input type="submit" value="�ύ"></td></tr>
			</table>
		</form>
	</body>
</html>
<?php
	for($i=1; $i<=5; $i++){
		for($k=1; $k<=5-$i; $k++){
			echo "&nbsp;";
		}
		for($j=1; $j<=($i-1)*2+1; $j++){
			echo "*";
		}
		echo "<br/>";
	}
	
?>