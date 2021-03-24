<?php namespace App\Models;
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
use CodeIgniter\Model;
use \DateTime;
use \DateTimeZone;

class NotificationModel extends Model {
	
	protected $table      = 'notifications';
	protected $primaryKey   = 'notification_id';	
	protected $allowedFields = [
        'notification_id',	'user_id',	'notification_type_id',	'title',	'message',	'created_at',	'created_at_timestamp',	'status'
    ];
	
	public function saveNotification($notification) {
		$userID =  $this->insert($notification);
		return $userID;
	}
	
	public function findNotificationsByUserId($userId, $offset, $limit) {
			
		return $this->where('user_id', $userId)->orderBy('created_at_timestamp', 'desc')->get($offset, $limit)->getResult();
	}
}