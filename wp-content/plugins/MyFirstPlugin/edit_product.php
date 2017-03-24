<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$adres = dirname( __FILE__ );
$number = strpos($adres,"content");
$adres = substr($adres, 0, $number);
$adres = $adres.'admin';

echo $adres.'/admin.php?page=glowna-MyFirstPlugin' ;
 