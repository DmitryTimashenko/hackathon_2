<?php

class A
{
    function closestPal($s) {
        if('0' === $s) {
            return '1';
        }

        if(strlen($s) === 1) {
            return strval($s - 1);
        }

        $middleId = intdiv(strlen($s), 2);
        $head = substr($s, 0, $middleId);
        $middle = '';
        if(strlen($s) % 2 !== 0) {
            $middle = $s[$middleId];
        }

        $prevPav =
    }

    function getPrevious($head, $middle) {
        $middle = intdiv(strlen($s), 2);
        while ($middle >= 0 && $s[$middle] == '0') {
            $s[$middle] = '9';
            $s[strlen($s) - 1 - $middle] = '9';
            $middle--;
        }
    }
}
