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

        $totalSum = array_sum($nums);
        $totalN = count($nums);
        $map = [];
        $map[0] = 1;

        if($totalSum === 0) {
            return true;
        }

        for($i = 0; $i < $totalN; $i++) {
            for($s = $totalSum; $s >=0; $s--) {
                if(isset($map[$s])) {
                    if(isset($map[$s + $nums[$i]])) {
                        $map[$s + $nums[$i]] |= $map[$s] << 1;
                    } else {
                        $map[$s + $nums[$i]] = $map[$s] << 1;
                    }
                }
            }
        }

        foreach ($map as $s => $counts) {
            if(($s * $totalN) % $totalSum === 0) {
                $n = intdiv(($s * $totalN), $totalSum);
                if($n && $n < $totalN && ($counts & (1<<($n)))) {
                    return true;
                }
            }
        }
    
        return false;
    }
}

    

//var_dump((new A())->canSplit([1,2,3,4,5,6,7,8]));
//var_dump((new A())->canSplit([17,5,5,1,14,10,13,1,6]));
//var_dump((new A())->canSplit([0]));
//var_dump((new A())->canSplit([0,13,13,7,5,0,10,19,5]));
//var_dump((new A())->canSplit([1,6,1]));
//var_dump((new A())->canSplit([60,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30]));
//var_dump((new A())->canSplit([17,3,7,12,1]));
//var_dump((new A())->canSplit([18,0,16,2]));
//var_dump((new A())->canSplit([10,29,13,53,33,48,76,70,5,5]));



//var_dump((new A())->canSplit([17,3,7,12,1]));
// var_dump((new A())->canSplit([10, 4, 1, 1]));
// var_dump((new A())->canSplit([3863,703,1799,327,3682,4330,3388,6187,5330,6572,938,6842,678,9837,8256,6886,2204,5262,6643,829,745,8755,3549,6627,1633,4290,7]));



/*

1, 1, 5, 5, 6, 10, 13, 14, 17

*/
