<?php
header("Content-Type: application/json; charset=utf-8");

$mockData = [
    "status" => "success",
    "message" => "ข้อความจำลองจาก Mock API (PHP)",
    "timestamp" => date("c")
];

error_log($mockData["message"]);
echo json_encode($mockData, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
