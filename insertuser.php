<?php
$con=mysqli_connect("localhost","wamomu","wamomu","wamomu");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="INSERT INTO users (id, vname, nname, user, password)
VALUES ('', 'VName', 'NName', 'Test','Testpw'),
('','Christian', 'Murlowski', 'Chris','chmu'),
('', 'Tobias', 'Walter', 'Tobi','towa'),
('', 'Maximilian', 'Mock', 'Max','mamo')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo " record added";

mysqli_close($con);
?>