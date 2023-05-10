<?php

//Index array
$cars=array("Volvo","BMW","TOYOTA");

echo "I like ".$cars[0]." , ".$cars[1]." and ".$cars[2];
$arraylength=count($cars);

for ($x=0;$x <$arraylength;$x++){
    echo $cars[$x];
    echo "<br>";
}
//Associative array
$dogs=array("Jim"=>"21","Sam"=>"45","Bob"=>"12");

foreach($dogs as $key =>$value){
    echo "I am ".$key . "and i am ".$value." years old <br>";
}
var_dump($dogs);
//adding values in an array
$money=array(323,123,1,345,543);
$add=0;
$length=count($money);
for($x=0;$x<$length;$x++){
    $add=$add+$money[$x];
}
//multidimensional array
echo "The total is ".$add."<br>";
$group=array(
    $ricky= array("Tom","Sam","Bill"),
    array("Joe"),
    array("timmy","Ricky","Pricky")
);
print_r($group);
echo "Special".$group [0][2];
$data=[
    'Game of thrones'=>['Jiame','Catelyn','Cersei'],
    'Black'=>['Tom','Sam']
];
echo "<h1> Famous TV series and Actors</h1>";
foreach($data as $series =>$actors){
    echo "<h2>$series</h2>";
    foreach($actors as $people){
        echo "<div>$people</div>";
         
    }
}



?>