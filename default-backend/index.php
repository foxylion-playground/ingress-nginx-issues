<?php

http_response_code(isset($_SERVER['HTTP_X_CODE']) ? $_SERVER['HTTP_X_CODE'] : 404);

echo "<h1>Default backend</h1><pre>";
var_dump($_SERVER);
echo "</pre>";
