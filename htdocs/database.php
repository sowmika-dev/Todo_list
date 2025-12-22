<?php
$configFile = __DIR__ . '/../workspace/config.json';

if(!is_readable($configFile)) {
    die('Database config file not found');
}

$config = json_decode(file_get_contents($configFile),true);

if(!$config){
    die('Invalid database config file');
}

$conn = mysqli_connect(
    $config['host'],
    $config['user'],
    $config['pass'],
    $config['db']
);

if(!$conn) {
    die("database connection failed".mysqli_connect_error());
}

return $conn;