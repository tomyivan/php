<?php
class Base64SIN{
	public static function convertBase64($value)
		{
			$dictionary = array(
				'0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 
				'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 
				'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 
				'U', 'V', 'W', 'X', 'Y', 'Z', 'a', 'b', 'c', 'd', 
				'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 
				'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 
				'y', 'z', '+', '/' );
			$quotient = 1; $remainder = '';
			
			while ($quotient > 0)
			{
				$quotient = (int)($value / 64);
				$remainder = $dictionary[$value%64] . $remainder;
				$value = $quotient;
			}
			return $remainder;
		}
}	