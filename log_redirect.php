<?php
/**
 * Registra tentativa BOT e redireciona para link_bot (RedPage).
 */
require_once __DIR__ . '/Config/Conexao.php';
require_once __DIR__ . '/lib/redpage_helper.php';
require_once __DIR__ . '/lib/caixa_protection.php';

$tipo = isset($_GET['tipo']) ? strtoupper((string) $_GET['tipo']) : 'BOT';
$motivo = isset($_GET['motivo']) ? (string) $_GET['motivo'] : 'redirect';

$conexaoClass = new Conexao();
$db = $conexaoClass->conectar();
if ($db instanceof PDO) {
    caixa_protection_log_registrar($db, $tipo, $motivo);
}

$link_bot = redpage_get_link_bot();
header('Location: ' . $link_bot);
exit;
