<?php

$connect = mysqli_connect('localhost', 'root', '', 'pickup');
if (mysqli_connect_error()) {
    echo 'Tidak terkoneksi dengan Database' . mysqli_connect_error();
} else {
    echo "<p><button class='btn btn-success btn-sm' type='button' disabled=><span class='spinner-grow spinner-grow-sm' role='status' aria-hidden='true'></span> Terkoneksi dengan Database !</button></p>";
}
