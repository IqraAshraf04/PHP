<!DOCTYPE html>
<html>
<head>
    <title>PHP</title>
</head>
<body>
<?php
$name= "PHP";
echo $name;

// 

$a = 1;
$b = 3;
$z = $a + $b;
echo $z;

// 

for($k = 0; $k <= 10; $k++) {
    echo $k."<br>";
}
$x=0;
while($k <= 10) {
    echo $x;
    $x++;
}

// 

$array = ['HTML', 'CSS', 'BOOTSRTAP'];
// echo $array;
print_r($array);
foreach($array as $key => $value) {
    echo "<br>" . $key;
    echo "<br>" . $value;
    
}





?>

</body>
</html>