<?php
error_reporting(E_ERROR| E_PARSE);

require 'src/whatsprot.class.php';

$username = "919009908344";
$nickname = "lav";
$identiy  = "%9b%eab%9c%d6%af%cc%f9%f34%26%24s%07%90%f7i%24a%1f";
$password = "UTM5eudxCzxvpv0yb6J0ekalTDA="; // The one we got registering the number
$debug = false;

$w = new WhatsProt($username,$identiy,$nickname,$debug);
$w->connect(); // Connect to WhatsApp network
$w->loginWithPassword($password); // logging in with the password we got!

$no="919407388782"; // Number on which you want to send message
$msg="jj"; // Message text
$w->sendMessage($no, $msg);

?>