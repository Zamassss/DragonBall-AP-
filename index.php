
<?php

$api = "bot<585920219:AAFBiNHtyB-J-JGibUxD_8es7ZtO2tgsXyk>"; //al posto di <TOKEN> inserite il token del bot

$input = file_get_contents("php://input");
$update = json_decode($input, true);

$message = $update['message']['text'];
$chatid = $update['message']['chat']['id'];

function sendMessage($chatid, $text)
{
	global $api;	$url = "https://api.telegram.org/$api/sendMessage?chat_id=".$chatid."&text=".urlencode($text);
	$get = file_get_contents($url);
}

if($message == "/start")
{
	sendMessage($chatid, "Strunz");
}

?>
