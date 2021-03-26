<?php namespace App\Controllers;
header('Access-Control-Allow-Origin: *');

header('Access-Control-Allow-Methods: GET, POST, PUT');

header("Access-Control-Allow-Headers: X-Requested-With");
//use CodeIgniter\Restful\ResourceController;

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);


use \DateTime;
use \DateTimeZone;

class Saas extends BaseController {
	
	private $homeModel;
	public $session;

	function __construct() {
		$this->homeModel =  new \App\Models\HomeModel();
		//this->session = \Config\Services::session();
		$this->session = session();

	}

	function main() {

		$data['title'] = 'Main Page';
		$return = view('templates/outer-header',$data);
		$return .= view('mainPage');
		$return .= view('templates/outer-footer');
		if ($return)
        {
            return $return;
        }

	}
}