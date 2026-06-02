$year=date('Y');

$article_id=15;

$doi="10.0000/IJPR."
.$year."."
.str_pad($article_id,3,"0",STR_PAD_LEFT);

echo $doi;