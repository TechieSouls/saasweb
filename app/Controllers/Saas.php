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
	private $appointmentModel;
	public $session;

	function __construct() {
		$this->homeModel =  new \App\Models\HomeModel();
		//this->session = \Config\Services::session();
		$this->session = session();

	}

	public function login() {

		$data['title'] = 'Signin';
		$return = view('templates/outer-header',$data);
		$return .= view('login');
		$return .= view('templates/outer-footer');
        
        if ($return)
        {
            return $return;
        }
	
	}

	public function forgot() {
		
		$data['title'] = 'Forgot Password';
		$return = view('templates/outer-header',$data);
		$return .= view('forgot');
		$return .= view('templates/outer-footer');
        
        if ($return)
        {
            return $return;
        }
	
	}

	
	
	
	public function teamSurvey() {
	
		//if(!$this->session->has('logged_in')) {
		//	return redirect()->to(site_url().'/webportal/login');
		//}
		//$page = 'Appointments';

		$data['title'] = 'Team Survey';
		$return = view('templates/header',$data);
		$return .= view('teamSurvey');
		$return .= view('templates/footer');
		//$return .= view('dashboard', $data);
        
        if ($return)
        {
            return $return;
        }
	}


	public function webloginApi() {
		
		$request = \Config\Services::request();	
		$resData = $this->homeModel->userLogin($_POST);
		if($resData == 0) {

        	return redirect()->to(site_url().'/webportal/login');
			

		} else if(isset($resData['id'])) {
			$newdata = [
				'username'  => $resData['fullname'],
				'email'     => $resData['email'],
				'logged_in' => TRUE
		];
		
		$this->session->set($newdata);
			$response = array('status'=>'success','data'=>$resData);
		}
        return redirect()->to(site_url('webportal/dashboard'));
	}
	



	function viewdetail($id) {

		if(!$this->session->has('logged_in')) {
			return redirect()->to(site_url().'/webportal/login');
		}
		$page = 'View Detail';

		$data['title'] = ucfirst($page);
		$resData['data'] = $this->appointmentModel->findAppointmentByAppId($id);
		//echo $sql = $this->appointmentModel->getLastQuery()->getQuery()."<br>";
		//echo "<pre>"; print_r($resData);

		$return  = view('templates/header', $data);
        $return .= view('viewdetail', $resData);
        $return .= view('templates/footer');

        if ($return)
        {
            return $return;
        }

	}
	function logout() {
		$array_items = ['username', 'email','logged_in'];
		$this->session->remove($array_items);
		return redirect()->to(site_url().'/saas/login');
	  }

	  function workingPattern() {
		  
	  }
	
	  function signup() {

		$data['title'] = 'SignUp';
		$return = view('templates/outer-header',$data);
		$return .= view('signup');
		$return .= view('templates/outer-footer');
        
        if ($return)
        {
            return $return;
        }

	  }

	  function email() {

		$data['firstName'] = "ABCXYZ";
		$data['title'] = "Reset Password";
		return view('templates/email-template.php',$data);


	  }

	  function faq() {


		$data['title'] = 'FAQ';
		$return = view('templates/header',$data);
		$return .= view('faq');
		$return .= view('templates/footer');
		//$return .= view('dashboard', $data);
        
        if ($return)
        {
            return $return;
        }
			
	}
	
	function steps() {
		$data['title'] = 'Steps';
		$return = view('templates/header',$data);
		$return .= view('steps');
		$return .= view('templates/footer');
		if ($return)
        {
            return $return;
        }
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