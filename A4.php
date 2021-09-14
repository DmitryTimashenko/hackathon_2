<?php

class A {
    /**
     * @return Integer
     */
    function minSubarray($nums, $p) {
        $restToRemove = array_sum($nums) % $p;
        if(0 === $restToRemove) {
            return 0;
        }
        $tmpRest = 0;
        $map = [0 => -1];
        $result = PHP_INT_MAX;
        for ($i = 0; $i < count($nums); $i++) {
            $tmpRest = ($tmpRest + $nums[$i]) % $p;
            $map[$tmpRest] = $i;
            $rest = ($tmpRest - $restToRemove + $p) % $p;
            if(isset($map[$rest])) {
                $result = min($result, $i - $map[$rest]);
            }
        }

        return $result >= count($nums) ? -1 : $result;
    }
}

var_dump((new A())->minSubarray([8,32,31,18,34,20,21,13,1,27,23,22,11,15,30,4,2],148));
