$year=date("Y");

$id=125;

$manuscript_id=
"IJPR-".$year."-".
str_pad($id,5,"0",STR_PAD_LEFT);

echo $manuscript_id;