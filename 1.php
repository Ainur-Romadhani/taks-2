<?php

$regex = '/\ba\w*/';
$replacement = '<i>hello</i>';
$text = 'abc ,selamat abcde di hari yang abcdefg';
	echo preg_replace($regex, $replacement, $text);


echo "<br>";
$regex3 = '/\D/';
$replacement2 ='';
$text3 =  'George membeli bakso seharga 25000';
echo preg_replace($regex3, $replacement2, $text3);



echo "<br>";
    $date = new DateTime("now");
    $tahuntanggal = $date->format('Ym');
    $hari= $date->format('d');
    $day = (int)$hari;

    $hasil = $tahuntanggal.sprintf("%04s",$hari);
    echo "$hasil";
?>