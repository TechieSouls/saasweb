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

class Home extends BaseController
{
	private $homeModel;
	private $serviceModel;
	private $timeSlotModel;
	private $workingPatternModel;
	private $appointmentModel;
	private $notificationModel;
	private $feedbackModel;
	public $session;


	 function __construct() {
		//parent::__construct();
		$this->homeModel =  new \App\Models\HomeModel();
		$this->notificationModel =  new \App\Models\NotificationModel();
		$this->session = session();

	}
	public function index()
	{
		//if(!$this->session->has('logged_in')) {
		//	return redirect()->to(site_url().'/webportal/login');
		//} else {
			return redirect()->to(site_url().'/saas/main');
		//}
	}

	
	
	public function loginApi() {
		
		$request = \Config\Services::request();
		
		
		//if( $request->getVar('submit')) {
		//print_r($request->getJSON());
				//$data['email'] =  $request->getJSON('email');
				//$data['password'] =  $request->getJSON('password');
		//print_r($data);
			$resData = $this->homeModel->userLogin((array)$request->getJSON());
			//print_r($resData);
			if($resData == 0) {
				$response = array('status'=>'error','message'=>'Invalid Email or Password','data'=>[]);
			} else if(isset($resData['id'])) {
				$response = array('status'=>'success','data'=>$resData);
			} else {
				$response = array('status'=>'error','message'=>'Something went wrong!','data'=>[]);
			}
		//	print_r($resData);
			return json_encode($response,true);
	//	}
	}
	
	public function signup() {
		return view('signup');
	}
	
	public function signupApi() {
		
		$request = \Config\Services::request();
		//if( $request->getVar('submit')) {
				/*$data['fullname'] =  $request->getVar('fullname');
				$data['countryCode'] =  $request->getVar('countryCode');
				$data['phone_number'] =  $request->getVar('phone');
				$data['email'] =  $request->getVar('email');
				$data['password'] =  md5($request->getVar('password'));*/
		
		
			$resData = $this->homeModel->userSignUp((array)$request->getJSON());
			if($resData == 0) {
				$response = array('status'=>'error','message'=>'User Already Exists','data'=>[]);
			} else if(isset($resData['id'])) {
				$response = array('status'=>'success','data'=>$resData);
			} else {
				$response = array('status'=>'error','message'=>'Something went wrong!','data'=>[]);
			}
			
						return json_encode($response,true);

		//}
	}
	
	//--------------------------------------------------------------------
	
	
	public function saveFeedback() {
	
		$request = \Config\Services::request();
		$requestData = (array)$request->getJSON();
		$requestData['created_at'] = ''.date('Y-m-d H:i:s').'';

		$this->feedbackModel->saveFeedback($requestData);
		$response = array('status'=>'success','data'=> []);
		return json_encode($response,true);
	}
	
	public function uploadPersonalImage() {
		
		$file = $this->request->getFile('userfile');
		$filepath   =  FCPATH.'public/uploads/';
         
		
		$newName = $file->getRandomName();
		$status = $file->move($filepath, $newName);
		 
		if($status == 1) {
			$uploaded_path = "public/uploads/".$newName;
			$response = array('status'=>'success','data'=>$uploaded_path);
			
		} else {
			$response = array('status'=>'error','message'=>'Something went wrong!','data'=>[]);
		}
		return json_encode($response,true);
		
         

        
	}	
}
