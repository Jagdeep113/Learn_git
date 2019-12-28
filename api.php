<?php 
include 'db.php';
$db=new DB("localhost","training","root","");

if ($_SERVER['REQUEST_METHOD']=="GET") 
{
	$result= json_encode($db->query("SELECT * FROM user"));
	// echo "<pre>";
	print_r($result);
} elseif ($_SERVER['REQUEST_METHOD']=="POST") 
{
	echo "Hello POST";
} else{
	http_response_code(405);
}


 ?>