<?php

use Infobip\Configuration;
use Infobip\Api\SmsApi;
use Infobip\Model\SmsDestination;
use Infobip\Model\SmsTextualMessage;
use Infobip\Model\SmsAdvancedTextualRequest;

require  __DIR__ ."/vendor/autoload.php";


if(isset($_POST['submit'])){
$number = $_POST['number'];
$msg = $_POST['msg'];

$base_url = "xll8x3.api.infobip.com";
$api_key = "d2383555cb58355ac96f042c020ddabb-7b1a915f-5f17-4c93-9bc4-c130c8459a67";


$configuration = new Configuration(host:$base_url, apiKey:$api_key);
$api = new SmsApi(config:$configuration);

$destination = new SmsDestination(to:$number);
$messages = new SmsTextualMessage(
	destinations:[$destination],
	text:$msg
	);
	$request = new SmsAdvancedTextualRequest(messages:[$messages]);
	
$response = $api->sendSmsMessage($request);


echo "message sent";











}
else{
		echo "By";
}
