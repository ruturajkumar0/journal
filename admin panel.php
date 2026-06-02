<?php

$conn = mysqli_connect(
"localhost",
"root",
"",
"ijpr"
);

$result = mysqli_query(
$conn,
"SELECT * FROM manuscripts ORDER BY id DESC"
);

while($row = mysqli_fetch_assoc($result))
{
    echo "<h3>".$row['article_title']."</h3>";

    echo "Author: ".$row['author_name']."<br>";

    echo "Email: ".$row['email']."<br>";

    echo "<a href='uploads/".$row['manuscript_file']."'>
    Download Manuscript
    </a>";

    echo "<hr>";
}
?>