<?php

class Signup
{
	
	private $error = "";

	public function evaluate($data)
	{
	
		foreach ($data as $key => $value) {
		

			if(empty($value))
			{
				$this->error = $this->error . $key .  " is empty! <br>";	
			}

			if($key == "email")
			{	
				if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
					
					$this->error = $this->error . " invalid email! <br>";
				}
			}

			if($key == "first_name")
			{	
				if (is_numeric($value)) {
					
					$this->error = $this->error . " first name cant be a number! <br>";
				}

				if (strstr($value, " ")) {

					$this->error = $this->error . " first name cant have spaces! <br>";
				}
				
			}

			if($key == "last_name")
			{	
				if (is_numeric($value)) {
					
					$this->error = $this->error . " last name name cant be a number! <br>";
				}

				if (strstr($value, " ")) {

					$this->error = $this->error . " last name cant have spaces! <br>";
				}

			}


		}

		if ($this->error == "" )
		{
			//no error
			$this->create_user($data);
			
		}else
		{
			//if error return error
			return $this->error;
		}

	}

	public function create_user($data)
	{
		$first_name = ucfirst($data['first_name']);
		$last_name = ucfirst($data['last_name']);
		$email = $data['email'];
		$password = $data['password'];

		//create these

		$user_id = $this->create_userid();
		$url_address = strtolower($first_name) . "." . strtolower($last_name);






		$query = "insert into users (user_id,first_name,last_name,email,password,url_address) 
		values ('$user_id','$first_name','$last_name','$email','$password','$url_address')";

		
		$DB = new Databse();
		$DB->save($query);

	}



	private function create_userid()
	{
		$length = rand(4,19);
		$number = "";
		for ($i=0; $i < $length; $i++) 
		{ 
			$new_rand = rand(0,9);
			$number = $number . $new_rand;

		}

		return $number;
	}
}

?>