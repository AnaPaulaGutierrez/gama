<?php

if(isset($_POST['processa.php']))
   {

    print_r($_POST['q2_nomeCompleto']);
    print_r($_POST['q60_profissao']);
    print_r($_POST['q8_sexo8']);
    print_r($_POST['q51_euMe51']);
    print_r($_POST['q9_endereco']);
    print_r($_POST['q13_telefoneFixo13']);
    print_r($_POST['q10_bairro']);
    print_r($_POST['q11_cidade']);
    print_r($_POST['q15_celular15']);
    print_r($_POST['q18_identidade']);
    print_r($_POST['q19_cpf']);
    print_r($_POST['q30_ultimaEmpresa']);
    print_r($_POST['q31_funcao']);

    include_once('config.php');
    
    $nome = $_POST['q2_nomeCompleto'];
    $profissao = $_POST['q60_profissao'];
    $sexo = $_POST['q60_profissao'];
    $meconsidero = $_POST['q51_euMe51'];
    $telefone = $_POST['q13_telefoneFixo13'];
    $bairro = $_POST['q10_bairro'];
    $cidade = $_POST['q11_cidade'];
    $celular = $_POST['q15_celular15'];
    $identidade = $_POST['q18_identidade'];
    $cpf = $_POST['q19_cpf'];
    $ultimaempresa = $_POST['q30_ultimaEmpresa'];
    $funcao = $_POST['q31_funcao'];
    

   
    $result = mysqli_query($conexao,"INSERT INTO usuarios(nome,profissao,sexo,eu_considero,endereco,bairro,telefone,cidade,identidade,cpf,ultima_empresa,funcao)VALUES ('$nome','$profissao','$sexo','$meconsidero','$telefone','$bairro','$cidade','$celular','$identidade','$cpf','$ultimaempresa','$funcao')");
     
  }
?>
       
 
         
 <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html class="supernova"><head>
<form action="processa.php" method="POST">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="alternate" type="application/json+oembed" href="https://www.jotform.com/oembed/?format=json&amp;url=https%3A%2F%2Fform.jotform.com%2F212371175511649" title="oEmbed Form">
<link rel="alternate" type="text/xml+oembed" href="https://www.jotform.com/oembed/?format=xml&amp;url=https%3A%2F%2Fform.jotform.com%2F212371175511649" title="oEmbed Form">
<meta property="og:title" content="Formulário CAB" >
<meta property="og:url" content="https://form.jotform.com/212371175511649" >
<meta property="og:description" content="Please click the link to complete this form." >
<meta name="slack-app-id" content="AHNMASS8M">
<link rel="shortcut icon" href="https://cdn.jotfor.ms/favicon.ico">
<link rel="canonical" href="https://form.jotform.com/212371175511649" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=1" />
<meta name="HandheldFriendly" content="true" />
<title> Barbie </title>
<link href="https://cdn01.jotfor.ms/static/formCss.css?3.3.27332" rel="stylesheet" type="text/css" />
<style type="text/css">@media print{.form-section{display:inline!important}.form-pagebreak{display:none!important}.form-section-closed{height:auto!important}.page-section{position:initial!important}}</style>
<link type="text/css" rel="stylesheet" href="https://cdn02.jotfor.ms/css/styles/nova.css?3.3.27332" />
<link type="text/css" rel="stylesheet" href="https://cdn03.jotfor.ms/themes/CSS/566a91c2977cdfcd478b4567.css?themeRevisionID=5f6c4c83346ec05354558fe8"/>
<link type="text/css" rel="stylesheet" href="https://cdn01.jotfor.ms/css/styles/payment/payment_feature.css?3.3.27332" />
<style type="text/css">
    .form-label-left{
        width:150px;
    }
    .form-line{
        padding-top:5px;
        padding-bottom:5px;
    }
    .form-label-right{
        width:150px;
    }
    body, html{
        margin:0;
        padding:0;
        background:#ffffff;
    }

    .form-all{
        margin:0px auto;
        padding-top:0px;
        width:630px;
        color:#e01084 !important;
        font-family:"Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", Verdana, sans-serif;
        font-size:14px;
    }
    .form-radio-item label, .form-checkbox-item label, .form-grading-label, .form-header{
        color: #555;
    }

</style>

<style type="text/css" id="form-designer-style">
    /* Injected CSS Code */
@import "https://fonts.googleapis.com/css?family=Pacifico:light,lightitalic,normal,italic,bold,bolditalic";
.form-all:after {
  content: "";
  display: table;
  clear: both;
}
.form-all {
  font-family: "Lucida Grande", sans-serif;
}
.form-all {
  width: 630px;
}
.form-label-left,
.form-label-right {
  width: 150px;
}
.form-label {
  white-space: normal;
}
.form-label.form-label-auto {
  display: block;
  float: none;
  word-break: break-word;
  text-align: left;
}
.form-label-left {
  display: inline-block;
  white-space: normal;
  float: none;
  text-align: left;
}
.form-label-right {
  display: inline-block;
  white-space: normal;
  float: none;
  text-align: right;
}
.form-label-top {
  white-space: normal;
  display: block;
  float: none;
  text-align: left;
}
.form-radio-item label:before {
  top: 0;
}
.form-all {
  font-size: 14px;
}
.form-label {
  font-weight: bold;
}
.form-checkbox-item label,
.form-radio-item label {
  font-weight: normal;
}
.supernova {
  background-color: #f09ce2;
  background-color: rgba(122, 81, 111, 0.75);
}
.supernova body {
  background-color: transparent;
}
/*
@width30: (unit(@formWidth, px) + 60px);
@width60: (unit(@formWidth, px)+ 120px);
@width90: (unit(@formWidth, px)+ 180px);
*/
/* | */
@media screen and (min-width: 480px) {
  .supernova .form-all {
    border: 1px solid rgba(91, 61, 83, 0.75);
    box-shadow: 0 3px 9px rgba(0, 0, 0, 0.1);
  }
}
/* | */
/* | */
@media screen and (max-width: 480px) {
  .jotform-form .form-all {
    margin: 0;
    width: 100%;
  }
}
/* | */
/* | */
@media screen and (min-width: 480px) and (max-width: 767px) {
  .jotform-form .form-all {
    margin: 0;
    width: 100%;
  }
}
/* | */
/* | */
@media screen and (min-width: 480px) and (max-width: 629px) {
  .jotform-form .form-all {
    margin: 0;
    width: 100%;
  }
}
/* | */
/* | */
@media screen and (min-width: 768px) {
  .jotform-form {
    padding: 60px 0;
  }
}
/* | */
/* | */
@media screen and (max-width: 629px) {
  .jotform-form .form-all {
    margin: 0;
    width: 100%;
  }
}
/* | */
.supernova .form-all,
.form-all {
  background-color: #f09ce2;
  border: 1px solid transparent;
}
.form-header-group {
  border-color: #e970d5;
}
.form-matrix-table tr {
  border-color: #e970d5;
}
.form-matrix-table tr:nth-child(2n) {
  background-color: #ed86dc;
}
.form-all {
  color: #7a6a53;
}
.form-header-group .form-header {
  color: #7a6a53;
}
.form-header-group .form-subHeader {
  color: #988468;
}
.form-sub-label {
  color: #988468;
}
.form-label-top,
.form-label-left,
.form-label-right,
.form-html {
  color: #7a6a53;
}
.form-checkbox-item label,
.form-radio-item label {
  color: #988468;
}
.form-line.form-line-active {
  -webkit-transition-property: all;
  -moz-transition-property: all;
  -ms-transition-property: all;
  -o-transition-property: all;
  transition-property: all;
  -webkit-transition-duration: 0.3s;
  -moz-transition-duration: 0.3s;
  -ms-transition-duration: 0.3s;
  -o-transition-duration: 0.3s;
  transition-duration: 0.3s;
  -webkit-transition-timing-function: ease;
  -moz-transition-timing-function: ease;
  -ms-transition-timing-function: ease;
  -o-transition-timing-function: ease;
  transition-timing-function: ease;
  background-color: #ffffe0;
}
/* omer */
.form-radio-item,
.form-checkbox-item {
  padding-bottom: 0px !important;
}
.form-radio-item:last-child,
.form-checkbox-item:last-child {
  padding-bottom: 0;
}
/* omer */
.form-single-column .form-checkbox-item,
.form-single-column .form-radio-item {
  width: 100%;
}
.form-checkbox-item .editor-container div,
.form-radio-item .editor-container div {
  position: relative;
}
.form-checkbox-item .editor-container div:before,
.form-radio-item .editor-container div:before {
  display: inline-block;
  vertical-align: middle;
  box-sizing: border-box;
  left: 0;
  width: 18px;
  height: 18px;
}
.form-checkbox-item,
.form-radio-item {
  padding-left: 2px;
}
.form-checkbox-item input,
.form-radio-item input {
  margin-top: 2px;
}
.supernova {
  height: 100%;
  background-repeat: no-repeat;
  background-attachment: scroll;
  background-position: center top;
  background-repeat: repeat;
}
.supernova {
  background-image: none;
  background-image: url("https://www.jotform.com/uploads/anapaulaiorram/form_files/BB_2016_PatternBGs_1718x547_Homepage_tcm892-117125.612729969e9833.41278100.png");
}
#stage {
  background-image: none;
  background-image: url("https://www.jotform.com/uploads/anapaulaiorram/form_files/BB_2016_PatternBGs_1718x547_Homepage_tcm892-117125.612729969e9833.41278100.png");
}
/* | */
.form-all {
  background-repeat: no-repeat;
  background-attachment: scroll;
  background-position: center top;
  background-repeat: repeat;
}
.form-header-group {
  background-repeat: no-repeat;
  background-attachment: scroll;
  background-position: center top;
}
.form-line {
  margin-top: 5px;
  margin-bottom: 5px;
}
.form-line {
  padding: 12px 36px;
}
.form-all .form-textbox,
.form-all .form-radio-other-input,
.form-all .form-checkbox-other-input,
.form-all .form-captcha input,
.form-all .form-spinner input,
.form-all .form-pagebreak-back,
.form-all .form-pagebreak-next,
.form-all .qq-upload-button,
.form-all .form-error-message {
  border-radius: 0px;
}
.form-all .form-textarea {
  border-radius: 0px;
}
.form-all .qq-upload-button,
.form-all .form-submit-button,
.form-all .form-submit-reset,
.form-all .form-submit-print {
  font-size: 1em;
  padding: 9px 15px;
  font-family: "Lucida Grande", sans-serif;
  font-size: 14px;
  font-weight: normal;
}
.form-all .form-pagebreak-back,
.form-all .form-pagebreak-next {
  font-size: 1em;
  padding: 9px 15px;
  font-family: "Lucida Grande", sans-serif;
  font-size: 14px;
  font-weight: normal;
}
/*
& when ( @buttonFontType = google ) {
	@import (css) "@{buttonFontLink}";
}
*/
h2.form-header {
  line-height: 1.618em;
  font-size: 1.714em;
}
h2 ~ .form-subHeader {
  line-height: 1.5em;
  font-size: 1.071em;
}
.form-header-group {
  text-align: left;
}
/*.form-dropdown,
.form-radio-item,
.form-checkbox-item,
.form-radio-other-input,
.form-checkbox-other-input,*/
.form-captcha input,
.form-spinner input,
.form-error-message {
  padding: 4px 3px 2px 3px;
}
.form-header-group {
  font-family: "Pacifico", sans-serif;
}
.form-section {
  padding: 0px 0px 0px 0px;
}
.form-header-group {
  margin: 12px 36px 12px 36px;
}
.form-header-group {
  padding: 24px 0px 24px 0px;
}
.form-header-group .form-header,
.form-header-group .form-subHeader {
  color: #e80573;
}
.form-textbox,
.form-textarea {
  padding: 4px 3px 2px 3px;
}
.form-textbox,
.form-textarea,
.form-radio-other-input,
.form-checkbox-other-input,
.form-captcha input,
.form-spinner input {
  background-color: #ffffff;
}
.form-matrix-row-headers,
.form-matrix-column-headers,
.form-matrix-values {
  padding: 4px;
}
[data-type="control_dropdown"] .form-input,
[data-type="control_dropdown"] .form-input-wide {
  width: 150px;
}
.form-label {
  font-family: "Lucida Grande", sans-serif;
}
li[data-type="control_image"] div {
  text-align: left;
}
li[data-type="control_image"] img {
  border: none;
  border-width: 0px !important;
  border-style: solid !important;
  border-color: false !important;
}
.form-line-column {
  width: auto;
}
.form-line-error {
  overflow: hidden;
  -webkit-transition-property: none;
  -moz-transition-property: none;
  -ms-transition-property: none;
  -o-transition-property: none;
  transition-property: none;
  -webkit-transition-duration: 0.3s;
  -moz-transition-duration: 0.3s;
  -ms-transition-duration: 0.3s;
  -o-transition-duration: 0.3s;
  transition-duration: 0.3s;
  -webkit-transition-timing-function: ease;
  -moz-transition-timing-function: ease;
  -ms-transition-timing-function: ease;
  -o-transition-timing-function: ease;
  transition-timing-function: ease;
  background-color: #fff4f4;
}
.form-line-error .form-error-message {
  background-color: #ff3200;
  clear: both;
  float: none;
}
.form-line-error .form-error-message .form-error-arrow {
  border-bottom-color: #ff3200;
}
.form-line-error input:not(#coupon-input),
.form-line-error textarea,
.form-line-error .form-validation-error {
  border: 1px solid #ff3200;
  box-shadow: 0 0 3px #ff3200;
}
.form-all {
  position: relative;
}
.form-all:before {
  content: "";
  background-image: url("https://www.jotform.com/uploads/anapaulaiorram/form_files/BarbieLogo_flat_138x74_tcm892-114743.612729a4591031.98345174.png");
  display: inline-block;
  height: 74px;
  position: absolute;
  background-size: 138px 74px;
  background-repeat: no-repeat;
  width: 100%;
}
.form-all {
  margin-top: 84px !important;
}
.form-all:before {
  top: -84px;
  background-position: top center;
}
.ie-8 .form-all {
  margin-top: auto;
  margin-top: initial;
}
.ie-8 .form-all:before {
  display: none;
}
[data-type="control_clear"] {
  display: none;
}
/* | */
@media screen and (max-width: 480px), screen and (max-device-width: 767px) and (orientation: portrait), screen and (max-device-width: 415px) and (orientation: landscape) {
  .testOne {
    letter-spacing: 0;
  }
  .form-all {
    border: 0;
    max-width: initial;
  }
  .form-sub-label-container {
    width: 100%;
    margin: 0;
    margin-right: 0;
    float: left;
    box-sizing: border-box;
  }
  span.form-sub-label-container + span.form-sub-label-container {
    margin-right: 0;
  }
  .form-sub-label {
    white-space: normal;
  }
  .form-address-table td,
  .form-address-table th {
    padding: 0 1px 10px;
  }
  .form-submit-button,
  .form-submit-print,
  .form-submit-reset {
    width: 100%;
    margin-left: 0!important;
  }
  div[id*=at_] {
    font-size: 14px;
    font-weight: 700;
    height: 8px;
    margin-top: 6px;
  }
  .showAutoCalendar {
    width: 20px;
  }
  img.form-image {
    max-width: 100%;
    height: auto;
  }
  .form-matrix-row-headers {
    width: 100%;
    word-break: break-all;
    min-width: 80px;
  }
  .form-collapse-table,
  .form-header-group {
    margin: 0;
  }
  .form-collapse-table {
    height: 100%;
    display: inline-block;
    width: 100%;
  }
  .form-collapse-hidden {
    display: none !important;
  }
  .form-input {
    width: 100%;
  }
  .form-label {
    width: 100% !important;
  }
  .form-label-left,
  .form-label-right {
    display: block;
    float: none;
    text-align: left;
    width: auto!important;
  }
  .form-line,
  .form-line.form-line-column {
    padding: 2% 5%;
    box-sizing: border-box;
  }
  input[type=text],
  input[type=email],
  input[type=tel],
  textarea {
    width: 100%;
    box-sizing: border-box;
    max-width: initial !important;
  }
  .form-radio-other-input,
  .form-checkbox-other-input {
    max-width: 55% !important;
  }
  .form-dropdown,
  .form-textarea,
  .form-textbox {
    width: 100%!important;
    box-sizing: border-box;
  }
  .form-input,
  .form-input-wide,
  .form-textarea,
  .form-textbox,
  .form-dropdown {
    max-width: initial!important;
  }
  .form-checkbox-item:not(#foo),
  .form-radio-item:not(#foo) {
    width: 100%;
  }
  .form-address-city,
  .form-address-line,
  .form-address-postal,
  .form-address-state,
  .form-address-table,
  .form-address-table .form-sub-label-container,
  .form-address-table select,
  .form-input {
    width: 100%;
  }
  div.form-header-group {
    padding: 24px 0px !important;
    margin: 0 12px 2% !important;
    margin-left: 5%!important;
    margin-right: 5%!important;
    box-sizing: border-box;
  }
  div.form-header-group.hasImage img {
    max-width: 100%;
  }
  [data-type="control_button"] {
    margin-bottom: 0 !important;
  }
  [data-type=control_fullname] .form-sub-label-container {
    width: 48%;
  }
  [data-type=control_fullname] .form-sub-label-container:first-child {
    margin-right: 4%;
  }
  [data-type=control_phone] .form-sub-label-container {
    width: 65%;
    margin-right: 0;
    margin-left: 0;
    float: left;
  }
  [data-type=control_phone] .form-sub-label-container:first-child {
    width: 31%;
    margin-right: 4%;
  }
  [data-type=control_datetime] .allowTime-container {
    width: 100%;
  }
  [data-type=control_datetime] .allowTime-container .form-sub-label-container {
    width: 24%!important;
    margin-left: 6%;
    margin-right: 0;
  }
  [data-type=control_datetime] .allowTime-container .form-sub-label-container:first-child {
    margin-left: 0;
  }
  [data-type=control_datetime] span + span + span > span:first-child {
    display: block;
    width: 100% !important;
  }
  [data-type=control_birthdate] .form-sub-label-container,
  [data-type=control_time] .form-sub-label-container {
    width: 27.3%!important;
    margin-right: 6% !important;
  }
  [data-type=control_time] .form-sub-label-container:last-child {
    width: 33.3%!important;
    margin-right: 0 !important;
  }
  .form-pagebreak-back-container,
  .form-pagebreak-next-container {
    min-height: 1px;
    width: 50% !important;
  }
  .form-pagebreak-back,
  .form-pagebreak-next,
  .form-product-item.hover-product-item {
    width: 100%;
  }
  .form-pagebreak-back-container {
    padding: 0;
    text-align: right;
  }
  .form-pagebreak-next-container {
    padding: 0;
    text-align: left;
  }
  .form-pagebreak {
    margin: 0 auto;
  }
  .form-buttons-wrapper {
    margin: 0!important;
    margin-left: 0!important;
  }
  .form-buttons-wrapper button {
    width: 100%;
  }
  .form-buttons-wrapper .form-submit-print {
    margin: 0 !important;
  }
  table {
    width: 100%!important;
    max-width: initial!important;
  }
  table td + td {
    padding-left: 3%;
  }
  .form-checkbox-item,
  .form-radio-item {
    white-space: normal!important;
  }
  .form-checkbox-item input,
  .form-radio-item input {
    width: auto;
  }
  .form-collapse-table {
    margin: 0 5%;
    display: block;
    zoom: 1;
    width: auto;
  }
  .form-collapse-table:before,
  .form-collapse-table:after {
    display: table;
    content: '';
    line-height: 0;
  }
  .form-collapse-table:after {
    clear: both;
  }
  .fb-like-box {
    width: 98% !important;
  }
  .form-error-message {
    clear: both;
    bottom: -10px;
  }
  .date-separate,
  .phone-separate {
    display: none;
  }
  .custom-field-frame,
  .direct-embed-widgets,
  .signature-pad-wrapper {
    width: 100% !important;
  }
}
/* | */

/*PREFERENCES STYLE*/
    .form-all {
      font-family: Lucida Grande, sans-serif;
    }
    .form-all .qq-upload-button,
    .form-all .form-submit-button,
    .form-all .form-submit-reset,
    .form-all .form-submit-print {
      font-family: Lucida Grande, sans-serif;
    }
    .form-all .form-pagebreak-back-container,
    .form-all .form-pagebreak-next-container {
      font-family: Lucida Grande, sans-serif;
    }
    .form-header-group {
      font-family: Lucida Grande, sans-serif;
    }
    .form-label {
      font-family: Lucida Grande, sans-serif;
    }
  
    .form-label.form-label-auto {
      
    display: block;
    float: none;
    text-align: left;
    width: 100%;
  
    }
  
    .form-line {
      margin-top: 5px;
      margin-bottom: 5px;
    }
  
    .form-all {
      max-width: 630px;
      width: 100%;
    }
  
    .form-label.form-label-left,
    .form-label.form-label-right,
    .form-label.form-label-left.form-label-auto,
    .form-label.form-label-right.form-label-auto {
      width: 150px;
    }
  
    .form-all {
      font-size: 14px
    }
    .form-all .qq-upload-button,
    .form-all .qq-upload-button,
    .form-all .form-submit-button,
    .form-all .form-submit-reset,
    .form-all .form-submit-print {
      font-size: 14px
    }
    .form-all .form-pagebreak-back-container,
    .form-all .form-pagebreak-next-container {
      font-size: 14px
    }
  
    .supernova .form-all, .form-all {
      background-color: #ffffff;
    }
  
    .form-all {
      color: #e01084;
    }
    .form-header-group .form-header {
      color: #e01084;
    }
    .form-header-group .form-subHeader {
      color: #e01084;
    }
    .form-label-top,
    .form-label-left,
    .form-label-right,
    .form-html,
    .form-checkbox-item label,
    .form-radio-item label {
      color: #e01084;
    }
    .form-sub-label {
      color: #fa2a9e;
    }
  
    .supernova {
      background-color: undefined;
    }
    .supernova body {
      background: transparent;
    }
  
    .form-textbox,
    .form-textarea,
    .form-dropdown,
    .form-radio-other-input,
    .form-checkbox-other-input,
    .form-captcha input,
    .form-spinner input {
      background-color: undefined;
    }
  
      .supernova {
        height: 100%;
        background-repeat: repeat;
        background-attachment: scroll;
        background-position: center top;
      }
      .supernova {
        background-image: url("https://www.jotform.com/uploads/anapaulaiorram/form_files/BB_2016_PatternBGs_1718x547_Homepage_tcm892-117125.61273e53730a10.85612284.png");
      }
      #stage {
        background-image: url("https://www.jotform.com/uploads/anapaulaiorram/form_files/BB_2016_PatternBGs_1718x547_Homepage_tcm892-117125.61273e53730a10.85612284.png");
      }
    
    .form-all {
      background-image: none;
    }
  
    .form-all {
      position: relative;
    }
    .form-all:before {
      content: "";
      background-image: url("https://www.jotform.com/uploads/anapaulaiorram/form_files/BarbieLogo_flat_138x74_tcm892-114743.61273e3ddf8598.36413389.png");
      display: inline-block;
      height: 74px;
      position: absolute;
      background-size: 138px 74px;
      background-repeat: no-repeat;
      width: 100%;
    }
    .form-all {
      margin-top: 84px !important;
    }
    .form-all:before {
      top: -84px;
      background-position: top center;
    }
           
  .ie-8 .form-all:before { display: none; }
  .ie-8 {
    margin-top: auto;
    margin-top: initial;
  }
  
  /*PREFERENCES STYLE*//*__INSPECT_SEPERATOR__*/
.form-header-group {
    margin-bottom : 10px;
}

.form-header-group {
    background : none;
    padding : 10px 0;
}

.form-textbox, .form-dropdown, .form-textarea {
    padding : 6px;
    border : 1px solid #DDD;
    border-radius : 2px;
    background : #F9F9F9;
}

.form-label-top {
    margin-bottom : 2px;
}


    /* Injected CSS Code */
</style>

<link type="text/css" rel="stylesheet" href="https://cdn02.jotfor.ms/css/styles/buttons/form-submit-button-simple_pink.css?3.3.27332"/>
<script src="https://cdn03.jotfor.ms/static/prototype.forms.js" type="text/javascript"></script>
<script src="https://cdn01.jotfor.ms/static/jotform.forms.js?3.3.27332" type="text/javascript"></script>
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/punycode/1.4.1/punycode.js"></script>
<script type="text/javascript">	JotForm.newDefaultTheme = false;
	JotForm.extendsNewTheme = false;
	JotForm.newPaymentUIForNewCreatedForms = false;

	JotForm.init(function(){
	/*INIT-START*/
if (window.JotForm && JotForm.accessible) $('input_2').setAttribute('tabindex',0);
if (window.JotForm && JotForm.accessible) $('input_60').setAttribute('tabindex',0);
if (window.JotForm && JotForm.accessible) $('input_9').setAttribute('tabindex',0);
      setTimeout(function() {
          $('input_9').hint(' ex. Nome da Rua, 56. Bloco 2, AP 301');
       }, 20);
if (window.JotForm && JotForm.accessible) $('input_10').setAttribute('tabindex',0);
if (window.JotForm && JotForm.accessible) $('input_11').setAttribute('tabindex',0);
if (window.JotForm && JotForm.accessible) $('input_12').setAttribute('tabindex',0);
if (window.JotForm && JotForm.accessible) $('input_13').setAttribute('tabindex',0);
if (window.JotForm && JotForm.accessible) $('input_14').setAttribute('tabindex',0);
if (window.JotForm && JotForm.accessible) $('input_15').setAttribute('tabindex',0);
if (window.JotForm && JotForm.accessible) $('input_16').setAttribute('tabindex',0);
      setTimeout(function() {
          $('input_28').hint('ex: myname@example.com');
       }, 20);
if (window.JotForm && JotForm.accessible) $('input_18').setAttribute('tabindex',0);
if (window.JotForm && JotForm.accessible) $('input_19').setAttribute('tabindex',0);
if (window.JotForm && JotForm.accessible) $('input_27').setAttribute('tabindex',0);
      JotForm.setCustomHint( 'input_27', 'Detalhes do(s) Curso(s)' );
      JotForm.description('input_27', 'Informe o curso e instituição');
if (window.JotForm && JotForm.accessible) $('input_30').setAttribute('tabindex',0);
if (window.JotForm && JotForm.accessible) $('input_31').setAttribute('tabindex',0);
if (window.JotForm && JotForm.accessible) $('input_34').setAttribute('tabindex',0);
if (window.JotForm && JotForm.accessible) $('input_35').setAttribute('tabindex',0);
      JotForm.description('input_35', 'Profissional e Pessoal');
if (window.JotForm && JotForm.accessible) $('input_36').setAttribute('tabindex',0);
      JotForm.description('input_47', 'Seja o que você quiser!');
	/*INIT-END*/
	});

   JotForm.prepareCalculationsOnTheFly([null,{"name":"dadosPessoais","qid":"1","text":"DADOS PESSOAIS","type":"control_head"},{"name":"nomeCompleto","qid":"2","subLabel":"","text":"Nome Completo","type":"control_textbox"},null,{"name":"dataDe4","qid":"4","text":"Data de Nascimento","type":"control_birthdate"},null,null,{"name":"estadoCivil7","qid":"7","text":"Estado Civil","type":"control_dropdown"},{"name":"sexo8","qid":"8","text":"Sexo","type":"control_dropdown"},{"name":"endereco","qid":"9","text":"Endereco","type":"control_textbox"},{"name":"bairro","qid":"10","text":"Bairro","type":"control_textbox"},{"name":"cidade","qid":"11","text":"Cidade","type":"control_textbox"},{"name":"cep12","qid":"12","text":"Cep","type":"control_textbox"},{"name":"telefoneFixo13","qid":"13","text":"Telefone Fixo 1","type":"control_textbox"},{"name":"telefoneFixo14","qid":"14","text":"Telefone Fixo 2","type":"control_textbox"},{"name":"celular15","qid":"15","text":"Celular","type":"control_textbox"},{"name":"contato16","qid":"16","text":"Contato","type":"control_textbox"},{"name":"Documentos","qid":"17","text":" DOCUMENTOS","type":"control_head"},{"name":"identidade","qid":"18","text":"Identidade","type":"control_textbox"},{"name":"cpf","qid":"19","text":"CPF","type":"control_textbox"},{"name":"possuiVeiculo","qid":"20","text":"Possui Veiculo","type":"control_dropdown"},{"name":"habilitacao21","qid":"21","text":"Habilitacao","type":"control_dropdown"},{"name":"cliquePara22","qid":"22","text":"ESCOLARIDADE","type":"control_head"},{"name":"segndoGrau","qid":"23","text":"Segndo Grau","type":"control_dropdown"},{"name":"cursoTecnico","qid":"24","text":"Curso Tecnico","type":"control_dropdown"},{"name":"nivelSuperior","qid":"25","text":"Nivel Superior","type":"control_dropdown"},{"name":"posGraduacao","qid":"26","text":"Pos Graduacao","type":"control_dropdown"},{"description":"Informe o curso e instituicao","name":"especificacao","qid":"27","subLabel":"","text":"Especificacao","type":"control_textarea"},{"name":"email28","qid":"28","text":"E-mail","type":"control_email"},{"name":"cliquePara29","qid":"29","text":"EXPERIENCIA PROFISSIONAL","type":"control_head"},{"name":"ultimaEmpresa","qid":"30","text":"Ultima Empresa ou Atual Emprego","type":"control_textbox"},{"name":"funcao","qid":"31","text":"Funcao","type":"control_textbox"},{"name":"dataDe","qid":"32","text":"Data de Admissao","type":"control_birthdate"},{"name":"dataDe33","qid":"33","text":"Data de Demissao","type":"control_birthdate"},{"name":"atividadesExercidas","qid":"34","text":"Atividades Exercidas","type":"control_textarea"},{"description":"Profissional e Pessoal","name":"objetivosPara","qid":"35","text":"Objetivos para o Futuro","type":"control_textarea"},{"name":"conheceA","qid":"36","text":"Conhece a historia da Barbie? O Que Sabe ?","type":"control_textarea"},null,null,null,null,null,null,null,{"name":"image44","qid":"44","text":"Image","type":"control_image"},{"name":"image45","qid":"45","text":"Image","type":"control_image"},{"name":"image46","qid":"46","text":"Image","type":"control_image"},{"description":"Seja o que voce quiser!","labelText":"","name":"ycbafooter_br_tcm89211981161273bf29a1de216053109","qid":"47","text":"YCBA-Footer_BR_tcm892-119811.61273bf29a1de2.16053109","type":"control_image"},null,null,null,{"description":"","name":"euMe51","qid":"51","subLabel":"","text":"Eu me considero","type":"control_dropdown"},null,null,null,null,null,null,null,{"name":"enviar","qid":"59","text":"Enviar","type":"control_button"},{"description":"","name":"profissao","qid":"60","subLabel":"","text":"Profissao","type":"control_textbox"}]);
   setTimeout(function() {
JotForm.paymentExtrasOnTheFly([null,{"name":"dadosPessoais","qid":"1","text":"DADOS PESSOAIS","type":"control_head"},{"name":"nomeCompleto","qid":"2","subLabel":"","text":"Nome Completo","type":"control_textbox"},null,{"name":"dataDe4","qid":"4","text":"Data de Nascimento","type":"control_birthdate"},null,null,{"name":"estadoCivil7","qid":"7","text":"Estado Civil","type":"control_dropdown"},{"name":"sexo8","qid":"8","text":"Sexo","type":"control_dropdown"},{"name":"endereco","qid":"9","text":"Endereco","type":"control_textbox"},{"name":"bairro","qid":"10","text":"Bairro","type":"control_textbox"},{"name":"cidade","qid":"11","text":"Cidade","type":"control_textbox"},{"name":"cep12","qid":"12","text":"Cep","type":"control_textbox"},{"name":"telefoneFixo13","qid":"13","text":"Telefone Fixo 1","type":"control_textbox"},{"name":"telefoneFixo14","qid":"14","text":"Telefone Fixo 2","type":"control_textbox"},{"name":"celular15","qid":"15","text":"Celular","type":"control_textbox"},{"name":"contato16","qid":"16","text":"Contato","type":"control_textbox"},{"name":"Documentos","qid":"17","text":" DOCUMENTOS","type":"control_head"},{"name":"identidade","qid":"18","text":"Identidade","type":"control_textbox"},{"name":"cpf","qid":"19","text":"CPF","type":"control_textbox"},{"name":"possuiVeiculo","qid":"20","text":"Possui Veiculo","type":"control_dropdown"},{"name":"habilitacao21","qid":"21","text":"Habilitacao","type":"control_dropdown"},{"name":"cliquePara22","qid":"22","text":"ESCOLARIDADE","type":"control_head"},{"name":"segndoGrau","qid":"23","text":"Segndo Grau","type":"control_dropdown"},{"name":"cursoTecnico","qid":"24","text":"Curso Tecnico","type":"control_dropdown"},{"name":"nivelSuperior","qid":"25","text":"Nivel Superior","type":"control_dropdown"},{"name":"posGraduacao","qid":"26","text":"Pos Graduacao","type":"control_dropdown"},{"description":"Informe o curso e instituicao","name":"especificacao","qid":"27","subLabel":"","text":"Especificacao","type":"control_textarea"},{"name":"email28","qid":"28","text":"E-mail","type":"control_email"},{"name":"cliquePara29","qid":"29","text":"EXPERIENCIA PROFISSIONAL","type":"control_head"},{"name":"ultimaEmpresa","qid":"30","text":"Ultima Empresa ou Atual Emprego","type":"control_textbox"},{"name":"funcao","qid":"31","text":"Funcao","type":"control_textbox"},{"name":"dataDe","qid":"32","text":"Data de Admissao","type":"control_birthdate"},{"name":"dataDe33","qid":"33","text":"Data de Demissao","type":"control_birthdate"},{"name":"atividadesExercidas","qid":"34","text":"Atividades Exercidas","type":"control_textarea"},{"description":"Profissional e Pessoal","name":"objetivosPara","qid":"35","text":"Objetivos para o Futuro","type":"control_textarea"},{"name":"conheceA","qid":"36","text":"Conhece a historia da Barbie? O Que Sabe ?","type":"control_textarea"},null,null,null,null,null,null,null,{"name":"image44","qid":"44","text":"Image","type":"control_image"},{"name":"image45","qid":"45","text":"Image","type":"control_image"},{"name":"image46","qid":"46","text":"Image","type":"control_image"},{"description":"Seja o que voce quiser!","labelText":"","name":"ycbafooter_br_tcm89211981161273bf29a1de216053109","qid":"47","text":"YCBA-Footer_BR_tcm892-119811.61273bf29a1de2.16053109","type":"control_image"},null,null,null,{"description":"","name":"euMe51","qid":"51","subLabel":"","text":"Eu me considero","type":"control_dropdown"},null,null,null,null,null,null,null,{"name":"enviar","qid":"59","text":"Enviar","type":"control_button"},{"description":"","name":"profissao","qid":"60","subLabel":"","text":"Profissao","type":"control_textbox"}]);}, 20); 
</script>
</head>
<body>
<form class="jotform-form" action="https://submit.jotform.com/submit/212371175511649/" method="post" name="form_212371175511649" id="212371175511649" accept-charset="utf-8" autocomplete="on">
  <input type="hidden" name="formID" value="212371175511649" />
  <input type="hidden" id="JWTContainer" value="" />
  <input type="hidden" id="cardinalOrderNumber" value="" />
  <div role="main" class="form-all">
    <ul class="form-section page-section">
      <li id="cid_1" class="form-input-wide" data-type="control_head">
        <div style="display:table;width:100%">
          <div class="form-header-group hasImage header-default" data-imagealign="Left">
            <div class="header-logo">
              <img src="https://www.jotform.com/uploads/anapaulaiorram/form_files/barbie%20.61272d515212c7.69381365.png" alt="" width="82" class="header-logo-left" />
            </div>
            <div class="header-text httal htvam">
              <h2 id="header_1" class="form-header" data-component="header">
                DADOS PESSOAIS
              </h2>
            </div>
          </div>
        </div>
      </li>
      <li class="form-line form-line-column form-col-1 jf-required" data-type="control_textbox" id="id_2">
        <label class="form-label form-label-top" id="label_2" for="input_2">
          Nome Completo
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_2" class="form-input-wide jf-required">
          <input type="text" id="input_2" name="q2_nomeCompleto" data-type="input-textbox" class="form-textbox validate[required]" size="35" value="" placeholder=" " data-component="textbox" aria-labelledby="label_2" required="" />
        </div>
      </li>
      <li class="form-line form-line-column form-col-2 jf-required" data-type="control_textbox" id="id_60">
        <label class="form-label form-label-top" id="label_60" for="input_60">
          Profissão
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_60" class="form-input-wide jf-required">
          <input type="text" id="input_60" name="q60_profissao" data-type="input-textbox" class="form-textbox validate[required]" size="35" value="" placeholder=" " data-component="textbox" aria-labelledby="label_60" required="" />
        </div>
      </li>
      <li class="form-line form-line-column form-col-1 form-line-column-clear jf-required" data-type="control_birthdate" id="id_4">
        <label class="form-label form-label-top" id="label_4" for="input_4">
          Data de Nascimento
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_4" class="form-input-wide jf-required">
          <div data-wrapper-react="true">
            <span class="form-sub-label-container" style="vertical-align:top">
              <select name="q4_dataDe4[month]" id="input_4_month" class="form-dropdown validate[required]" data-component="birthdate-month" aria-labelledby="label_4 sublabel_4_month">
                <option>  </option>
                <option value="January"> January </option>
                <option value="February"> February </option>
                <option value="March"> March </option>
                <option value="April"> April </option>
                <option value="May"> May </option>
                <option value="June"> June </option>
                <option value="July"> July </option>
                <option value="August"> August </option>
                <option value="September"> September </option>
                <option value="October"> October </option>
                <option value="November"> November </option>
                <option value="December"> December </option>
              </select>
              <label class="form-sub-label" for="input_4_month" id="sublabel_4_month" style="min-height:13px" aria-hidden="false"> Mês </label>
            </span>
            <span class="form-sub-label-container" style="vertical-align:top">
              <select name="q4_dataDe4[day]" id="input_4_day" class="form-dropdown validate[required]" data-component="birthdate-day" aria-labelledby="label_4 sublabel_4_day">
                <option>  </option>
                <option value="1"> 1 </option>
                <option value="2"> 2 </option>
                <option value="3"> 3 </option>
                <option value="4"> 4 </option>
                <option value="5"> 5 </option>
                <option value="6"> 6 </option>
                <option value="7"> 7 </option>
                <option value="8"> 8 </option>
                <option value="9"> 9 </option>
                <option value="10"> 10 </option>
                <option value="11"> 11 </option>
                <option value="12"> 12 </option>
                <option value="13"> 13 </option>
                <option value="14"> 14 </option>
                <option value="15"> 15 </option>
                <option value="16"> 16 </option>
                <option value="17"> 17 </option>
                <option value="18"> 18 </option>
                <option value="19"> 19 </option>
                <option value="20"> 20 </option>
                <option value="21"> 21 </option>
                <option value="22"> 22 </option>
                <option value="23"> 23 </option>
                <option value="24"> 24 </option>
                <option value="25"> 25 </option>
                <option value="26"> 26 </option>
                <option value="27"> 27 </option>
                <option value="28"> 28 </option>
                <option value="29"> 29 </option>
                <option value="30"> 30 </option>
                <option value="31"> 31 </option>
              </select>
              <label class="form-sub-label" for="input_4_day" id="sublabel_4_day" style="min-height:13px" aria-hidden="false"> Dia </label>
            </span>
            <span class="form-sub-label-container" style="vertical-align:top">
              <select name="q4_dataDe4[year]" id="input_4_year" class="form-dropdown validate[required]" data-component="birthdate-year" aria-labelledby="label_4 sublabel_4_year">
                <option>  </option>
                <option value="2021"> 2021 </option>
                <option value="2020"> 2020 </option>
                <option value="2019"> 2019 </option>
                <option value="2018"> 2018 </option>
                <option value="2017"> 2017 </option>
                <option value="2016"> 2016 </option>
                <option value="2015"> 2015 </option>
                <option value="2014"> 2014 </option>
                <option value="2013"> 2013 </option>
                <option value="2012"> 2012 </option>
                <option value="2011"> 2011 </option>
                <option value="2010"> 2010 </option>
                <option value="2009"> 2009 </option>
                <option value="2008"> 2008 </option>
                <option value="2007"> 2007 </option>
                <option value="2006"> 2006 </option>
                <option value="2005"> 2005 </option>
                <option value="2004"> 2004 </option>
                <option value="2003"> 2003 </option>
                <option value="2002"> 2002 </option>
                <option value="2001"> 2001 </option>
                <option value="2000"> 2000 </option>
                <option value="1999"> 1999 </option>
                <option value="1998"> 1998 </option>
                <option value="1997"> 1997 </option>
                <option value="1996"> 1996 </option>
                <option value="1995"> 1995 </option>
                <option value="1994"> 1994 </option>
                <option value="1993"> 1993 </option>
                <option value="1992"> 1992 </option>
                <option value="1991"> 1991 </option>
                <option value="1990"> 1990 </option>
                <option value="1989"> 1989 </option>
                <option value="1988"> 1988 </option>
                <option value="1987"> 1987 </option>
                <option value="1986"> 1986 </option>
                <option value="1985"> 1985 </option>
                <option value="1984"> 1984 </option>
                <option value="1983"> 1983 </option>
                <option value="1982"> 1982 </option>
                <option value="1981"> 1981 </option>
                <option value="1980"> 1980 </option>
                <option value="1979"> 1979 </option>
                <option value="1978"> 1978 </option>
                <option value="1977"> 1977 </option>
                <option value="1976"> 1976 </option>
                <option value="1975"> 1975 </option>
                <option value="1974"> 1974 </option>
                <option value="1973"> 1973 </option>
                <option value="1972"> 1972 </option>
                <option value="1971"> 1971 </option>
                <option value="1970"> 1970 </option>
                <option value="1969"> 1969 </option>
                <option value="1968"> 1968 </option>
                <option value="1967"> 1967 </option>
                <option value="1966"> 1966 </option>
                <option value="1965"> 1965 </option>
                <option value="1964"> 1964 </option>
                <option value="1963"> 1963 </option>
                <option value="1962"> 1962 </option>
                <option value="1961"> 1961 </option>
                <option value="1960"> 1960 </option>
                <option value="1959"> 1959 </option>
                <option value="1958"> 1958 </option>
                <option value="1957"> 1957 </option>
                <option value="1956"> 1956 </option>
                <option value="1955"> 1955 </option>
                <option value="1954"> 1954 </option>
                <option value="1953"> 1953 </option>
                <option value="1952"> 1952 </option>
                <option value="1951"> 1951 </option>
                <option value="1950"> 1950 </option>
                <option value="1949"> 1949 </option>
                <option value="1948"> 1948 </option>
                <option value="1947"> 1947 </option>
                <option value="1946"> 1946 </option>
                <option value="1945"> 1945 </option>
                <option value="1944"> 1944 </option>
                <option value="1943"> 1943 </option>
                <option value="1942"> 1942 </option>
                <option value="1941"> 1941 </option>
                <option value="1940"> 1940 </option>
                <option value="1939"> 1939 </option>
                <option value="1938"> 1938 </option>
                <option value="1937"> 1937 </option>
                <option value="1936"> 1936 </option>
                <option value="1935"> 1935 </option>
                <option value="1934"> 1934 </option>
                <option value="1933"> 1933 </option>
                <option value="1932"> 1932 </option>
                <option value="1931"> 1931 </option>
                <option value="1930"> 1930 </option>
                <option value="1929"> 1929 </option>
                <option value="1928"> 1928 </option>
                <option value="1927"> 1927 </option>
                <option value="1926"> 1926 </option>
                <option value="1925"> 1925 </option>
                <option value="1924"> 1924 </option>
                <option value="1923"> 1923 </option>
                <option value="1922"> 1922 </option>
                <option value="1921"> 1921 </option>
                <option value="1920"> 1920 </option>
              </select>
              <label class="form-sub-label" for="input_4_year" id="sublabel_4_year" style="min-height:13px" aria-hidden="false"> Ano </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line form-line-column form-col-2" data-type="control_dropdown" id="id_7">
        <label class="form-label form-label-top" id="label_7" for="input_7"> Estado Civil </label>
        <div id="cid_7" class="form-input-wide">
          <select class="form-dropdown" id="input_7" name="q7_estadoCivil7" style="width:100px" data-component="dropdown">
            <option value="">  </option>
            <option value="Solteiro(a)"> Solteiro(a) </option>
            <option value="Casado(a)"> Casado(a) </option>
            <option value="Viúvo(a)"> Viúvo(a) </option>
            <option value="">  </option>
          </select>
        </div>
      </li>
      <li class="form-line form-line-column form-col-3 jf-required" data-type="control_dropdown" id="id_8">
        <label class="form-label form-label-top" id="label_8" for="input_8">
          Sexo
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_8" class="form-input-wide jf-required">
          <select class="form-dropdown validate[required]" id="input_8" name="q8_sexo8" style="width:100px" data-component="dropdown" required="">
            <option value="">  </option>
            <option value="Masculino"> Masculino </option>
            <option value="Feminino"> Feminino </option>
            <option value="Prefiro Não informar"> Prefiro Não informar </option>
          </select>
        </div>
      </li>
      <li class="form-line form-line-column form-col-4 jf-required" data-type="control_dropdown" id="id_51">
        <label class="form-label form-label-top" id="label_51" for="input_51">
          Eu me considero
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_51" class="form-input-wide jf-reuired">
          <select class="form-dropdown validate[required]" id="input_51" name="q51_euMe51" style="width:100px" data-component="dropdown" required="">
            <option value="">  </option>
            <option value="Ser Humano"> Ser Humano </option>
            <option value="Barbie Humana"> Barbie Humana </option>
            <option value="Ken Humano"> Ken Humano </option>
          </select>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_textbox" id="id_9">
        <label class="form-label form-label-top form-label-auto" id="label_9" for="input_9">
          Endereço
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_9" class="form-input-wide jf-required">
          <input type="text" id="input_9" name="q9_endereco" data-type="input-textbox" class="form-textbox validate[required]" size="50" value="" placeholder=" ex. Nome da Rua, 56. Bloco 2, AP 301" data-component="textbox" aria-labelledby="label_9" required="" />
        </div>
      </li>
      <li class="form-line form-line-column form-col-1 jf-required" data-type="control_textbox" id="id_10">
        <label class="form-label form-label-top" id="label_10" for="input_10">
          Bairro
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_10" class="form-input-wide jf-required">
          <input type="text" id="input_10" name="q10_bairro" data-type="input-textbox" class="form-textbox validate[required]" size="30" value="" placeholder=" " data-component="textbox" aria-labelledby="label_10" required="" />
        </div>
      </li>
      <li class="form-line form-line-column form-col-2 jf-required" data-type="control_textbox" id="id_11">
        <label class="form-label form-label-top" id="label_11" for="input_11">
          Cidade
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_11" class="form-input-wide jf-required">
          <input type="text" id="input_11" name="q11_cidade" data-type="input-textbox" class="form-textbox validate[required]" size="30" value="" placeholder=" " data-component="textbox" aria-labelledby="label_11" required="" />
        </div>
      </li>
      <li class="form-line form-line-column form-col-3 jf-required" data-type="control_textbox" id="id_12">
        

    <!-- Adicionando Javascript -->
    <script>
    
    function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('rua').value=("");
            document.getElementById('bairro').value=("");
            document.getElementById('cidade').value=("");
            document.getElementById('uf').value=("");
            document.getElementById('ibge').value=("");
    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('rua').value=(conteudo.logradouro);
            document.getElementById('bairro').value=(conteudo.bairro);
            document.getElementById('cidade').value=(conteudo.localidade);
            document.getElementById('uf').value=(conteudo.uf);
            document.getElementById('ibge').value=(conteudo.ibge);
        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }
        
    function pesquisacep(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');
        

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('rua').value="...";
                document.getElementById('bairro').value="...";
                document.getElementById('cidade').value="...";
                document.getElementById('uf').value="...";
                document.getElementById('ibge').value="...";

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
            
        }
    };

    </script>
    </head>

    <body>
    <!-- Inicio do formulario -->
      <form method="get" action=".">
        <label>Cep:
        <input name="cep" type="text" id="cep" value="" size="10" maxlength="9"
               onblur="pesquisacep(this.value);" /></label><br />
        <label>Rua:
        <input name="rua" type="text" id="rua" size="60" /></label><br />
        <label>Bairro:
        <input name="bairro" type="text" id="bairro" size="40" /></label><br />
        <label>Cidade:
        <input name="cidade" type="text" id="cidade" size="40" /></label><br />
        <label>Estado:
        <input name="uf" type="text" id="uf" size="2" /></label><br />
        <label>IBGE:
        <input name="ibge" type="text" id="ibge" size="8" /></label><br />
        <div id="cid_12" class="form-input-wide jf-required">
          
        </div>
      </li>
      <li class="form-line form-line-column form-col-4 jf-required" data-type="control_textbox" id="id_13"></li>
        <label class="form-label form-label-top" id="label_13" for="input_13">
          Telefone Fixo 1
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_13" class="form-input-wide jf-required">
          <input type="text" id="input_13" name="q13_telefoneFixo13" data-type="input-textbox" class="form-textbox validate[required]" size="15" value="" placeholder=" " data-component="textbox" aria-labelledby="label_13" required="" />
        </div>
      </li>
      <li class="form-line form-line-column form-col-5" data-type="control_textbox" id="id_14">
        <label class="form-label form-label-top" id="label_14" for="input_14"> Telefone Fixo 2 </label>
        <div id="cid_14" class="form-input-wide">
          <input type="text" id="input_14" name="q14_telefoneFixo14" data-type="input-textbox" class="form-textbox" size="15" value="" placeholder=" " data-component="textbox" aria-labelledby="label_14" />
        </div>
      </li>
      <li class="form-line form-line-column form-col-6 jf-required" data-type="control_textbox" id="id_15">
        <label class="form-label form-label-top" id="label_15" for="input_15">
          Celular
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_15" class="form-input-wide jf-required">
          <input type="text" id="input_15" name="q15_celular15" data-type="input-textbox" class="form-textbox validate[required]" size="15" value="" placeholder=" " data-component="textbox" aria-labelledby="label_15" required="" />
        </div>
      </li>
      <li class="form-line form-line-column form-col-7" data-type="control_textbox" id="id_16">
        <label class="form-label form-label-top" id="label_16" for="input_16"> Contato </label>
        <div id="cid_16" class="form-input-wide">
          <input type="text" id="input_16" name="q16_contato16" data-type="input-textbox" class="form-textbox" size="20" value="" placeholder=" " data-component="textbox" aria-labelledby="label_16" />
        </div>
      </li>
      <li class="form-line form-line-column form-col-8" data-type="control_email" id="id_28">
        <label class="form-label form-label-top" id="label_28" for="input_28"> E-mail </label>
        <div id="cid_28" class="form-input-wide">
          <input type="email" id="input_28" name="q28_email28" class="form-textbox validate[Email]" size="30" value="" placeholder="ex: myname@example.com" data-component="email" aria-labelledby="label_28" />
        </div>
      </li>
      <li id="cid_17" class="form-input-wide" data-type="control_head">
        <div style="display:table;width:100%">
          <div class="form-header-group hasImage header-small" data-imagealign="Left">
            <div class="header-logo">
              <img src="https://www.jotform.com/uploads/anapaulaiorram/form_files/bolsa.61273b474b8619.68877739.png" alt="" width="60" class="header-logo-left" />
            </div>
            <div class="header-text httal htvam">
              <h3 id="header_17" class="form-header" data-component="header">
                DOCUMENTOS
              </h3>
            </div>
          </div>
        </div>
      </li>
      <li class="form-line form-line-column form-col-9 jf-required" data-type="control_textbox" id="id_18">
        <label class="form-label form-label-top" id="label_18" for="input_18">
          Identidade
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_18" class="form-input-wide jf-required">
          <input type="text" id="input_18" name="q18_identidade" data-type="input-textbox" class="form-textbox validate[required]" size="20" value="" placeholder=" " data-component="textbox" aria-labelledby="label_18" required="" />
        </div>
      </li>
      <li class="form-line form-line-column form-col-10 jf-required" data-type="control_textbox" id="id_19">
        <label class="form-label form-label-top" id="label_19" for="input_19">
          CPF 
          <span class="form-required">
            *
          </span>
        </label>
        
          <div id="cid_19" class="form-input-wide jf-required">
          <input type="text" id="input_19" name="q19_cpf" data-type="input-textbox" class="form-textbox validate[required]" size="20" value="" placeholder=" " data-component="textbox" aria-labelledby="label_19" required="" />
        </div>
        
        
      </li>
      <li class="form-line form-line-column form-col-11" data-type="control_dropdown" id="id_20">
        <label class="form-label form-label-top" id="label_20" for="input_20"> Possui Veículo </label>
        <div id="cid_20" class="form-input-wide">
          <select class="form-dropdown" id="input_20" name="q20_possuiVeiculo" style="width:80px" data-component="dropdown">
            <option value="">  </option>
            <option value="Sim"> Sim </option>
            <option value="Não"> Não </option>
          </select>
        </div>
      </li>
      <li class="form-line form-line-column form-col-12" data-type="control_dropdown" id="id_21">
        <label class="form-label form-label-top" id="label_21" for="input_21"> Habilitação </label>
        <div id="cid_21" class="form-input-wide">
          <select class="form-dropdown" id="input_21" name="q21_habilitacao21" style="width:80px" data-component="dropdown">
            <option value="">  </option>
            <option value="Cat. A"> Cat. A </option>
            <option value="Cat. B"> Cat. B </option>
            <option value="Cat. C"> Cat. C </option>
            <option value="Cat. D"> Cat. D </option>
          </select>
        </div>
      </li>
      <li class="form-line" data-type="control_image" id="id_45">
        <div id="cid_45" class="form-input-wide">
          
        </div>
      </li>
      <li id="cid_22" class="form-input-wide" data-type="control_head">
        <div class="form-header-group  header-small">
          <div class="header-text httal htvam">
            <h3 id="header_22" class="form-header" data-component="header">
              ESCOLARIDADE
            </h3>
          </div>
        </div>
      </li>
      <li class="form-line form-line-column form-col-1" data-type="control_dropdown" id="id_23">
        <label class="form-label form-label-top" id="label_23" for="input_23"> Segndo Grau </label>
        <div id="cid_23" class="form-input-wide">
          <select class="form-dropdown" id="input_23" name="q23_segndoGrau" style="width:100px" data-component="dropdown">
            <option value="">  </option>
            <option value="Completo"> Completo </option>
            <option value="Incompleto"> Incompleto </option>
          </select>
        </div>
      </li>
      <li class="form-line form-line-column form-col-2" data-type="control_dropdown" id="id_24">
        <label class="form-label form-label-top" id="label_24" for="input_24"> Curso Técnico </label>
        <div id="cid_24" class="form-input-wide">
          <select class="form-dropdown" id="input_24" name="q24_cursoTecnico" style="width:100px" data-component="dropdown">
            <option value="">  </option>
            <option value="Completo"> Completo </option>
            <option value="Incompleto"> Incompleto </option>
          </select>
        </div>
      </li>
      <li class="form-line form-line-column form-col-3" data-type="control_dropdown" id="id_25">
        <label class="form-label form-label-top" id="label_25" for="input_25"> Nível Superior </label>
        <div id="cid_25" class="form-input-wide">
          <select class="form-dropdown" id="input_25" name="q25_nivelSuperior" style="width:100px" data-component="dropdown">
            <option value="">  </option>
            <option value="Completo"> Completo </option>
            <option value="Incompleto"> Incompleto </option>
          </select>
        </div>
      </li>
      <li class="form-line form-line-column form-col-4" data-type="control_dropdown" id="id_26">
        <label class="form-label form-label-top" id="label_26" for="input_26"> Pós Graduação </label>
        <div id="cid_26" class="form-input-wide">
          <select class="form-dropdown" id="input_26" name="q26_posGraduacao" style="width:100px" data-component="dropdown">
            <option value="">  </option>
            <option value="Completo"> Completo </option>
            <option value="Incompleto"> Incompleto </option>
          </select>
        </div>
      </li>
      <li class="form-line" data-type="control_textarea" id="id_27">
        <label class="form-label form-label-top form-label-auto" id="label_27" for="input_27"> Especificação </label>
        <div id="cid_27" class="form-input-wide">
          <textarea id="input_27" class="form-textarea" name="q27_especificacao" cols="65" rows="4" data-component="textarea" aria-labelledby="label_27"></textarea>
        </div>
      </li>
      <li class="form-line" data-type="control_image" id="id_46">
        <div id="cid_46" class="form-input-wide">
          
        </div>
      </li>
      <li id="cid_29" class="form-input-wide" data-type="control_head">
        <div style="display:table;width:100%">
          <div class="form-header-group hasImage header-small" data-imagealign="Left">
            <div class="header-logo">
              <img src="https://www.jotform.com/uploads/anapaulaiorram/form_files/barbie%20.61273b7bba69a5.50675247.png" alt="" width="82" class="header-logo-left" />
            </div>
            <div class="header-text httal htvam">
              <h3 id="header_29" class="form-header" data-component="header">
                EXPERIÊNCIA PROFISSIONAL
              </h3>
            </div>
          </div>
        </div>
      </li>
      <li class="form-line form-line-column form-col-1 jf-required" data-type="control_textbox" id="id_30">
        <label class="form-label form-label-top" id="label_30" for="input_30">
          Última Empresa ou Atual Emprego
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_30" class="form-input-wide jf-required">
          <input type="text" id="input_30" name="q30_ultimaEmpresa" data-type="input-textbox" class="form-textbox validate[required]" size="45" value="" placeholder=" " data-component="textbox" aria-labelledby="label_30" required="" />
        </div>
      </li>
      <li class="form-line form-line-column form-col-2 jf-required" data-type="control_textbox" id="id_31">
        <label class="form-label form-label-top" id="label_31" for="input_31">
          Função
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_31" class="form-input-wide jf-required">
          <input type="text" id="input_31" name="q31_funcao" data-type="input-textbox" class="form-textbox validate[required]" size="35" value="" placeholder=" " data-component="textbox" aria-labelledby="label_31" required="" />
        </div>
      </li>
      <li class="form-line form-line-column form-col-3" data-type="control_birthdate" id="id_32">
        <label class="form-label form-label-top" id="label_32" for="input_32"> Data de Admissão </label>
        <div id="cid_32" class="form-input-wide">
          <div data-wrapper-react="true">
            <span class="form-sub-label-container" style="vertical-align:top">
              <select name="q32_dataDe[day]" id="input_32_day" class="form-dropdown" data-component="birthdate-day" aria-labelledby="label_32 sublabel_32_day">
                <option>  </option>
                <option value="1"> 1 </option>
                <option value="2"> 2 </option>
                <option value="3"> 3 </option>
                <option value="4"> 4 </option>
                <option value="5"> 5 </option>
                <option value="6"> 6 </option>
                <option value="7"> 7 </option>
                <option value="8"> 8 </option>
                <option value="9"> 9 </option>
                <option value="10"> 10 </option>
                <option value="11"> 11 </option>
                <option value="12"> 12 </option>
                <option value="13"> 13 </option>
                <option value="14"> 14 </option>
                <option value="15"> 15 </option>
                <option value="16"> 16 </option>
                <option value="17"> 17 </option>
                <option value="18"> 18 </option>
                <option value="19"> 19 </option>
                <option value="20"> 20 </option>
                <option value="21"> 21 </option>
                <option value="22"> 22 </option>
                <option value="23"> 23 </option>
                <option value="24"> 24 </option>
                <option value="25"> 25 </option>
                <option value="26"> 26 </option>
                <option value="27"> 27 </option>
                <option value="28"> 28 </option>
                <option value="29"> 29 </option>
                <option value="30"> 30 </option>
                <option value="31"> 31 </option>
              </select>
              <label class="form-sub-label" for="input_32_day" id="sublabel_32_day" style="min-height:13px" aria-hidden="false"> Dia </label>
            </span>
            <span class="form-sub-label-container" style="vertical-align:top">
              <select name="q32_dataDe[month]" id="input_32_month" class="form-dropdown" data-component="birthdate-month" aria-labelledby="label_32 sublabel_32_month">
                <option>  </option>
                <option value="January"> January </option>
                <option value="February"> February </option>
                <option value="March"> March </option>
                <option value="April"> April </option>
                <option value="May"> May </option>
                <option value="June"> June </option>
                <option value="July"> July </option>
                <option value="August"> August </option>
                <option value="September"> September </option>
                <option value="October"> October </option>
                <option value="November"> November </option>
                <option value="December"> December </option>
              </select>
              <label class="form-sub-label" for="input_32_month" id="sublabel_32_month" style="min-height:13px" aria-hidden="false"> Mês </label>
            </span>
            <span class="form-sub-label-container" style="vertical-align:top">
              <select name="q32_dataDe[year]" id="input_32_year" class="form-dropdown" data-component="birthdate-year" aria-labelledby="label_32 sublabel_32_year">
                <option>  </option>
                <option value="2021"> 2021 </option>
                <option value="2020"> 2020 </option>
                <option value="2019"> 2019 </option>
                <option value="2018"> 2018 </option>
                <option value="2017"> 2017 </option>
                <option value="2016"> 2016 </option>
                <option value="2015"> 2015 </option>
                <option value="2014"> 2014 </option>
                <option value="2013"> 2013 </option>
                <option value="2012"> 2012 </option>
                <option value="2011"> 2011 </option>
                <option value="2010"> 2010 </option>
                <option value="2009"> 2009 </option>
                <option value="2008"> 2008 </option>
                <option value="2007"> 2007 </option>
                <option value="2006"> 2006 </option>
                <option value="2005"> 2005 </option>
                <option value="2004"> 2004 </option>
                <option value="2003"> 2003 </option>
                <option value="2002"> 2002 </option>
                <option value="2001"> 2001 </option>
                <option value="2000"> 2000 </option>
                <option value="1999"> 1999 </option>
                <option value="1998"> 1998 </option>
                <option value="1997"> 1997 </option>
                <option value="1996"> 1996 </option>
                <option value="1995"> 1995 </option>
                <option value="1994"> 1994 </option>
                <option value="1993"> 1993 </option>
                <option value="1992"> 1992 </option>
                <option value="1991"> 1991 </option>
                <option value="1990"> 1990 </option>
                <option value="1989"> 1989 </option>
                <option value="1988"> 1988 </option>
                <option value="1987"> 1987 </option>
                <option value="1986"> 1986 </option>
                <option value="1985"> 1985 </option>
                <option value="1984"> 1984 </option>
                <option value="1983"> 1983 </option>
                <option value="1982"> 1982 </option>
                <option value="1981"> 1981 </option>
                <option value="1980"> 1980 </option>
                <option value="1979"> 1979 </option>
                <option value="1978"> 1978 </option>
                <option value="1977"> 1977 </option>
                <option value="1976"> 1976 </option>
                <option value="1975"> 1975 </option>
                <option value="1974"> 1974 </option>
                <option value="1973"> 1973 </option>
                <option value="1972"> 1972 </option>
                <option value="1971"> 1971 </option>
                <option value="1970"> 1970 </option>
                <option value="1969"> 1969 </option>
                <option value="1968"> 1968 </option>
                <option value="1967"> 1967 </option>
                <option value="1966"> 1966 </option>
                <option value="1965"> 1965 </option>
                <option value="1964"> 1964 </option>
                <option value="1963"> 1963 </option>
                <option value="1962"> 1962 </option>
                <option value="1961"> 1961 </option>
                <option value="1960"> 1960 </option>
                <option value="1959"> 1959 </option>
                <option value="1958"> 1958 </option>
                <option value="1957"> 1957 </option>
                <option value="1956"> 1956 </option>
                <option value="1955"> 1955 </option>
                <option value="1954"> 1954 </option>
                <option value="1953"> 1953 </option>
                <option value="1952"> 1952 </option>
                <option value="1951"> 1951 </option>
                <option value="1950"> 1950 </option>
                <option value="1949"> 1949 </option>
                <option value="1948"> 1948 </option>
                <option value="1947"> 1947 </option>
                <option value="1946"> 1946 </option>
                <option value="1945"> 1945 </option>
                <option value="1944"> 1944 </option>
                <option value="1943"> 1943 </option>
                <option value="1942"> 1942 </option>
                <option value="1941"> 1941 </option>
                <option value="1940"> 1940 </option>
                <option value="1939"> 1939 </option>
                <option value="1938"> 1938 </option>
                <option value="1937"> 1937 </option>
                <option value="1936"> 1936 </option>
                <option value="1935"> 1935 </option>
                <option value="1934"> 1934 </option>
                <option value="1933"> 1933 </option>
                <option value="1932"> 1932 </option>
                <option value="1931"> 1931 </option>
                <option value="1930"> 1930 </option>
                <option value="1929"> 1929 </option>
                <option value="1928"> 1928 </option>
                <option value="1927"> 1927 </option>
                <option value="1926"> 1926 </option>
                <option value="1925"> 1925 </option>
                <option value="1924"> 1924 </option>
                <option value="1923"> 1923 </option>
                <option value="1922"> 1922 </option>
                <option value="1921"> 1921 </option>
                <option value="1920"> 1920 </option>
              </select>
              <label class="form-sub-label" for="input_32_year" id="sublabel_32_year" style="min-height:13px" aria-hidden="false"> Ano </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line form-line-column form-col-4" data-type="control_birthdate" id="id_33">
        <label class="form-label form-label-top" id="label_33" for="input_33"> Data de Demissão </label>
        <div id="cid_33" class="form-input-wide">
          <div data-wrapper-react="true">
            <span class="form-sub-label-container" style="vertical-align:top">
              <select name="q33_dataDe33[day]" id="input_33_day" class="form-dropdown" data-component="birthdate-day" aria-labelledby="label_33 sublabel_33_day">
                <option>  </option>
                <option value="1"> 1 </option>
                <option value="2"> 2 </option>
                <option value="3"> 3 </option>
                <option value="4"> 4 </option>
                <option value="5"> 5 </option>
                <option value="6"> 6 </option>
                <option value="7"> 7 </option>
                <option value="8"> 8 </option>
                <option value="9"> 9 </option>
                <option value="10"> 10 </option>
                <option value="11"> 11 </option>
                <option value="12"> 12 </option>
                <option value="13"> 13 </option>
                <option value="14"> 14 </option>
                <option value="15"> 15 </option>
                <option value="16"> 16 </option>
                <option value="17"> 17 </option>
                <option value="18"> 18 </option>
                <option value="19"> 19 </option>
                <option value="20"> 20 </option>
                <option value="21"> 21 </option>
                <option value="22"> 22 </option>
                <option value="23"> 23 </option>
                <option value="24"> 24 </option>
                <option value="25"> 25 </option>
                <option value="26"> 26 </option>
                <option value="27"> 27 </option>
                <option value="28"> 28 </option>
                <option value="29"> 29 </option>
                <option value="30"> 30 </option>
                <option value="31"> 31 </option>
              </select>
              <label class="form-sub-label" for="input_33_day" id="sublabel_33_day" style="min-height:13px" aria-hidden="false"> Dia </label>
            </span>
            <span class="form-sub-label-container" style="vertical-align:top">
              <select name="q33_dataDe33[month]" id="input_33_month" class="form-dropdown" data-component="birthdate-month" aria-labelledby="label_33 sublabel_33_month">
                <option>  </option>
                <option value="January"> January </option>
                <option value="February"> February </option>
                <option value="March"> March </option>
                <option value="April"> April </option>
                <option value="May"> May </option>
                <option value="June"> June </option>
                <option value="July"> July </option>
                <option value="August"> August </option>
                <option value="September"> September </option>
                <option value="October"> October </option>
                <option value="November"> November </option>
                <option value="December"> December </option>
              </select>
              <label class="form-sub-label" for="input_33_month" id="sublabel_33_month" style="min-height:13px" aria-hidden="false"> Mês </label>
            </span>
            <span class="form-sub-label-container" style="vertical-align:top">
              <select name="q33_dataDe33[year]" id="input_33_year" class="form-dropdown" data-component="birthdate-year" aria-labelledby="label_33 sublabel_33_year">
                <option>  </option>
                <option value="2021"> 2021 </option>
                <option value="2020"> 2020 </option>
                <option value="2019"> 2019 </option>
                <option value="2018"> 2018 </option>
                <option value="2017"> 2017 </option>
                <option value="2016"> 2016 </option>
                <option value="2015"> 2015 </option>
                <option value="2014"> 2014 </option>
                <option value="2013"> 2013 </option>
                <option value="2012"> 2012 </option>
                <option value="2011"> 2011 </option>
                <option value="2010"> 2010 </option>
                <option value="2009"> 2009 </option>
                <option value="2008"> 2008 </option>
                <option value="2007"> 2007 </option>
                <option value="2006"> 2006 </option>
                <option value="2005"> 2005 </option>
                <option value="2004"> 2004 </option>
                <option value="2003"> 2003 </option>
                <option value="2002"> 2002 </option>
                <option value="2001"> 2001 </option>
                <option value="2000"> 2000 </option>
                <option value="1999"> 1999 </option>
                <option value="1998"> 1998 </option>
                <option value="1997"> 1997 </option>
                <option value="1996"> 1996 </option>
                <option value="1995"> 1995 </option>
                <option value="1994"> 1994 </option>
                <option value="1993"> 1993 </option>
                <option value="1992"> 1992 </option>
                <option value="1991"> 1991 </option>
                <option value="1990"> 1990 </option>
                <option value="1989"> 1989 </option>
                <option value="1988"> 1988 </option>
                <option value="1987"> 1987 </option>
                <option value="1986"> 1986 </option>
                <option value="1985"> 1985 </option>
                <option value="1984"> 1984 </option>
                <option value="1983"> 1983 </option>
                <option value="1982"> 1982 </option>
                <option value="1981"> 1981 </option>
                <option value="1980"> 1980 </option>
                <option value="1979"> 1979 </option>
                <option value="1978"> 1978 </option>
                <option value="1977"> 1977 </option>
                <option value="1976"> 1976 </option>
                <option value="1975"> 1975 </option>
                <option value="1974"> 1974 </option>
                <option value="1973"> 1973 </option>
                <option value="1972"> 1972 </option>
                <option value="1971"> 1971 </option>
                <option value="1970"> 1970 </option>
                <option value="1969"> 1969 </option>
                <option value="1968"> 1968 </option>
                <option value="1967"> 1967 </option>
                <option value="1966"> 1966 </option>
                <option value="1965"> 1965 </option>
                <option value="1964"> 1964 </option>
                <option value="1963"> 1963 </option>
                <option value="1962"> 1962 </option>
                <option value="1961"> 1961 </option>
                <option value="1960"> 1960 </option>
                <option value="1959"> 1959 </option>
                <option value="1958"> 1958 </option>
                <option value="1957"> 1957 </option>
                <option value="1956"> 1956 </option>
                <option value="1955"> 1955 </option>
                <option value="1954"> 1954 </option>
                <option value="1953"> 1953 </option>
                <option value="1952"> 1952 </option>
                <option value="1951"> 1951 </option>
                <option value="1950"> 1950 </option>
                <option value="1949"> 1949 </option>
                <option value="1948"> 1948 </option>
                <option value="1947"> 1947 </option>
                <option value="1946"> 1946 </option>
                <option value="1945"> 1945 </option>
                <option value="1944"> 1944 </option>
                <option value="1943"> 1943 </option>
                <option value="1942"> 1942 </option>
                <option value="1941"> 1941 </option>
                <option value="1940"> 1940 </option>
                <option value="1939"> 1939 </option>
                <option value="1938"> 1938 </option>
                <option value="1937"> 1937 </option>
                <option value="1936"> 1936 </option>
                <option value="1935"> 1935 </option>
                <option value="1934"> 1934 </option>
                <option value="1933"> 1933 </option>
                <option value="1932"> 1932 </option>
                <option value="1931"> 1931 </option>
                <option value="1930"> 1930 </option>
                <option value="1929"> 1929 </option>
                <option value="1928"> 1928 </option>
                <option value="1927"> 1927 </option>
                <option value="1926"> 1926 </option>
                <option value="1925"> 1925 </option>
                <option value="1924"> 1924 </option>
                <option value="1923"> 1923 </option>
                <option value="1922"> 1922 </option>
                <option value="1921"> 1921 </option>
                <option value="1920"> 1920 </option>
              </select>
              <label class="form-sub-label" for="input_33_year" id="sublabel_33_year" style="min-height:13px" aria-hidden="false"> Ano </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_textarea" id="id_34">
        <label class="form-label form-label-top form-label-auto" id="label_34" for="input_34"> Atividades Exercidas </label>
        <div id="cid_34" class="form-input-wide">
          <textarea id="input_34" class="form-textarea" name="q34_atividadesExercidas" cols="65" rows="3" data-component="textarea" aria-labelledby="label_34"></textarea>
        </div>
      </li>
      <li class="form-line" data-type="control_textarea" id="id_35">
        <label class="form-label form-label-top form-label-auto" id="label_35" for="input_35"> Objetivos para o Futuro </label>
        <div id="cid_35" class="form-input-wide">
          <textarea id="input_35" class="form-textarea" name="q35_objetivosPara" cols="65" rows="3" data-component="textarea" aria-labelledby="label_35"></textarea>
        </div>
      </li>
      <li class="form-line" data-type="control_textarea" id="id_36">
        <label class="form-label form-label-top form-label-auto" id="label_36" for="input_36"> Conhece a história da Barbie? O Que Sabe ? </label>
        <div id="cid_36" class="form-input-wide">
          <textarea id="input_36" class="form-textarea" name="q36_conheceA" cols="65" rows="3" data-component="textarea" aria-labelledby="label_36"></textarea>
        </div>
      </li>
      <li class="form-line" data-type="control_image" id="id_44">
        <div id="cid_44" class="form-input-wide">
          
        </div>
      </li>
      <li class="form-line" data-type="control_image" id="id_47">
        <div id="cid_47" class="form-input-wide">
          <div style="text-align:right">
            <img alt="Você pode ser tudo que quiser " class="form-image" style="border:0" src="https://www.jotform.com/uploads/anapaulaiorram/form_files/YCBA-Footer_BR_tcm892-119811.61273bf29a1de2.16053109.jpg" height="139px" width="590px" data-component="image" />
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_button" id="id_59">
        <div id="cid_59" class="form-input-wide">
          <div style="text-align:center" data-align="center" class="form-buttons-wrapper form-buttons-center   jsTest-button-wrapperField">
            <button id="input_59" type="submit" class="form-submit-button form-submit-button-simple_pink submit-button jf-form-buttons jsTest-submitField" data-component="button" data-content="">
              Enviar
            </button>
          </div>
        </div>
      </li>
      <li style="clear:both">
      </li>
      <li style="display:none">
        Should be Empty:
        <input type="text" name="website" value="" />
      </li>
    </ul>
  </div>
  <script>
  JotForm.showJotFormPowered = "new_footer";
  </script>
  <script>
  JotForm.poweredByText = "Powered by JotForm";
  </script>
  <input type="hidden" class="simple_spc" id="simple_spc" name="simple_spc" value="212371175511649" />
  <script type="text/javascript">
  var all_spc = document.querySelectorAll("form[id='212371175511649'] .si" + "mple" + "_spc");
for (var i = 0; i < all_spc.length; i++)
{
  all_spc[i].value = "212371175511649-212371175511649";
}
  </script>
  <div class="formFooter-heightMask">
  </div>
  <input type="submit" name="submit" id="submit">

</form></body>
</html>
<script type="text/javascript">JotForm.ownerView=true;</script>