<?php
$string = 'Invoice FTR 0253.jpg';
$myString = preg_replace("/\s|&nbsp;/",'_',$string);
// rename("Public/Upload/$string", "Public/Upload/$myString");

echo $myString;
?>