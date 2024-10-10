<?php
require_once('connect.php');

function execute($sql)
{
	//save data into table
	// open connection to database
    $con = mysqli_connect("localhost","root","badien217","shop_quanao");

    mysqli_set_charset($con, 'UTF8');
	//insert, update, delete
	mysqli_query($con, $sql);

	//close connection
	mysqli_close($con);
}

function executeResult($sql)
{
    $con = mysqli_connect("localhost","root","badien217","shop_quanao");
    mysqli_set_charset($con, 'UTF8');
	//insert, update, delete
	$result = mysqli_query($con, $sql);
	$data   = array();
	while ($row = mysqli_fetch_array($result, 1)) {
		$data[] = $row;
	}
	mysqli_close($con);
	return $data;
}

function executeSingleResult($sql)
{
	//save data into table
	// open connection to database
	$con = mysqli_connect("localhost","root","badien217","shop_quanao");
    mysqli_set_charset($con, 'UTF8');
	//insert, update, delete
	$result = mysqli_query($con, $sql);
	$row    = mysqli_fetch_array($result, 1);

	//close connection
	mysqli_close($con);

	return $row;
}