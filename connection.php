<?php
class connection1
{
	var $con;
	var $db;
	var $sql;
	var $res;
	
	function connect()
	{
		$this->con = mysql_connect("localhost","root","");
		$this->db = mysql_select_db("skf",$this->con);
	}
	
	function savedata($query)
	{
		$this->sql = $query;
		mysql_query($this->sql);
	}
	
	function getdata($query)
	{
		$this->sql = $query;
		$this->res = mysql_query($this->sql);
	}
}


?>