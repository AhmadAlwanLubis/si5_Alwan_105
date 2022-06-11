<?php 
class Auth extends CI_Model 
{
	
	public function __construct()
	{
        parent::__construct();
	}

	function register($username,$password,$email)
	{
		$data_user = array(
			'username'=>$username,
			'password'=>$password,
			'email'=>$email
		);
		$this->db->insert('admin',$data_user);
	}
}
?>