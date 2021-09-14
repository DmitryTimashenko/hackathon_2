<?php

class A {
    /**
     * @return Integer
     */
    function minSubarray($nums, $p) {
        $tmpSum = 0;
        $sum = 0;

        foreach ($nums as &$num) {
            $sum += $num;
        }
        $restToRemove = $sum % $p;

        if(0 === $restToRemove) {
            return 0;
        }

        $map = [ 0 => -1];
        $result = PHP_INT_MAX;

        foreach ($nums as $index => &$num) {
            $tmpSum = ($tmpSum + $num) % $p;
            $map[$tmpSum] = $index;
            $rest = ($tmpSum - $restToRemove + $p) % $p;
            if(isset($map[$rest]) && $map[$rest] != end($map)) {
                $result = min($result, $index - $map[$rest]);
            }
        }

        return $result >= count($nums) ? -1 : $result;
    }
}
