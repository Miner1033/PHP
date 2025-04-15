<?php
$name="Rimon";
echo $name."<br>";
var_dump($name);

$age=22;
echo $age."<br>";
echo gettype($age)."<br>";
$height=5.7;
echo $height."<br>";
$isStudent=true;
echo $isStudent."<br>";
// $courses=["php","JS"];
// print_r($courses);

$courses=["php","js"];
foreach($courses as $course){
echo $course."<br>";
}


class Person{
public $name="Rimon";
public $age=22;
public function sayHello()
{
    return " Hello,my name is ".$this->name."<br>";
}

}
$person =new Person();
echo $person->sayHello();

$address=null;
if(is_null($address))
{
    echo "Addressis not set.";
}
else{
    echo "Address : $address";
}


?>