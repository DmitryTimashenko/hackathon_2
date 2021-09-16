<?php

class A
{

    /**
     * @return Boolean
     */
    function canSplit($nums) {
        if(count($nums) < 2) {
            return false;
        }

        $sum = array_sum($nums);
        $mask = array_fill(0, $sum + 1, 0);
        $mask[0] = 1;

        for($i = 0; $i < count($nums); $i++) {
            for($j = $sum; $j >= 0; $j--) {
                if($mask[$j]) {
                    $mask[$j + $nums[$i]] |= $mask[$j] << 1;
                }
            }
        }

        for($j = 0; $j <= $sum; $j++) {
            if(($j * count($nums)) % $sum === 0) {
                $n = intdiv(($j * count($nums)), $sum);
                if($n && $n < count($nums) && ($mask[$j]&(1<<$n))) {
                    return true;
                }
            }
        }
    
        return false;
    }


    
}

    

//
var_dump((new A())->canSplit([1,2,3,4,5,6,7,8]));
var_dump((new A())->canSplit([17,5,5,1,14,10,13,1,6]));
var_dump((new A())->canSplit([0]));
var_dump((new A())->canSplit([0,13,13,7,5,0,10,19,5]));
var_dump((new A())->canSplit([1,6,1]));
var_dump((new A())->canSplit([60,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30]));
var_dump((new A())->canSplit([17,3,7,12,1]));
var_dump((new A())->canSplit([18,0,16,2]));
var_dump((new A())->canSplit([10,29,13,53,33,48,76,70,5,5]));



//var_dump((new A())->canSplit([17,3,7,12,1]));
// var_dump((new A())->canSplit([10, 4, 1, 1]));
// var_dump((new A())->canSplit([3863,703,1799,327,3682,4330,3388,6187,5330,6572,938,6842,678,9837,8256,6886,2204,5262,6643,829,745,8755,3549,6627,1633,4290,7]));



/*

1, 1, 5, 5, 6, 10, 13, 14, 17

*/
