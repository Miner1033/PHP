<?php
// --------------------------------------
// Basics of PHP
// - Variable declaration
// - Data types (string, integer, float, boolean, null, array)
// - Output (echo, var_dump)
// - Conditions (if...else)
// - Loops (foreach)
// - Object-Oriented Programming (class, object, method)
// --------------------------------------

// String type variable
$name = "Rimon"; // $name ভ্যারিয়েবল এ "Rimon" স্ট্রিং রাখা হলো
echo $name . "<br>"; // $name প্রিন্ট করা হলো, সঙ্গে একটা ব্রাউজার লাইন ব্রেক

// Display variable type and value
var_dump($name); // $name এর টাইপ ও মান দেখানো হচ্ছে

// Integer type variable
$age = 22; // $age ভ্যারিয়েবল এ 22 রাখা হলো (integer)
echo $age . "<br>"; // $age প্রিন্ট করা হলো
echo gettype($age) . "<br>"; // $age এর ডেটা টাইপ (integer) প্রিন্ট করা হলো

// Float type variable
$height = 5.7; // $height ভ্যারিয়েবল এ দশমিক সংখ্যা রাখা হলো
echo $height . "<br>"; // $height প্রিন্ট করা হলো

// Boolean type variable
$isStudent = true; // $isStudent ভ্যারিয়েবল এ true রাখা হলো
echo $isStudent . "<br>"; // true প্রিন্ট করলে 1 দেখা যায়

// Array type variable
$courses = ["php", "js"]; // $courses অ্যারেতে দুটি স্ট্রিং রাখা হলো

// Looping through array
foreach ($courses as $course) {
    echo $course . "<br>"; // অ্যারের প্রতিটি আইটেম একে একে প্রিন্ট করা হচ্ছে
}

// Class definition
class Person {
    public $name = "Rimon"; // ক্লাসের প্রপার্টি $name
    public $age = 22;       // ক্লাসের প্রপার্টি $age

    // Method to return greeting message
    public function sayHello() {
        return " Hello,my name is " . $this->name . "<br>"; // this দিয়ে ক্লাসের প্রপার্টিতে অ্যাক্সেস
    }
}

// Object creation
$person = new Person(); // Person ক্লাস থেকে নতুন অবজেক্ট তৈরি করা হলো
echo $person->sayHello(); // sayHello() মেথড কল করে আউটপুট দেখানো হলো

// Null variable
$address = null; // $address ভ্যারিয়েবল এ null মান দেওয়া হলো

// Check if variable is null
if (is_null($address)) {
    echo "Addressis not set."; // যদি null হয়, এই বার্তা প্রিন্ট হবে
} else {
    echo "Address : $address"; // যদি null না হয়, তাহলে মানটা প্রিন্ট হবে
}

?>
