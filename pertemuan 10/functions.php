<?php 

function koneksi()
{
  return  mysqli_connect('localhost', 'root', '', 'pw_183040186');
}

function query($query)
{
$conn = koneksi();

$result = mysqli_query($conn, $query);

if( mysqli_num_rows($result) == 1) {
  return mysqli_fetch_array($result);
}

$rows =[];
while ($row = mysqli_fetch_array($result)) {
$rows[] = $row;
}
return $rows;
}


?>