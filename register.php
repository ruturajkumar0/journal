<?php

$conn=mysqli_connect("localhost","root","","ijpr");

if(isset($_POST['register']))
{

$name=$_POST['name'];
$email=$_POST['email'];

$password=password_hash(
$_POST['password'],
PASSWORD_DEFAULT
);

mysqli_query(
$conn,
"INSERT INTO authors
(fullname,email,password)
VALUES
('$name','$email','$password')"
);

echo "Registration Successful";

}
?>