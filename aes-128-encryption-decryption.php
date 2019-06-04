<?php
	$keyData = 'Key_Value';
	$IVData = 'IV_Value';
	$RawOrPlainData = '';

	////////////////////////// URL and Base64 Encoded Encryption/////////////////////////////////////
	function aes128Encrypt($key, $data, $iv) {
	  $padding = 16 - (strlen($data) % 16);
	  $data .= str_repeat(chr($padding), $padding);
	  return base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_128, $key, $data, MCRYPT_MODE_CBC, $iv));
	}
	echo urlencode(aes128Encrypt($keyData, $RawOrPlainData, $IVData));

	////////////////////////// URL and Base64 Decoded Decryption/////////////////////////////////////
	function aes128Decrypt($key, $encryptedData,$iv) {
	  $urldecode = urldecode($encryptedData);
	  $data = base64_decode($data);
	  $data = mcrypt_decrypt(MCRYPT_RIJNDAEL_128, $key, $data, MCRYPT_MODE_CBC, $iv);
	  $padding = ord($data[strlen($data) - 1]); 
	  return substr($data, 0, -$padding); 
	}
	echo aes128Decrypt($keyData, $RawOrPlainData, $IVData);

	////////////////////////// Base64 Encoded Encryption/////////////////////////////////////
	function aes128Encrypt($key, $data, $iv) {
	  $padding = 16 - (strlen($data) % 16);
	  $data .= str_repeat(chr($padding), $padding);
	  return base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_128, $key, $data, MCRYPT_MODE_CBC, $iv));
	}
	echo aes128Encrypt($keyData, $RawOrPlainData, $IVData);

	////////////////////////// Base64 Decoded Decryption/////////////////////////////////////
	function aes128Decrypt($key, $encryptedData,$iv) {
	  $data = base64_decode($encryptedData);
	  $data = mcrypt_decrypt(MCRYPT_RIJNDAEL_128, $key, $data, MCRYPT_MODE_CBC, $iv);
	  $padding = ord($data[strlen($data) - 1]); 
	  return substr($data, 0, -$padding); 
	}
	echo aes128Decrypt($keyData, $RawOrPlainData, $IVData);
}
?>


