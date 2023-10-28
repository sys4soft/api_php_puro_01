<?php

require_once __DIR__ . '/../../../api_core/config.php';
require_once __DIR__ . '/../../../api_core/response.php';

$data = require_once __DIR__ . '/../../../api_core/data.php';

$names = [];
foreach($data as $item){
    $names[] = $item['name'];
}

echo Response::json(200, 'success', $names);