<?php
$servername = "216.12.210.86";
$username = "fifahdco_user";
$password = "YK3dcF0S0u4wvz3N";
$dbname = "fifahdco_db";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT description FROM linktoplay_information where id = 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["description"];
    }
} else {
    echo "ขณะนี้ยังไม่มีลิ้ง";
}
$conn->close();
?>