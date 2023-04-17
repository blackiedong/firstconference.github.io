<?php
$data = $_POST['data'];
// loop through the rows
foreach ($data as $row) {
  // loop through the cells in each row
  foreach ($row as $cell) {
    echo $cell . "<br>";
  }
}
?>