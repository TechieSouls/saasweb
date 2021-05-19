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


		$plans = $this->planModel->findAllActivePlansJoinFeatures();

		//Lets create two maps for removing duplicacy of features and plans
		$plansFeaturesMap = array();//Key Value map for tracking plan Id and Features List
		$plansMap = array(); // Key value map for Plan Title  and Plan Data

		foreach($plans as $plan) {
			//Lets check if key already exists in map
			//then fetch the features list corresponsing to it.
			if (array_key_exists( $plan['title'], $plansFeaturesMap)) {
				//"Key exists!";
				$featuresList = $plansFeaturesMap[$plan['title']];
			} else {
				 //"Key does not exist!"; Create new Array
				 $featuresList = array();
				 $plansMap[$plan['title']] = $plan;
			}
			
			//Add the features in it.
			array_push($featuresList, $plan);
			$plansFeaturesMap[$plan['title']] = $featuresList;

		}
		
		$plansList = array();
	
		foreach ($plansMap as $titleKey => $planDataRecord) {

			$planDataRecord["features"] = $plansFeaturesMap[$titleKey];
			array_push($plansList, $planDataRecord);
		}

		$data['title'] = 'Main Page';
		$data['plans'] = $plansList;
		
		$return = view('templates/outer-header',$data);
		$return .= view('mainPage');
		$return .= view('templates/outer-footer');
		if ($return)
        {
            return $return;
        }

	}

	function contactus() {

		$data['title'] = 'Contact Us';
		$return = view('templates/outer-header',$data);
		$return .= view('contactus');
		$return .= view('templates/outer-footer');
		if ($return)
        {
            return $return;
        }

	}

}