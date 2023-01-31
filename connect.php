<?php

$con = new mysqli('localhost', 'root', '', 'bootstrap_crud_db');

if (!$con) {
    die(mysqli_error($con));
}
