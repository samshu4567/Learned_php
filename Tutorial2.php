<?php

$arr = [
    ["Name"=>"Shubham","Age"=>"28","City"=>"Delhi"],
    ["Name"=>"Amar","Age"=>"40","City"=>"Delhi"],
    ["Name"=>"SAvi","Age"=>"30","City"=>"GKP"],
    ["Name"=>"Devesh","Age"=>"18","City"=>"BANARAS"],
];

echo "<table border=2>";
foreach ($arr as $value) {
    echo "<tr>";
foreach ($value as $key=>$v) {
    echo "<td>";
    print_r( $key  ." : " . $v );

    

    echo"<br>";

    echo "</td>";

}
echo "</tr>";
}
echo"</table>";

?>


<!-- Question:    ["Name"=>"Devesh","Age"=>"18","City"=>"BANARAS","skill"=>['JAVA']],
 -->


 <!-- remove element and add element into array -->

 <?php
 $arr = ["Shubham","Sam","SAvi","Amar"];
 

 //to add from last 
//  array_push($arr,"Devesh");

//to delete from last 
// array_pop($arr);

//to delete in row
array_splice($arr,-2);


 print_r($arr);
 
 ?>