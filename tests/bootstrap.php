<?php

$_SERVER = [];
$_SERVER['REMOTE_ADDR'] = '1.2.3.4';
$_SERVER['SERVER_NAME'] = 'dev.test.com';
$_SERVER['SCRIPT_NAME'] = 'bootstrap.php';

date_default_timezone_set('UTC');

include "../php-capitalization.php";

function p($val)
{
    echo "
".$val . "
";
}