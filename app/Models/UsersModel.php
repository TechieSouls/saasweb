<?php namespace App\Models;
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
use CodeIgniter\Model;
use \DateTime;
use \DateTimeZone;

class UsersModel extends Model {
	protected $table      = 'users';
	protected $primaryKey   = 'id';	
	protected $allowedFields = [
        'id', 'userType','fullname', 'email', 'countryCode','phoneNumber','created_at','photo','status'
    ];	
	
	public function getAllUsers() {
            return $this->get()->getResultArray();
	}
	public function saveFeedback($data) {
		
		$this->save($data);
	}
}