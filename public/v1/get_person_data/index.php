<?php

require_once __DIR__ . '/../../../api_core/config.php';
require_once __DIR__ . '/../../../api_core/response.php';

$data = require_once __DIR__ . '/../../../api_core/data.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
} else {
    echo Response::json(400, 'error', 'Missing id parameter');
    exit;
}

if($id < 0 || $id > count($data) - 1){
    echo Response::json(400, 'error', 'Person not found');
    exit;
}

echo Response::json(200, 'success', $data[$id]);