<?php
$FileName=$_FILES['fuResume']['name'];
$TmpName=$_FILES['fuResume']['temp_name'];
move_uploaded_file($TmpName,$FileName);

echo("File uploaded Successfuly");


?>