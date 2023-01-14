<?php

class User
{
	public function get_data($id)
	{
		$query = "select * from users where user_id = '$id' limit 1";
		$DB = new Databse();
		$result = $DB->read($query);


		if($result[0])
		{
			$row = $result[0];
			return $row;

		}else
		{
			return false;
		}
	}
}
?>
