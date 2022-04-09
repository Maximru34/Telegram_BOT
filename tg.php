<?php

/**
 * функция телеграм
 */
//function message_to_telegram($text) {
	// сюда нужно вписать токен вашего бота
	$TELEGRAM_TOKEN = '...';
	// сюда нужно вписать ваш внутренний айдишник
	$TELEGRAM_CHATID = '...';
	
	$ch = curl_init();
	curl_setopt_array(
		$ch,
		array(
			CURLOPT_URL => 'https://api.telegram.org/bot' . $TELEGRAM_TOKEN . '/sendMessage',
			CURLOPT_POST => TRUE,
			CURLOPT_RETURNTRANSFER => TRUE,
			CURLOPT_TIMEOUT => 10,
			CURLOPT_POSTFIELDS => array(
				'chat_id' => $TELEGRAM_CHATID,
				'text' => $text,
				'parse_mode' => 'HTML',
			),
		)
	);
	curl_exec($ch);
	$result = curl_exec($ch); // запрос к api
	curl_close($ch);
	//var_dump(json_decode($result));
//}