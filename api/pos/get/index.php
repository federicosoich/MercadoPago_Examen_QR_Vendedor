<?php

// Obtiene la información de un pos existente en base a su external_id

header('Content-type: application/json');

include_once '../../global/functions.php';
global $access_token;	

 // REVISA AQUÍ:
 // Qué método y endpoint de la API de Mercado Pago deberías poner aquí para poder   
 // crear un POS/QR?
 // Sustituye el método por su correspondiente: get, put, post, delete


$external_id = $_REQUEST["external_id"];
$url="";


curl_call("get","https://api.mercadopago.com/pos/10236723?access_token=".$access_token,"");

?>
