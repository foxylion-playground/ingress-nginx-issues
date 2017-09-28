<?php

$code = isset($_SERVER['HTTP_X_CODE'];) ? $_SERVER['HTTP_X_CODE']; : 200;
http_response_code($code);

echo "Custom default backend";
echo "Returning error code " . $code . "\n";

echo "Headers:\n";
var_dump(getallheaders());

?>