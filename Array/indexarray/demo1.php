<?php
$str_data = file_get_contents("emp-records.json");
$data = json_decode($str_data, true);
 
$temp = "<table border=2>";
$temp .= "<tr><th>app_id</th>";
$temp .= "<th>type</th>";
$temp .= "<th>application</th>";
$temp .= "<th>expires_at</th>";
$temp .= "<th>is_valid</th>";
$temp .= "<th>issued_at</th>";
$temp .= "<th>metadata</th>";
$temp .= "<th>scopes</th>";
$temp .= "<th>user_id</th>";
$temp .= "</tr>";

//array to store all userid
 $userid = array();
$j=0;
for($i = 0; $i < sizeof($data); $i++)
{
array_push($userid, $data[$i]["data"]["user_id"]);
$temp .= "<tr>";
$temp .= "<td>" . $data[$i]["data"]["app_id"] . "</td>";
$temp .= "<td>" . $data[$i]["data"]["type"] . "</td>";
$temp .= "<td>" . $data[$i]["data"]["application"] . "</td>";
$temp .= "<td>" . $data[$i]["data"]["expires_at"] . "</td>";
if($data[$i]["data"]["is_valid"]==1)

$temp .= "<td>" . "true" . "</td>";
else
$temp .= "<td>" . "false" . "</td>";
$temp .= "<td>" . $data[$i]["data"]["issued_at"] . "</td>";
$temp .= "<td>" . $data[$i]["data"]["metadata"]["sso"] . "</td>";
$temp .= "<td>" . $data[$i]["data"]["scopes"][0].",".$data[$i]["data"]["scopes"][1] . "</td>";
$temp .= "<td>" . $data[$i]["data"]["user_id"] . "</td>";
$temp .= "</tr>";
}
$temp .= "</table>";
echo $temp;

?>
<h3>Total User is : <?php echo $i ?></h3>
<h3>All userid stored in array is : </h3>
<?php
foreach($userid as $id)
{
echo $id ."<br>";
}

?>


