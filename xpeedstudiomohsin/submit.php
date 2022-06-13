<?php
 include('db-connection.php');
 $id=$_POST['id'];
 $amount=$_POST['amount'];
 $buyer=$_POST['buyer'];
 $receipt_id=$_POST['receipt-id'];
 $items=$_POST['items'];
 $buyer_email=$_POST['buyer-email'];
 $buyer_ip=$_POST['buyer-ip'];
 $note=$_POST['note'];
 $city=$_POST['city'];
 $phone=$_POST['phone'];
 $hash_key=$_POST['hash-key'];
 $entry_at=$_POST['entry-at'];
 if ($entry_by>0) {
 $entry_by=$_POST['entry-by'];
 }
 else
 {
 $entry_by=NULL;
 }

$database = new Database();
$database->connect_db();
$result = $database->create($id,$amount,$buyer,$receipt_id,$items,$buyer_email,$buyer_ip,$note,$city,$phone,$hash_key,$entry_at,$entry_by);

if ($result) 
{
$cookie_name = "user";
$cookie_value = "mohsin";
setcookie($cookie_name, $cookie_value, time() + (60*60*24), "/"); // 86400 = 1 day

}


?>