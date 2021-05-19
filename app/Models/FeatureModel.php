<?php namespace App\Models;
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
use CodeIgniter\Model;
use Config\Services;


class FeatureModel extends Model {

    protected $table      = 'features';
    protected $primaryKey   = 'id'; 
    protected $allowedFields = [
        'plan_id', 'feature','active'
    ];

    public function findAllActiveFeatures() {

        return $this->where('active =', 1)->get()->getResult();

    }

    public function findFeatureByPlanId($planId) {

        $row = $this->where("plan_id = ", $planId)->get()->getResult();
        if (is_array($row) && sizeof($row) > 0) {  
            return $row;
        } else {  
            return 0;  
        }

    }

    public function findFeatureById($featureId) {

        $row = $this->where("id = ", $featureId)->get()->getResult();
        if (is_array($row) && sizeof($row) > 0) {  
            return $row[0];
        } else {  
            return 0;  
        }

    }


}
