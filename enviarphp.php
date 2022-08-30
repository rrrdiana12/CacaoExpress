<?php
$nombre=$_POST['nombre'];
$direccion=$_POST[direccion];
$infdelpedido=$_POST['pedido'];
$para='diana122005r@gmail.com';
$titulo='Oedidos CacaoExpress';

if($_POST['submit']){
	if(mail($para,$titulo)){
		echo "Mensaje enviado,muchas gracias.";
	}
		else{
				echo "fallo el envio";
}
}
?>