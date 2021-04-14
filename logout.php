<?php


use auth\AuthenticationServiceImpl;

include('auth.php');

$service = new AuthenticationServiceImpl();
header("Content-Type: application/json; charset=UTF-8");

$data = ['success' => $service->logout()];
echo json_encode($data);
