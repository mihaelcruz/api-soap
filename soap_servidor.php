<?php
$soap_servidor = new SoapServer("mihaelcruz.com/api-soap/soap_wsdl.wsdl");
function sumar($operando1,$operando2){ return $operando1+$operando2; }
function restar($operando1,$operando2){ return $operando1-$operando2; }
$soap_servidor->AddFunction("sumar");
$soap_servidor->AddFunction("restar");
$soap_servidor->handle();
?>