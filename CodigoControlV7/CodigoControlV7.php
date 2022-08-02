<?php
require_once('AllegedRC4.php');
require_once('Verhoeff.php');
require_once('Base64SIN.php');
class CodigoControlV7
{
	public static function generar($numautorizacion, $numfactura, $nitcliente, $fecha, $monto, $clave)
	{
		$numfactura = self::appendVerhoeff($numfactura, 2);
		$nitcliente = self::appendVerhoeff($nitcliente, 2);
		$fecha = self::appendVerhoeff($fecha, 2);
		$monto = self::appendVerhoeff(self::roundUp($monto), 2);
		$suma = $numfactura + $nitcliente + $fecha + $monto;
		$suma = self::appendVerhoeff($suma, 5);
		$dv = substr($suma, -5);
		$cads = array($numautorizacion, $numfactura, $nitcliente, $fecha, $monto);
		$msg = '';
		$p = 0;
		for ($i=0; $i<5; $i++)
		{
			$msg .= $cads[$i] . substr($clave, $p, 1+$dv[$i]);
			$p += 1 + $dv[$i];
		}
		$codif = AllegedRC4::encryptMessageRC4($msg, $clave.$dv);
		$st = 0;
		$sp = array(0,0,0,0,0);
		$codif_length = strlen($codif);
		for ($i=0; $i<$codif_length; $i++)
		{
			$st += ord($codif[$i]);
			$sp[$i%5] += ord($codif[$i]);
		}
		$stt = 0;
		for ($i=0; $i<5; $i++)
			$stt += (int)(($st * $sp[$i]) / (1 + $dv[$i]));

		return implode('-', str_split(AllegedRC4::encryptMessageRC4(Base64SIN::convertBase64($stt), $clave.$dv), 2));
	}
	public static function roundUp($value){
		return strval(round(floatval(str_replace(",",".",$value))));
	}
	public static function appendVerhoeff($value, $max)
	{
		for (;$max>0; $max--) $value .= Verhoeff::generateVerhoef($value);
		return $value;
	}
}