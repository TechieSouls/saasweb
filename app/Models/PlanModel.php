<?php namespace App\Models;
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
use CodeIgniter\Model;
use Config\Services;


class PlanModel extends Model {
    protected $table      = 'plans';
	protected $primaryKey   = 'id'; 
	protected $allowedFields = [
        'title', 'price', 'currency', 'main_feature', 'active'
    ];

    public function findAllActivePlans() {

        return $this->where('active =', 1)->get()->getResult();

    }

    public function findPlanByPlanId($planId) {

        $row = $this->where("id = ", $planId)->get()->getResult();
        if (is_array($row) && sizeof($row) > 0) {  
            return $row[0];
        } else {  
            return 0;  
        }

    }

    public function findAllActivePlansJoinFeatures() {

        return $this->query('SELECT * FROM plans LEFT JOIN features ON plans.id = features.plan_id WHERE plans.active = 1 AND features.active = 1')->getResultArray();

    }

}
