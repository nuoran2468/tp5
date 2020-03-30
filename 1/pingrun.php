<?php 
if($_POST){
$num1 = $_POST['num1'];
if(($num1%4==0&&$num1%100!=0)||$num1%400==0){
	echo '瑞年';
}else{
	echo '平年';
}

}

 ?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
  <form accept="" method="post">
  	<input type="number" name="num1">
  	<input type="submit">


  </form>
</body>
</html>








