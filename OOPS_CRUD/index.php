<?php

include 'Mango.php';

$obj = new Database();

// $obj->insert('student',['student_name'=>'Manish_kuamr','age'=>'18','city'=>'Azamgarh']);

$obj->insert('student', ['student_name' => 'Rohit_kuamr', 'age' => '38', 'city' => 'Naranshi']);

echo "Insert Result is : ";

print_r($obj->getResult());





?>