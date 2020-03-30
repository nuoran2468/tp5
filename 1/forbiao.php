<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
     <table border="1" cellpadding="0" cellspacing="0" align="center">
        <?php for($i = 0;$i < 10;$i++) { ?>
         <tr <?php if ($i%2==0){ ?> bgcolor="aqua" <?php }?>   >
             <?php for ($s = 0;$s < 10;$s++) { ?>
     	<td width="50"><?php echo ($i*10+$s)+1 ?></td>
             <?php } ?>
         </tr>
         <?php }?>
     </table>
</body>
</html>
pp    44444444444444444444441156我++


create table course(
id int (10),
class_name char (50),
class_id int (10)
)engine='myisam' charset=utf8;


create table class(
id int(10) unsigned primary key auto_increment,
class_name char(6),
stu_id int(10) unsigned
)engine='myisam' charset=utf8;


create table score(
id int(10) unsigned primary key auto_increment,
num float(4),
stu_id int(10) unsigned,
cou_id int(10) unsigned
)engine='myisam' charset=utf8;

create table course(
id int(10) unsigned primary key auto_increment,
c_name char(50),
class_id int(10) unsigned
)engine='myisam' charset=utf8;


   insert into student(stu_name,sex,age,class_id,cou_id)values('wh',1,23,1,1),('fl',1,24,1,1),('yy',1,26,1,1),('lyt',1,23,1,1),('zsj',1,24,1,1),('wm',1,25,1,1),('zhb',1,20,1,1),('dh',1,22,1,1),('ljh',1,25,1,1),('zcg',,26,1,1);

   insert into class(class_name)values('php41'),('php42'),('php43'),('php44');


   insert into course(c_name,class_id)values('mysql',1),('html',1),('css',1),('js',1),('jq',1),('php',1),