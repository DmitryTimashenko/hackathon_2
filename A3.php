<?php

class A {

    function isPrime($n) {
        if ($n <= 1) return false;
        if ($n <= 3) return true;
        if ($n % 2 == 0 || $n % 3 == 0) return false;
        
        for ($i = 3; $i <= sqrt($n); $i+=2){
            if ($n % $i == 0) return false;     
        }
        return true;
    }

    function isPalindrome($x){
        return $x == strrev($x);
    }

    function getPrimePal($n) {
        while (true) {
            if (strlen($n) % 2 === 0 && $n > 11){
                $n = pow(10, ceil(log10($n+1)));
                continue;
            }
            if (!$this->isPalindrome($n)) {
                $n++;
                continue;
            }
            if ($this->isPrime($n)) return $n;
            $n++;
        }
    }
}