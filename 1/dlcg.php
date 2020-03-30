<!--<meta charset="utf-8">
<?php
/*session_start();
if(!isset($_SESSION['zh'])){

    echo "<script>
     alert('请输入账号密码');
     location.href='denglu.php'</script>";
}
 echo '恭喜登录成功';
*/?>
<a href="denglu.php" <?php /*session_destroy(); */?>>继续/退出</a>;-->
<meta charset="utf-8">
<?php
/*session_start();
if(!isset($_SESSION['zh'])){
    echo "<script>
  alert('请输入账号密码');
  location.href='denglu.php'
</script>";
}
 echo '恭喜登陆成功';
session_destroy();
*/?><!--
<a href="denglu.php" >继续/退出</a>;-->
<?php
session_start();
if (!isset($_SESSION['zh'])){
    echo "<script>
    alert('请输入账号密码');
    location.href='denglu.php'
</script>";
}
echo '恭喜登录成功';
session_destroy();
?>
<a href="denglu.php">继续/退出</a>;
