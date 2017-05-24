<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
require 'DoctorClass.php';
$doctorObj = new DoctorClass();
$result = $doctorObj->getListOfDoctorsAssociatedtoHospitals();
?> <?php
if ($result->num_rows > 0)?>
<?php { ?> <table> <?php
    echo "<tr>";echo "<th>"; echo "Sr. no.";echo "</th>"; echo "<th>"; echo "Doctor Name"; echo "<th>"; echo "Qualification"; echo "</th>";echo "</th>"; echo "<th>"; echo "Hospital Name"; echo "</th>";echo "<th>"; echo "Location"; echo "</th>"; echo "</tr>";
	$i =1;
    while($row = $result->fetch_assoc()) 
	{
		echo "<tr>";
		echo "<td >" .$i++. "</td>" ;
		echo "<td >" .$row["doctor_name"]. "</td>" ;
		echo "<td>" .$row["qualification"]. "</td>" ;
		echo "<td>" .$row["hospital_name"]. "</td>" ;
		echo "<td>" .$row["location"]. "</td>" ;
		 echo "</tr>";
	 }
     } 
?>
</table>
</body>
</html>