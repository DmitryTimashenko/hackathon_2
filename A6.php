<?php

class A
{

    /**
     * @return Boolean
     */
    function canSplit($nums)
    {
        if (count($nums) < 2) {
            return false;
        }

        $sum = array_sum($nums);
        $n = count($nums);
        $average = $sum / $n;

        $map = [];

        for ($i = 0; $i < $n; $i++) {
            $map[$nums[$i]][1] = 1;
             for ($s = 0; $s <= $sum; $s++) {
                for ($j = 1; $j <= $n; $j++) {
                    if (isset($map[$s][$j])) {
                        $map[$s + $nums[$i]][$j + 1] = 1;
                    }
                }
            }
        }

        for ($i = 1; $i < $n; $i++) {
            for ($s = 0; $s <= $sum; $s++) {
                if (isset($map[$s][$i]) && ($s / $i == $average)) {
                    return true;
                }
            }
        }
        return false;
    }

    function printMap($map, $n, $sum)
    {
        print("\n   \t ---- ");
        for ($i = 1; $i <= $n; $i++) {
            print(" $i ");
        }
        for ($s = 0; $s <= $sum; $s++) {
            print("\n $s \t ---- ");
            for ($i = 1; $i < $n; $i++) {
                if (isset($map[$s][$i])) {
                    print('1 |');
                } else {
                    print('  |');
                }
            }
        }

        die();
    }
}

//
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
var_dump((new A())->canSplit([10, 4, 1, 1]));



/*

1, 1, 5, 5, 6, 10, 13, 14, 17

*/
