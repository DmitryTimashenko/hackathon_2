<?php

class A
{
    function isPrime(&$n)
    {
        if ($n <= 1) return false;
        if ($n <= 3) return true;

        if ($n < 25) {
            $primes = [2, 3];
        } else if ($n < 100){
            $primes = [2, 3, 5, 7, 11, 13, 17];
        } else if ($n < 1000) {
            $primes = [2, 3, 5, 7, 11, 13, 17, 19, 23, 29];
        } else  {
            $primes = [2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47, 53, 59, 61, 67, 71, 73, 79, 83, 89, 97];
        }

        foreach ($primes as &$prime) {
            if ($n % $prime === 0) return false;
        }

        if ($n >= 10000) {
            for ($i = 101; $i <= intval(sqrt($n)); $i+=2){
                if ($n % $i == 0) return false;
            }
        }

        return true;
    }

    function isPalindrome($x)
    {
        return $x == strrev($x);
    }

    function getPrimePal($n)
    {
        if (10000000 < $n && $n < 100000000) {
            return 100030001;
        }

        while (true) {
            if (strlen($n) % 2 === 0 && $n > 11) {
                $n = intval(pow(10, ceil(log10($n + 1))));
                continue;
            }

            if ($this->isPalindrome($n) && $this->isPrime($n)) {
                return $n;
            }

            $n++;
        }
    }
}

var_dump((new A())->getPrimePal(51115));
