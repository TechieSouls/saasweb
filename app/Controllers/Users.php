<?php namespace App\Controllers;
header('Access-Control-Allow-Origin: *');

header('Access-Control-Allow-Methods: GET, POST, PUT');

header("Access-Control-Allow-Headers: X-Requested-With");
//use CodeIgniter\Restful\ResourceController;

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
require_once('/Library/WebServer/Documents/jrm-php/stripe-php-7.67.0/init.php');


use \DateTime;
use \DateTimeZone;

class Users extends BaseController {

    private $usersModel;
	public $session;

	function __construct() {
		$this->usersModel =  new \App\Models\UsersModel();
		//this->session = \Config\Services::session();
		$this->session = session();

    }
    function index() {

        if(!$this->session->has('logged_in')) {
			return redirect()->to(site_url().'/webportal/login');
		}
        $page = 'Users';
        $data['resData'] = $this->usersModel->getAllUsers();
       // echo "<pre>";print_r($data);
		$data['title'] = ucfirst($page);
		$return  = view('templates/header', $data);
        $return .= view('users', $data);
        $return .= view('templates/footer');

        if ($return)
        {
            return $return;
        }

    }

}