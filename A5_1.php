<?php

class A
{
    function closestPal($n) {
        if('0' === $n) {
            return '1';
        }

        if($n <  11) {
            return strval($n - 1);
        }

        $middleId = intdiv(strlen($n), 2);
        $head = substr($n, 0, $middleId);

        if(strlen($n) % 2 !== 0) {
            $middle = $n[$middleId];
            $tail = substr($n, $middleId + 1);
        } else {
            $middle = '';
            $tail = substr($n, $middleId, intdiv(strlen($n),2));
        }

        if (strrev($tail) > $head) {
            $nextPal = $this->getPal($head, $middle);
            $prevPal =  $this->getPrevPal($head, $middle);
        } else if (strrev($tail) < $head) {
            $nextPal = $this->getNextPal($head, $middle);
            $prevPal =  $this->getPal($head, $middle);
        } else {
            $nextPal = $this->getNextPal($head, $middle);
            $prevPal =  $this->getPrevPal($head, $middle);
        }

        var_dump($nextPal);
        var_dump($prevPal);

        $nextDistance = $nextPal - $n;
        $prevDistance = $n - $prevPal;

        if ($nextDistance < $prevDistance) {
            return $nextPal;
        }
        return $prevPal;
    }

    function getPal($head, $middle) {
        return $head . $middle . strrev($head);
    }

    function getNextPal($head, $middle) {
        $headLen = strlen($head);
        if($middle === '') {
            $head = strval($head + 1);
            if(strlen($head) > $headLen) {
                $middle = '0';
                $head = substr($head, 0, -1);
            }
            return $head . $middle . strrev($head);
        }

        $middle = $middle + 1;
        $head = $head + intdiv($middle, 10);
        $middle = $middle % 10;
        if(strlen($head) > $headLen) {
            $middle = '';
        }
        return $head . $middle . strrev($head);
    }

    function getPrevPal($head, $middle) {
        $headLen = strlen($head);
        if ($middle === '') {
            $head = $head - 1;
            if ($head < 1) return '9';
            if(strlen($head) < $headLen) {
                $middle = '9';
                $head .= substr($head, 0, -1);
            }
            return $head . $middle . strrev($head);
        }

        if ($middle === '0') {
            $middle = '';
            $head .= '0';
            $head --;
            if(strlen($head) > $headLen) {
                $middle = '9';
                $head = substr($head, 0, -1);
            }

        } else {
            $middle = $middle - 1;
        }

        return $head . $middle .  strrev($head);
    }
}


var_dump((new A())->closestPal("100"));
//var_dump((new A())->closestPal("1000"));
//var_dump((new A())->closestPal("11011"));
//var_dump((new A())->closestPal("123892133"));
