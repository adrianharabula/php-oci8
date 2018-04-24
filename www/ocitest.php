<?php

$conn = oci_connect('system', 'oracle', 'oracledb/XE');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
} else echo 'succesful';