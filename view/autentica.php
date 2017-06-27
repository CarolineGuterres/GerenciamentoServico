<?php
session_start(); 
// seta configurações fusuhorario e tempo limite de inatividade//
date_default_timezone_set("Brazil/East");
$tempolimite = 900;
//fim das configurações de fusu horario e limite de inatividade//

// aqui ta o seu script de autenticação no momento em que ele for validado você seta as configurações abaixo.//
// seta as configurações de tempo permitido para inatividade//
 $_SESSION['registro'] = time(); // armazena o momento em que autenticado //
 $_SESSION['limite'] = $tempolimite; // armazena o tempo limite sem atividade //
// fim das configurações de tempo inativo//
?>