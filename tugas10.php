<?php
$arr = array(2,10,17,1,9,6,11,7,0);

print("Sebelum Di Sorting :<br>");
print_r($arr);
echo "<br>";

print("<br> Setelah Disorting (bubble Sort) :<br>");
$arr = bubble_sort($arr);
print_r($arr);
function bubble_sort($arr){
  $n = count($arr);
  for($i=0; $i<$n; $i++)
  {
    for($j = $n-1; $j>$i; $j--)
    {
      if($arr[$j] < $arr[$j-1]){
        $temp = $arr[$j];
        $arr[$j] = $arr[$j-1];
        $arr[$j-1] = $temp;
      }
    }
  }
  return $arr;
}




 ?>
