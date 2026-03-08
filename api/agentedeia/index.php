<?php

// index.php - Agente de IA - Consulta CPF via Telegram Bot

// CORS Headers
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization, Accept");
header("Content-Type: application/json; charset=utf-8");

// Preflight OPTIONS
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit;
}

// Recebe CPF por GET ou POST
$cpf = $_POST['cpf'] ?? $_GET['cpf'] ?? null;

if (!$cpf) {
    echo json_encode([
        "status" => false,
        "erro" => "CPF não enviado."
    ]);
    exit;
}

// Sanitiza CPF
$cpf = preg_replace('/\D/', '', $cpf);

// Caminho do script Node.js
$scriptPath = __DIR__ . "/cpf-check.js";

// Executa o comando e captura saída e erros
$cmd = "node $scriptPath $cpf";
$output = shell_exec($cmd . " 2>&1");

echo json_encode([
    "status" => true,
    "cpf" => $cpf,
    "exec_output" => $output
]);

?>
