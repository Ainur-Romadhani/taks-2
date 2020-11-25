<?php

$input = 9;
for ($i=1; $i <= $input; $i++) { 

	for ($a=$i; $a < $input; $a++) { 
		echo "&nbsp ";
	}
	for ($a=1; $a <= $i; $a++) { 
		echo "*";
	}

	echo "<br>";
}
for ($i=$input; $i >= 1; $i--){

	for ($a=$i; $a <= $input; $a++) { 
		echo "&nbsp ";
	}
	for ($a=1; $a < $i; $a++) { 
		echo "*";
	}

	echo "<br>";
}
$pattern = '/\babc\w*/';
$hello = 'hello';
$replacement = '<b>$0</b>';
$text = 'abc ,selamat,abcde di hari abcdefg';
	echo preg_replace($pattern, $replacement, $text);

	echo "<br>";

$string = 'abc,selamat abcde di hari abcdef';
if(preg_match("/^abc/", $string)) {
  echo 'String berawalan abc';
} else {
  echo 'Tidak berawalan abc';
}
?>