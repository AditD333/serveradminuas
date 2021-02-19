<?php
$link = mysqli_connect("172.19.0.2","trucorp-user","serveradminuas","trucorp");
if (!$link){
echo "Error Connection" . PHP_EOL;
exit;
}


$sql = "SELECT * FROM Users";
$result = $link->query($sql);
$count = 0
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
count++;
echo "ID : ".$row["ID"]."Nama: ".$row["Nama"]."Kantor: ".$row["Kantor"]."<br>";
}
echo "<br><br>"
echo $count;
} else {
echo "0 results";
}

$link->close();
?>