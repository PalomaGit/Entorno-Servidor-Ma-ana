<?php
$num = 2.7;
echo gettype($num)."<br>";

settype($num,"int");
echo gettype($num)."<br>";

settype($num,"string");
echo gettype($num)."<br>";

