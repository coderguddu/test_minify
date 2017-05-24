<?php
require 'DB.php';
class DoctorClass
{
  public function getListOfDoctorsAssociatedtoHospitals()
  {
	  $dbObj = new DB();
	  $connection = $dbObj->connect();
	  $days_ago = date('Y-m-d', mktime(0, 0, 0, date("m") , date("d") - 30, date("Y")));
      $sql = "SELECT * FROM tbl_doctor_details where last_updated_at > '".$days_ago."' order by doctor_name,qualification,location,hospital_name LIMIT 150";
      $result = $connection->query($sql);
	  $connection->close();	 
	  return $result;
  }
}
 
?>