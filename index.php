<?php

$serverName = env("DB_HOST", "localhost");
$databaseName = env("DB_DATABASE", "6ptEioDydkc549SB");
$username = env("DB_USERNAME", "uMVRXLswoeZpJ7k4");
$password = env("DB_PASSWORD", "pN872JWvp0uXlVTLx");
try {
    $conn = new PDO("mysql:host=$serverName;dbname=$databaseName", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "数据库链接成功";
} catch (PDOException $e) {
    echo "数据库链接失败: " . $e->getMessage();
}
function env($key, $default = null)
{
    $value = getenv($key);
    if ($value === false) {
        return $default;
    }
    return $value;
}