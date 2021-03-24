<?php namespace App\Models;
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
use CodeIgniter\Model;

class ServiceModel extends Model {
	
		protected $table      = 'services';
		protected $primaryKey   = 'id'; 
		protected $allowedFields = [
			'id', 'title','description','is_active',
		];
		
		function findAllServices() {
			//$this->join('service_plans', 'services.id = service_plans.service_id')->where(array('services.is_active' => 1, 'service_plans.is_active' => 1))->findAll();
			//echo $this->getLastQuery();
			return $this->select('id,title, is_active')->findAll();
			
			//return $this->where('is_active' , 1)->findAll();
		}
		function changeServiceStatus($id,$changeStatus) {

			$this->set('is_active', $changeStatus );
			$this->where('id', $id);
			 if($this->update()){
				 $data  = $this->select('is_active')->where('id',$id)->first();
				 return $data['is_active'];
			 }
			  else "error";

		}
		function deleteService($id) {
			
			$query = $this->query('delete FROM service_plans where service_id = '.$id); // deleting from service_plans
			$this->where('id', $id); // deleting from services - part 1
			$this->delete(); // deleting from services - part 2
		}

		function getServiceInfo($id) {

			$result = $this->select('id,title,is_active')->where('id',$id)->get()->getRowArray();
			$result['service_plan'] = $this->query('select * from service_plans where service_id = '.$id)->getResultArray();
			return $result;
		}

		function updateServiceInfo($id,$set) {
			return $this->set($set)->where('id',$id)->update();
		}
		function updateServicePlanInfo($serviceId) {
			
		}
		function insertService($data){
			return $this->insert( $data);
		}

		function findServiceByName($table,$where) {

			return $this->select('id')->where($where)->get()->getRowArray();

		}

		function findServicePlanByName($service_plan,$service_id) {

			return $this->query('select service_plan_id from service_plans where name="'.$service_plan.'" and service_id="'.$service_id.'"')->getRowArray();

		}

		function insertServicePlan($data) {
			$db      = \Config\Database::connect();
			$builder = $db->table('service_plans');
			return $builder->insert($data);
		}

		function updateServicePlan($data,$service_plan_id) {
			$db      = \Config\Database::connect();
			$builder = $db->table('service_plans');

			$builder->set($data);
			$builder->where('service_plan_id', $service_plan_id);
			return $builder->update();

		}


		
}
