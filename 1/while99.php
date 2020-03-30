<?php
$i=1;
while($i<=9) {
    $s = 1;
    while ( $s <= $i ) {
        echo $s.'*'.$i.'='.$i*$s.'&nbsp;';
        if($i*$s<10){
            echo " ";
        }
        $s++;
    }
    echo '<br>';
    $i++;
}

?>