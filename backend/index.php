<?php
http_response_code(isset($_GET['status']) ? $_GET['status'] : 200);
var_dump($_SERVER);
