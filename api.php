<?php
$admin_id = "243656719";
$botToken= "773565947:AAE73ByBtaX8Rwf3NTVZXypOtf8FZGZ7DDk";
$website= "https://api.telegram.org/bot$botToken";

//get info from telegram
$update=file_get_contents($website."/getupdates");
//$update=file_get_contents("php://input");
//$url = "https://api.telegram.org/token/method";
  //  $ch = curl_init("https://api.telegram.org/bot".$botToken);
    //curl_setopt($ch,CURLOPT_URL,$website);
    //curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    //curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    //$res = curl_exec($ch);
    //curl_close($ch);
//if ($res == FALSE) {
  //echo "Wrong!!";
//} else {
//  echo "Update is $res";
  //$arrayupdate=json_decode($update,TRUE);
//  $ok = $arrayupdate["ok"];
  //file_get_contents ($website."sendmessage?text=".$ok."&chat_id=".$admin_id);
//}

//send info to telegram
$arrayupdate=json_decode($update,TRUE);
$chat_id = $update ['message']['chat']['id'];
//file_get_contents($website."/sendMessage?chat_id=".$chatid."&text=test0");
//print_r($arrayupdate);
$end1=end($arrayupdate);
//print_r( $end1);
$end2=end($end1);
//print_r($end2);
$end3=end($end2);
//print_r($end3);
$end4=end($end3);
echo $end4."</br>";
//$keys = array_keys($arrayupdate);
//$lastKey = $keys[count($keys)-1];
//echo $lastKey;
$chatid=$arrayupdate["result"][0]["message"]["chat"]["id"];
echo $chatid;
file_get_contents($website."/sendMessage?chat_id=".$chatid."&text=test0");
//echo $end4 ."is id <br>";

$con = mysqli_connect("localhost","cp35128_mahboobeh","xQypi0pUo7&}","cp35128_branch");


//Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  $sql="SELECT * FROM address WHERE  id=".$end4."";
  $result = $con->query($sql);
  $row = $result->fetch_assoc();

  echo $row['name'];
  $name=$row['name'];
file_get_contents($website."/sendMessage?chat_id=".$chatid."&text=".$name);


 ?>
