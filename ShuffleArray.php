//shuffle an array
<?php 
$arr = array(2,4,1,9,8);
$aray1= $arr;
for($i=0;$i<(count($arr)-2);$i++)
{
    print_r($array1);
    $ran_val = array_rand($array1);
    array_pop($array1);
    
    $arr[$ran_val] = $arr[(count($arr)-1)]; 
    $arr[(count($arr)-1)] = $ran_val;
}
?>