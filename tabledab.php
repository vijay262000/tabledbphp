<?php
$servername ="localhost";
$username ="root";
$password ="";
$database ="school";

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn)
{
    die("we failed to connect database" . mysqli_connect_error());

}
else
{
    echo "successfully connected to database<br>";
}

//create a table in database

$sql = "CREATE TABLE `sgustudent` (`srno` INT(10) NOT NULL AUTO_INCREMENT , `name` VARCHAR(10) NOT NULL , `age` INT(10) NOT NULL , `schoolname` VARCHAR(10) NOT NULL ,
 PRIMARY KEY (`srno`))";

$result = mysqli_query ($conn, $sql);

//check for the database creation success
if($result)
{
    echo " the table was create successfully!<br>";
}
else
{
    echo "Table was not create successfully------>". mysqli_error($conn);

}


?>