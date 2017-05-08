<?php
	require_once('connection.php');

	function getAll($table)
	{
		$conn = getConnection();
		$q = "SELECT * FROM $table";
		$r = mysqli_query($conn, $q) or die(mysqli_error($conn));
		return $r;
	}

	function getWhere($table, $where)
	{
		$q = "SELECT * FROM $table WHERE ";
		$i = 0;
		foreach ($where as $key => $value) {
			if ($i == 0) {
				$q .= "$key = $value";
			}else {
				$q .= " AND $key = $value";
			}
			$i++;
		}
		$r = mysqli_query($conn, $q);
		return $r;
	}

	function insert($table, $data)
	{
		$q = "INSERT INTO $table (";
		$i = 0;
		foreach ($data as $key => $value) {
			if ($i == 0) {
				$q .= $key;
			}else {
				$q .= ",$key";
			}
			$i++;
		}
		$q .=") VALUES (";
		$i = 0;
		foreach ($data as $key => $value) {
			if ($i == 0) {
				$q .= $value;
			}else {
				$q .= ",$value";
			}
			$i++;
		}
		$q .= ")";
		
		$r = mysqli_query($conn, $q) or die(mysqli_error($conn));
	}

	$data = array('id' => 1, "nama" => "aldo");
	$x = getAll("user", $data);
	var_dump($x);

	/*$x = 1302;
	$x = $x/1000;
	$x = number_format($x, 3);
	$trx = "TRX";
	$trxcode = explode('.', $x);
	foreach ($trxcode as $value) {
		$trx .= $value;
	}
	echo $trx;*/
?>