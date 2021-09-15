<?php 
class A { 
    private $cache;
    private $sum;
    private $total;

    /**
     * @return Boolean
     */
    function canSplit($nums) {
        if(count($nums) < 2) {
            return false;
        }

        $this->total = count($nums);
        $this->sum = array_sum($nums);
        $this->cache = [];

        $leftSum = 0;
        $leftNum = 0;

        asort($nums);

        return $this->dfs(array_values($nums), 0, $leftSum, $leftNum);
    }

    function dfs ($nums, $idx, $leftSum, $leftNum) {
        if ($idx === count($nums)) {
            if(0 === $leftNum || 0 === $this->total - $leftNum) {
                return false;
            }

            return $leftSum / $leftNum == ($this->sum - $leftSum) / ($this->total - $leftNum);
        }

        if (isset($this->cache[$idx][$leftSum][$leftNum]))
            return $this->cache[$idx][$leftSum][$leftNum] == 1;

        $left = $this->dfs(
            $nums, $idx + 1,
            $leftSum + $nums[$idx], $leftNum + 1
        );

        $right = $this->dfs(
            $nums, $idx + 1,
            $leftSum, $leftNum
        );

        $result =  $left || $right;
        $this->cache[$idx][$leftSum][$leftNum] = $result ? 1 : -1;

        return $result;
    }
}


//var_dump((new A())->canSplit([1,2,3,4,5,6,7,8]));
//var_dump((new A())->canSplit([17,5,5,1,14,10,13,1,6]));
//var_dump((new A())->canSplit([0]));
//var_dump((new A())->canSplit([0,13,13,7,5,0,10,19,5]));
//var_dump((new A())->canSplit([1,6,1]));
//var_dump((new A())->canSplit([60,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30]));
var_dump((new A())->canSplit([17,3,7,12,1]));
//var_dump((new A())->canSplit([18,0,16,2]));
//var_dump((new A())->canSplit([10,29,13,53,33,48,76,70,5,5]));


/*

1, 1, 5, 5, 6, 10, 13, 14, 17

*/
