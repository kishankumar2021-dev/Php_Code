<?php

#step1 : make connection

include __DIR__ .'/connection.php';

#step2 : prepare the Query

$id = readline('Enter id number :');
$name = readline('Enter name:');
$branch = readline('Enter Branch name:');
$hod = readline('Branch Hod name:');
$college = readline('Enter college name:');
$address = readline('Enter your address:');
$MoNo = readline('Enter your phone number:');
$email = readline('Enter Email:');
$sql = "INSERT INTO emp(id,name,branch,hod,college,address,MoNo,email) values
(
'{$id}',
'{$name}',
'{$branch}',
'{$hod}',
'{$college}',
'{$address}',
'{$MoNo}',
'{$email}',
);";

#step3 : Execute the Query or Fire the Query

if(mysqli_query($conn,$sql)){

echo 'Record Inserted with pk = '.mysqli_insert_id($conn);

}else{

echo 'Inserted Error'.mysqli_error($conn);
}