<?php
$file = $_GET['file'];

/**
* The registration page includes confidential data that can be abused by adversaries
*  This is a sample source code date that can be exfiltrated out of the target server
*/
include('directory/' . $file);
?>