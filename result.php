<?php
	$num1=$_REQUEST['name1'];
	$num2=$_REQUEST['name2'];
	$oper=$_REQUEST['oper'];
	
	$res=0;
	switch($oper){
		case "+":
			$res=$num1+$num2;
		break;
		case "-":
			$res=$num1-$num2;
		break;
		case "*":
			$res=$num1*$num2;
		break;
		case "/":
			$res=$num1/$num2;
		break;

		echo $res;
		default:
			echo "��������ȷ";

	}
	echo "����ǣ�".$res;
?>