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
$api_key = "c37e66dd6579df3e2a58e11611e27ec9-2d4361ac-c1a4-474b-ba4a-758e52f80815";


$configuration = new Configuration(host:$base_url, apiKey:$api_key);
$api = new SmsApi(config:$configuration);

$destination = new SmsDestination(to:$number);
$messages = new SmsTextualMessage(
	destinations:[$destination],
	text:$msg,
	from:"YahyeAsad"
	);
	$request = new SmsAdvancedTextualRequest(messages:[$messages]);
	
$response = $api->sendSmsMessage($request);


echo "message sent";











}
else{
		echo "By";
}
