$date = "DD-MM-YYYY";

$exploded = explode("-", $date);

$temp = $date[0];
$exploded[0] = $exploded[2];
$exploded[2] = $temp;

$imploded = implode("/", $exploded);

echo $imploded;
