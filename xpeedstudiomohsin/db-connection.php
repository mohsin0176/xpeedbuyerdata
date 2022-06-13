<?php 

class Database{
	private $connection;
 
	public function connect_db(){
		$this->connection = mysqli_connect('localhost', 'root', '', 'buyerdata');
		if(mysqli_connect_error()){
			die("Database Connection Failed" . mysqli_connect_error() . mysqli_connect_errno());
								  }
								}
	public function create($id,$amount,$buyer,$receipt_id,$items,$buyer_email,$buyer_ip,$note,$city,$phone,$hash_key,$entry_at,$entry_by){
	$sql = "INSERT INTO `buyer`( `id`, `amount`,`buyer`,`receipt-id`,`items`,`buyer-email`,`buyer-ip`,`note`,`city`,`phone`,`hash_key`,`entry_at`,`entry_by`) 
		VALUES ('$id','$amount','$buyer','$receipt-id','$items','$buyer_email','$buyer_ip','$note','$city','$phone','$hash_key','$entry_at','$entry_by')";
	$res = mysqli_query($this->connection, $sql);
	if($res){
 		return true;
	}else{
		return false;
	}
						 }

	public function read(){
	$sql = "SELECT * FROM `phone` ";
	$res = mysqli_query($this->connection, $sql);
	return $res;
							}

    public function search($search_by_id,$search_by_date){
    $sql="SELECT * FROM `buyer` WHERE (`id` LIKE '%".$search_by_id."%') AND (`entry_at` LIKE '%".$search_by_date."%')";
	$result = mysqli_query($this->connection, $sql);
	return $result;
	
						 }
}
?>