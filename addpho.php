<?php

require 'connect.php';

$sql = "INSERT INTO p_details (name,dob,mob,email,exp,loc) VALUES ('Kalpesh','1994/02/24','9967016292','fdmfd@dgf.com','05','mumbai')";

if (mysqli_query($conn,$sql))
{
	echo "Success";
}
else
{
	echo "failed" .$sql."<br>".mysqli_error($conn);
}

mysqli_close($conn);

?>