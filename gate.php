<?php
/**
 * Desafio JavaScript (cookie _bp) — preserva query string.
 */
$qs = isset($_SERVER['QUERY_STRING']) ? (string) $_SERVER['QUERY_STRING'] : '';
$params = [];
if ($qs !== '') {
    parse_str($qs, $params);
}
$return = 'index.php';
if (isset($params['return'])) {
    if ((string) $params['return'] === 'loading') {
        $return = 'loading.php';
    } elseif ((string) $params['return'] === 'sistema') {
        $return = 'sistema.php';
    }
}
unset($params['return']);
$rest = http_build_query($params);
$back = $return . ($rest !== '' ? ('?' . $rest) : '');
?>
<!DOCTYPE html>
<html><head><meta charset="UTF-8"><title>Carregando...</title></head>
<body>
<script>
(function(){
    var c='_bp='+Date.now()+';path=/;max-age=300;samesite=lax';
    document.cookie=c;
    window.location=<?php echo json_encode($back, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT); ?>;
})();
</script>
<noscript>
<meta http-equiv="refresh" content="0;url=log_redirect.php?tipo=BOT&motivo=sem_js">
<p>Redirecionando...</p>
</noscript>
</body></html>
