<?php 

 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "omah_pakcoy";
 $conn = mysqli_connect("$servername", "$username", "$password","$dbname");


 $sql = "SELECT note from light_intencity ORDER BY ID DESC LIMIT 1";
 $result = $conn->query($sql);


 if ($result->num_rows > 0) {

 while($row = $result->fetch_assoc()) {
    echo $row['note']; 
	}
}else{
	echo "Error:" . $sql . "<br>" . $conn->error;
}


?>
