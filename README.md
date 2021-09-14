## Задача 1 (easy)

Дан массив целых чисел - ***arr***, а также целое число ***sum***   
Необходимо найти индексы arr двух чисел, сумма которых будет равна sum.

***Ограничения:***

2 <= nums.length <= 10^4  
-10^9 <= nums[i] <= 10^9  
-10^9 <= target <= 10^9   
Существует только один правильный ответ

***Примеры:***

Input: arr = [3,3], sum = 6  
Output: [0,1] 

Input: arr = [3,2,4], sum = 6  
Output: [1,2]

***

```injectablephp
class A { 
    /** 
     * @return Integer[] 
     */ 
    function twoSum($arr, $sum) 
    { 
    
    } 
}
```

А можете ли вы ее решить не полным перебором?



## Задача 2 (easy)

Дано целое число, необходимо определить является ли число палиндромом.
Числа-палиндромы — числа, которые в определённой позиционной системе исчисления (как правило — в десятичной) читаются одинаково как справа налево, так и слева направо.

***Ограничения:***

-2^31 <= x <= 2^31 - 1

***Примеры:***

Input: x = 121  
Output: true

Input: x = -121  
Output: false

***

```injectablephp
class A { 
    function isPal($x) { 
    
    } 
}
```


## Задача 3 (medium)

https://www.geeksforgeeks.org/palindromic-primes/

Дано число ***n***, необходимо найти простое число-палиндром, которое больше или равно числу ***n***.

***Ограничения:***

1 <= n <= 10^8

***Примеры:***

Input: n = 6  
Output: 7

Input: x = -121  
Output: false

***

```injectablephp
class A { 
    function getPrimePal($n) {
    
    }
}
```


## Задача 4 (medium)

Дан массив ***nums***, необходимо "выделить" подмассив (возможно пустой), который если удалить из основного массива, то сумма его чисел будет делима без остатка на число ***p***. Верните длину этого подмассива или **_-1_** если такое невозможно.

https://www.geeksforgeeks.org/length-of-smallest-subarray-to-be-removed-to-make-sum-of-remaining-elements-divisible-by-k/

https://leetcode.com/problems/make-sum-divisible-by-p/

***Ограничения:***

1 <= nums.length <= 105  
1 <= nums[i] <= 109  
1 <= p <= 109

***Примеры:***

Input: nums = [3,1,**4**,2], p = 6  
Output: 1

Input: nums = [1,2,3], p = 3  
Output: 0

Input: nums = [1,2,3], p = 7  
Output: -1

***

```injectablephp
class A { 
    /** 
    * @return Integer 
    */ 
    function minSubarray($nums, $p) { 
    
    }
}
```



## Задача 5 (hard)

Дана строка **_s_**, в которой хранится целое число n, необходимо найти ближайшее число-палиндром исключая само число n (в формате строки).  
Под ближайшим числом подразумевается минимальная разность по модулю между найденным числом и **_n_**.  
Если найдены два числа больше и меньше **_n_** (разность по модулю равна), то вернуть минимальное.

https://afteracademy.com/blog/find-the-closest-palindrome

https://leetcode.com/problems/find-the-closest-palindrome/

***Ограничения:***

1 <= s.length <= 18  
s содержит только цифры  
s не содержит цифру 0 в самом начале строки
n целое число из диапазона [1, 10^18 - 1].

***Примеры:***

Input: s = "123"    
Output: "121"  

Input: s = "1"   
Output: "0"

***

```injectablephp
class A { 
    function closestPal($s) {
    
    }
}
```


## Задача 6 (hard)

Дан массив nums целых чисел. Необходимо определить возможно ли разделить массив на два непустых массива, так чтобы среднее значения двух новых массивов равны.

https://ru.stackoverflow.com/questions/710701/partition-problem-%D1%80%D0%B0%D0%B7%D0%B1%D0%B8%D0%B5%D0%BD%D0%B8%D0%B5-%D0%BC%D0%BD%D0%BE%D0%B6%D0%B5%D1%81%D1%82%D0%B2%D0%B0-%D0%BD%D0%B0-%D0%BF%D0%BE%D0%B4%D0%BC%D0%BD%D0%BE%D0%B6%D0%B5%D1%81%D1%82%D0%B2%D0%B0-%D1%81-%D0%BE%D0%B4%D0%B8%D0%BD%D0%B0%D0%BA%D0%BE%D0%B2%D0%BE%D0%B9-%D1%81%D1%83%D0%BC%D0%BC%D0%BE%D0%B9-%D0%B2%D0%B0%D1%80

https://www.geeksforgeeks.org/partition-problem-dp-18/

https://leetcode.com/problems/partition-equal-subset-sum/

***Ограничения:***

1 <= nums.length <= 30  
0 <= nums[i] <= 104

***Примеры:***

Input: nums = [3,1]   
Output: false

Input: nums = [1,2,3,4]   
Output: true

***

```injectablephp
class A { 
    /** 
    * @return Boolean 
    */ 
    function canSplit($nums) { 
    
    }
}
```
