<?php

class database
{

	public $host = "database";
	public $uname = "root";
	public $pass = "password";
	public $db = "docker_php";
	public $connect;

	function __construct()
	{
		$this->connect = mysqli_connect($this->host, $this->uname, $this->pass);
		mysqli_select_db($this->connect, $this->db);
	}

	function tampil_data()
	{
		$data = mysqli_query($this->connect, "select * from user");
		$rows = mysqli_fetch_all($data, MYSQLI_ASSOC);
		return $rows;
	}

	function input($nama, $alamat, $nohp)
	{
		mysqli_query($this->connect, "insert into user values(NULL,'$nama','$alamat','$nohp')");
	}

	function hapus($id)
	{
		mysqli_query($this->connect, "delete from user where id='$id'");
	}

	function edit($id)
	{
		$data = mysqli_query($this->connect, "select * from user where id='$id'");
		$rows = mysqli_fetch_all($data, MYSQLI_ASSOC);
		return $rows;
	}

	function update($id, $nama, $alamat, $nohp)
	{
		mysqli_query($this->connect, "update user set nama='$nama', alamat='$alamat', nohp='$nohp' where id='$id'");
	}
}
