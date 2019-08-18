<?php
try{
	$options = array(
  'cache_wsdl' => 0,
);
$soap_cliente = new SoapClient('http://uasb-api.rootcode.com.bo/mcruz/api-soap/soap_wsdl.wsdl', $options);

$resultado_suma = $soap_cliente->sumar(7, 5);
$resultado_resta = $soap_cliente->restar(8, 3);
echo $resultado_suma." --- ".$resultado_resta;
} catch (Exception $e) {
    echo 'Error --> '. $e->getMessage();
}
?>
