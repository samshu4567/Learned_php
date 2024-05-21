<?php
$name = ["Shubham","Sam","Savio","andra"];

for($i=0; $i< count($name); $i++){   // to print whole array use count
    echo "<h1 style= 'color:red'>My name is $name[$i]</h1>" ;
}
?>
<!-- for each -->
<?php
$name = ["Shubham","Sam","Savio","andra"];

foreach($name as $detail){
    echo "<h3>" .$detail  ."</br>" ."</h3>";
}
?>
 <!-- Associative array -->
<?php
$user=[
    "name"=>"Shubham",
    "age"=>25,
    "Phone"=>9936846666,
    "E-Mail"=>"jais.shubham1999@gmail.com",
    "Address"=>"New Delhi"
];

echo $user["Address"]  ."<br>";

foreach( $user as $key=> $data){
    echo $key ." : " .$data ."<br>";
}

foreach($user as $key=> $data):
    echo $key ." : " .$data ."<br>";
    endforeach
?>

<!-- Multidimensional Array -->

<?php
$arr = [
    [1,"Shubham","Shub@gmail.com"],
    [2,"Savi","savi@gmai.com"],
    [3,"Amar", "amar@gamil.com"]
];

// echo "<pre>";   // <pre> tag is used preformatted text. Text in a <pre> element is displayed in a fixed-width font

// print_r ($arr);  //print_r is used to print all the array

// count is basically used as array.length

for($i=0; $i< count($arr); $i++){
    for($j=0; $j< count($arr[$i]); $j++){
    print_r ($arr[$i][$j]) ;
    echo "<br>";
 
    };
};
echo "<br>";
echo "<br>";
?>

<!-- Display data from array into table -->

<?php
$arr = [
    [1,"Shubham","Shub@gmail.com"],
    [2,"Savi","savi@gmai.com"],
    [3,"Amar", "amar@gamil.com"],
    [4,"Vinay","vinay@gmail.com"],
    [5,"Sam","sam@gmail.com"]
];
echo "<table border=2>";
for ($i= 0; $i< count($arr); $i++){
    echo "<tr>";
    for($j= 0; $j< count($arr[$i]); $j++){
        echo "<td>";
        print_r ($arr[$i][$j]);
        echo "<br>";
        echo "</td>";
    
    };
    echo "</tr>";

};
echo "</table>";
?>