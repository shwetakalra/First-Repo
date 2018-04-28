//Ques(1)=>how array_flip work for common Key values 
//Ans=Always pick last common Key value 
<?php 
$name = array("ab"=>"string1","ab"=>"string2","ab"=>"string3");
// // $name = array("ab"=>"string1","ad"=>"string2","ac"=>"string3");
// // $name = array("ab"=>"string1","ad"=>"string1","ac"=>"string1");
$arr_flp =array_flip($name);
var_dump($arr_flp);


//Ques(2)=>how to sort an array on the basis of another array
//eg = array1=array sort in this order array("Gender","Name","Address");
//array2 = array("Name"=>"Shweta","Gender"=>"Female","Address"=>"Rewari")

$array_order=array("Gender","Name","Address");
$name = array("Name"=>"shweta","Gender"=>"Female","Address"=>"Rewari");
$arr_flp =array_merge(array_flip($array_order),$name);
var_dump($arr_flp);
?>