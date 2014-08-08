<?php
$con=mysqli_connect("localhost","USERNAME","PASSWORD","DBNAME");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM Chat");

while($row = mysqli_fetch_array($result)) {
  echo "<p style='background-color:#666666'>";
  echo  $row['User'] . "----- " . $row['Message'] ;
  echo "</p>";
}
mysqli_close($con);

?>

