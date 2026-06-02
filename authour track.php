<?php

$email=$_POST['email'];

$result=mysqli_query(
$conn,
"SELECT * FROM manuscripts
WHERE email='$email'"
);

while($row=mysqli_fetch_assoc($result))
{
?>

<h3><?php echo $row['article_title']; ?></h3>

Status:
<b><?php echo $row['status']; ?></b>

<hr>

<?php
}
?>