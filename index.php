<?php
//Brobey Quotes Bot by Loomeh. You expectin' some copyright shit? nah lol.

$m1 ="mmm, butter me up.";
$m2 ="You wan' me to cook you a juicy schnacc?";
$m3 ="The feetpics gon' cost ya!";
$m4 ="Ya like these buns?";
$m5 ="doRitOOOOO! I like cool ranch."
$rm=array($m1, $m2, $m3, $m4, $m5);
$random_keys = array_rand($rm, 1);
echo $rm[$random_keys];
?>