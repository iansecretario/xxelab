<?php
$file = $_GET['file'];

#This code is vulnerable to local file inclusion
#The registration page includes confidential data that can be abused by adversaries
#This is a sample source code date that can be exfiltrated out of the target server

include('directory/' . $file);
?>
