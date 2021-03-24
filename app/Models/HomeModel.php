<?php namespace App\Models;
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
use CodeIgniter\Model;

class HomeModel extends Model
{
	    protected $table      = 'users';
	  protected $primaryKey   = 'id'; 
	protected $allowedFields = [
        'fullname', 'email','password','phoneNumber','countryCode'
    ];


	
	public function userLogin($data){
		
		$this->select('id,fullname,email,phoneNumber,photo,facebookId,status,countryCode')->where(array('email'=> $data['email'],'userType'=>1));  
        $this->where('password', md5($data['password']));  
        $row = $this->first();  
  		
        if (is_array($row) && sizeof($row) > 0)  
        {  
            return $row;  
        } else {  
            return 0;  
        }  
	} 
	function userSignUp($data) {
		
		$this->select('id')->where(array('email'=> $data['email'],'userType'=>1));  
        $row = $this->first(); 
		
       if (is_array($row) && sizeof($row) > 0)   
        {  
          return 0;
			
        } else {  
             
		   
		    $userID =  $this->insert($data);
		   $this->select('id,fullname,email,phoneNumber,photo,facebookId,status,countryCode')->where(array('id'=> $userID));  
        	$rowFirst = $this->first(); 
		
			return $rowFirst;
        }  
	}
}