<?php

include 'includes/database.php';

if(isset($_POST['submit']))
{

$name=$_POST['name'];
$email=$_POST['email'];
$title=$_POST['title'];
$abstract=$_POST['abstract'];

$file=$_FILES['manuscript'];

$filename=time().'_'.$file['name'];

move_uploaded_file(
$file['tmp_name'],
'uploads/'.$filename
);

mysqli_query(
$conn,
"INSERT INTO manuscripts
(author_name,email,title,abstract,file_name)
VALUES
('$name','$email','$title','$abstract','$filename')"
);

echo "Submitted Successfully";

}
?>