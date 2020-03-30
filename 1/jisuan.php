<?php
  if($_POST){
    switch ($_POST['jisuan']) {
      case '1':
        echo $_POST['num1']+$_POST['num2'];
        break;
      case '2':
        echo $_POST['num1']-$_POST['num2'];
        break;
      case '3':
        echo $_POST['num1']*$_POST['num2'];
        break;
      case '4':
        echo $_POST['num1']/$_POST['num2'];
        break;
      case '5':
        echo $_POST['num1']%$_POST['num2'];
        break;    
    }
  }
  ?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
   <form accept="" method="post">
   	<input type="number" name="num1">
   	<select name="jisuan">
   		  <option value="1">+</option>
   		  <option value="2">-</option>
   		  <option value="3">*</option>
   		  <option value="4">/</option>
   		  <option value="5">%</option>
   	</select>
    <input type="number" name="num2">
    <input type="submit" value="=">


   </form>
</body>
</html>