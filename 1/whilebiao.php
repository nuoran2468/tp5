<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<table border="1" cellpadding="0" cellspacing="0" align="center">
    <?php $i = 0 ; ?>
    <?php while($i < 10) { $s = 0; ?>
        <tr <?php if ($i%2!=0){ ?> bgcolor="#ffc0cb" <?php }?>   >
            <?php while ($s < 10) { ?>
                <td width="50"><?php echo ($i*10+$s) ?></td>
            <?php $s++;} ?>
        </tr>
    <?php $i++;}?>
</table>
</body>
</html>

   $i=0;
  while($i<10){
    $s = 0 ;
    while($s<10){

    echo ($i*10+$s);
    $s++;
}
  $i++;
}
