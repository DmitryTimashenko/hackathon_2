<?php 
class A { 
    /** 
    * @return Boolean 
    */ 
    function canSplit($nums) { 
        if(count($nums) < 2) {
            return false;
        }

        $average = $this->average($nums);
        $sets = [[]];
    
        foreach ($nums as $element) {
            foreach ($sets as $set) {
                $newSet = array_merge([$element], $set);
                if(count($newSet) === count($nums)) {
                    continue;
                }
                if(!empty($newSet) && $this->average($newSet) === $average) {
                    return true;
                }
                $sets[] = $newSet;
            }
        }
    
        return false;
    }  

    function average($set) {
        return array_sum($set) / count($set);
    }
}


var_dump((new A())->canSplit([1,2,3,4,5,6,7,8]));
var_dump((new A())->canSplit([17,5,5,1,14,10,13,1,6]));
var_dump((new A())->canSplit([0]));
var_dump((new A())->canSplit([0,13,13,7,5,0,10,19,5]));
var_dump((new A())->canSplit([1,6,1]));
var_dump((new A())->canSplit([60,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30]));


/*

1, 1, 5, 5, 6, 10, 13, 14, 17

*/