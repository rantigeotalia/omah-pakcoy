<?php
 //Variabel database
 date_default_timezone_set('Asia/Jakarta');
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "omah_pakcoy";
 $conn = mysqli_connect("$servername", "$username", "$password","$dbname");
 // Prepare the SQL statement

$temperature = $_GET["suhu"];
$humidity = $_GET["kelembaban"];
$intencity = $_GET["lux"];
$soil1 = $_GET["soil1Val"];


$id1 = 1;
$id2 = 2;
$id3 = 3;
$dates = date('Y-m-d H:i:s');

//Note Temperatur
if($temperature <= 15){
	$note1 = "Cool";
}elseif ($temperature >= 15 && $temperature <= 30){
	$note1 = "Normal";
}else{
	$note1 = "Hot";
}

//Note Humidity

if($humidity <= 80){
	$note2 = "Dry";
}elseif ($humidity >= 80 && $humidity <= 90) {
	$note2 = "Normal";
}else{
	$note2 = "Wet";
}

//Note Intencity
if($intencity <= 300){
	$note3 = "Dark";
}elseif ($intencity >= 300 && $intencity <= 78900) {
	$note3 = "Normal";
}else{
	$note3 = "Bright";
}

if($soil1 <= 200){
	$note4 = "Dry";
}elseif ($soil1 >= 200 && $soil1 <= 600) {
	$note4 = "Normal";
}else{
	$note4 = "Wet";
}

 $result1 = mysqli_query ($conn,"INSERT INTO humidity (humidity,date,note,device_id) VALUES('".$humidity."', '".$dates."','".$note2."','".$id2."')");  
 
 $result2 = mysqli_query ($conn,"INSERT INTO temperature (temperature,date,note,device_id) VALUES('".$temperature."', '".$dates."','".$note1."','".$id2."')"); 

 $result3 = mysqli_query ($conn,"INSERT INTO light_intencity (light_intencity,date,note,device_id) VALUES('".$intencity."', '".$dates."','".$note3."','".$id3."')");

 $result4 = mysqli_query ($conn,"INSERT INTO soil_moisture (soil_moisture,date,note,device_id) VALUES('".$soil1."', '".$dates."','".$note4."','".$id1."')");  


 
 // if (!$result)
 // {
 // die ('Invalid query: '.mysqli_error($conn));
 // } 
?>