<?php
	$mysql = array(
		'user' => 'root',
		'password' => 'RDWPYXjK',
		'host' => '192.169.148.131:3306',
		'database' => 'oexdb'
	);

	mysql_connect($mysql['host'], $mysql['user'], $mysql['password']) or die("Cannot connect to database.");
	mysql_select_db($mysql['database']);
	
	$rpc = array(
		'login' => 'dashrpc',
		'password' => '2Z9MAhm2sk3A8mBJ8AnSuQpVkgjxE3qgWWsHefbnkpy3',
		'ip' => '192.169.148.131',
		'port' => '9998'
	);
	
	$config = array(
		'name' => 'DashPonzi',																	// Name of your ponzi
		'title' => 'get rich!',																// Description
		'full-name' => 'Dashcoin Ponzi',												// Full name of your ponzi
		'val' => 'DASH',																				// Cryptocurrency abbreviation
		'precision' => 4,
		'confirmations' => 1,																	// Minimum number of confirmations to add transaction
		'min' => 0.001,																				// Minimum pay in
		'max' => 25.00,																				// Maximum pay in
		'income' => 0.8,																			// How much money to send - default: 0.1 - 110%
		'fee' => 5.00,																				// Fee taken from pay in amount
		'payout-check' => 180,																// Time between payouts
		'ownaddress' => 'XgKstZyB6tNVgszrc21YGCF5onc7asgo2T', // Your address
		'sendback' => false,																	// What to do with txs that are over maximum or under minimum | true - send back, false - send to your address
		'ponziacc' => 'oexdb',																	// Name of daemon account
		'address' => 'Xoz5QJ3nTB5PkonzV6xmmcSVEK2oDydRb9',			// Ponzi address
		'privkey' => 'XC5YP2ZwxCXrdZFQ7ok6PYaXMed8tQQfY5X2PQ4oCbNZMxic39Ed',																			// Needed in setup, private key of your address
		'blockchain-addr' => 'https://explorer.dashninja.pl/address/',
		'blockchain-tx' => 'https://explorer.dashninja.pl/tx/'
	);
?>
