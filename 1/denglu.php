<!--
<meta charset="utf-8">
<form action="tiaozhuan.php" method="post">
    用戶名:<input type="text" name="zxc" placeholder="請輸入用戶名" required>
    <br>
    密 碼:<input type="password" name="wxy" placeholder="請輸入密碼" required>
    <br>
    <input type="submit" value="登錄">
</form>-->
<!--<meta charset="utf-8">
<form action="tiaozhuan.php" method="post">
    用戶名:<input type="text" name="zh" placeholder="請輸入用戶名" required value="<?php /*if(isset($_COOKIE['zh'])){echo $_COOKIE['zh'];} */?>">
    <br>
     密 碼:<input type="password" name="mm" placeholder="請輸入密碼" required value="<?php /*if(isset($_COOKIE['mm'])){echo $_COOKIE['mm'];} */?>">
    <br>
     记住密码
    <input type="checkbox" name="red"  <?php /*if(isset($_COOKIE['mm'])){echo 'checked';} */?>>
    <br>
    <input type="submit" value="登錄">
</form>-->
<!--<meta charset="utf-8">
<form action="tiaozhuan.php" method="post">
    用户名:<input type="text" name="zh" placeholder="请输入用户名" required value="<?php /*if (isset($_COOKIE['zh'])){echo $_COOKIE['zh'];}*/?>" >
    密码:<input type="password" name="mm" placeholder="请输入密码" required value="<?php /*if (isset($_COOKIE['mm'])){echo $_COOKIE['mm'];}*/?>">
    <br>
    记住密码:<input type="checkbox" name="k" <?php /*if(isset($_COOKIE['mm'])){echo 'checked';} */?> >
    <br>
    <input type="submit" value="登录">


</form>-->
<meta charset="utf-8">
<form action="tiaozhuan.php" method="post">
   用户名:<input type="text" placeholder="请输入账号密码" name="zh" required value="<?php if(isset($_COOKIE['zh'])){echo $_COOKIE['zh'];}?>">
    密码:<input type="password" placeholder="请输入账号密码" name="mm" required value="<?php if(isset($_COOKIE['mm'])){echo $_COOKIE['mm'];}?>">
   <br>
    记住密码<input type="checkbox" name="k" value="<?php if (isset($_COOKIE['mm'])){echo 'checked';}?>">
     <br>
    <input type="submit" value="登录">

</form>