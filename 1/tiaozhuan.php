<meta charset="UTF-8">
<?php
/*
$zxc = $_POST['zxc'];
$wxy = $_POST['wxy'];
if ($zxc == 'zxc123' && $wxy == '123456') {
    echo "<script>
       alert('登陆成功');
       location.href='http://www.baidu.com'
   </script>";
} else {
    echo "<script>
        alert('账户或者密码是错误');
        location.href='denglu.php'
	</script>";
}*/
/*session_start(); // 开启会话
$zh = $_POST['zh'];  //账号
$mm = $_POST['mm'];  //密码
$red = $_POST['red'];
if($zh=='zxc123'&&$mm=='123456'){
    $_SESSION['zh'] = 'zxc123';
    if(isset($_POST['red'])){
        setcookie('zh',$zh);
        setcookie('mm',$mm);
    }else{
        setcookie('zh','',0);
        setcookie('mm','',0);
    }
    echo "<script>
     location.href='dlcg.php'
</script>";
}else{
    echo "<script>
    alert('請重新登陸');
    location.href='denglu.php'
    </script>";
}*/

/*session_start();
$zh = $_POST['zh'];
$mm = $_POST['mm'];
$k = $_POST['k'];
if($zh == 'zxc'&& $mm == '123'){
    $_SESSION['zh'] = 'zxc';
    if(isset($_POST['k'])){
        setcookie('zh',$zh);
        setcookie('mm',$mm);
    }else{
        setcookie('zh','',0);
        setcookie('mm','',0);
    }
   echo "<script>
   alert('恭喜登陆成功');
   location.href='dlcg.php'
</script>";
}else{
    echo "<script>
 alert('账号密码错误');
 location.href='denglu.php'
</script>";
}*/
session_start();
$zh = $_POST['zh'];
$mm = $_POST['mm'];
$k = $_POST['k'];
if($zh == 'nuoran'&& $mm == 'zhouchunhui' ){
    $_SESSION['zh'] = 'nuoran';
    if(isset($_POST['k'])){
        setcookie('zh',$zh);
        setcookie('mm',$mm);
    }else{
        setcookie('zh','',0);
        setcookie('mm','',0);
    }
    echo "<script>
  alert('恭喜登陆成功');
  location.href='dlcg.php'
</script>";
}else{
    echo "<script>
alert('账号密码错误');
location.href='denglu.php'
</script>";
}
