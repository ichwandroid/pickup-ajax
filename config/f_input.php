<?php

include('connect.php');

$dtz = new DateTimeZone("asia/jakarta");

$nis    = $_POST['nis'];
$status = $_POST['status'];

$insert = mysqli_query($connect, "INSERT INTO tbl_scan SET NIS='$nis', STATUS='$status', TIMESCAN=now()");
