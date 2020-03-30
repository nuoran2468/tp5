<meta charset="utf-8">
<?php 
echo $fs=mt_rand(0,100);
echo '<br>';
if($fs>0&&$fs<60){
	echo '你能歘';
}else if($fs<=70){
	echo '你还能歘';
}else if($fs<=80){
	echo '怂都弄不成';
}else if($fs<=90){
	echo '迎娶白富美';
}else if($fs<=100){
	echo '成为ceo,走上人生巅峰';
}else{
	echo "<img src=sss.jpg>";
}



 ?>