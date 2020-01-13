<?php
class Serial {
	
	const ALPHA_CAP = "ABCDEFGHJKLMNPQRSTUVWXYZ";
	const ALPHA_SMALL = "abcdefghjklmnpqrstuvwxyz";
	const NUMERIC = 23456789;

	public static function random($length=5,$chars='')
	{
		$sChars = (empty($chars)) ? self::ALPHA_CAP . self::NUMERIC : $chars;
		$aSplit = str_split($sChars,1);
		$serial = '';
		for($i=0;$i<$length;$i++)
		$serial .= $aSplit[mt_rand(0, strlen($sChars)-1)];
		return $serial;
	}

	public static function newSerial($parts=4, $length=5, $seperator='-', $chars='')
	{
		$serial = '';
		for($i=0;$i<$parts;$i++)
		{
			if($i>0) $serial .= substr($seperator,0,1);
			$serial .= self::random($length, $chars);
		}
		return $serial;
	}

	public static function customFormat($format='B*I*N-P*R*E*S*S', $chars='')
	{
		$serial = '';
		$aFormat = str_split($format,1);
		for($i=0;$i<count($aFormat);$i++)
		$serial .= ($aFormat[$i] == '*') ? self::random(1, $chars) : $aFormat[$i];
		return $serial;
	}
}
?>
