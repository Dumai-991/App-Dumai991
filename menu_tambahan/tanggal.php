<?php
$a = date ("H");
#if (($a>=6) && ($a<=11)){
#echo "Selamat Pagi !!";
#}
else if(($a>11) && ($a<=15))
{
echo "Selamat Pagi !!";}
else if (($a>15) && ($a<=18)){
echo "Selamat Siang !!";}
else { echo "Selamat Malam";}
?> 
