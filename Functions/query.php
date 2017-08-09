<?php

function query ($string) {

	include "conn.php";

	return mysqli_query($conn,$string);

}

function fetch($string) {

	include "conn.php";

	return mysqli_fetch_assoc($string);
}

