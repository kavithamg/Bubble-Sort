<?php
    //creating function bubble_sort 
   function bubble_sort($arr) {
    $size = count($arr)-1;  //size of an array
    for ($i=0; $i<$size; $i++) {
        for ($j=0; $j<$size-$i; $j++) {
            $k = $j+1;
            if ($arr[$k] < $arr[$j]) {
                // Swap elements at indices: $j, $k
                list($arr[$j], $arr[$k]) = array($arr[$k], $arr[$j]);
            }
        }
    }
    return $arr;
}
$arr = array(1,3,2,8,5,7,4,0); // input arrays

print("Before sorting");
print_r($arr);   // print the input array
  echo "<br/>";
  echo "<br/>";

$arr = bubble_sort($arr);
print("After sorting by using bubble sort");
print_r($arr);   // print the output array
?>