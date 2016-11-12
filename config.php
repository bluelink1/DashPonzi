<?php
	$mysql = array(
		'user' => 'serwer15769_btc',
		'password' => 'RDWPYXjK',
		'host' => 'sql21.lh.pl',
		'database' => 'serwer15769_btc'
	);

	mysql_connect($mysql['host'], $mysql['user'], $mysql['password']) or die("Cannot connect to database.");
	mysql_select_db($mysql['database']);
	
	$rpc = array(
		'login' => 'bitcoinrpc',
		'password' => 'AnZkacanS66jswqEmsASDisvEJQiEeWs3AEMw9qSBb5s',
		'ip' => '127.0.0.1',
		'port' => '8332'
	);
	
	$config = array(
		'name' => 'BitAltcoin',																	// Name of your ponzi
		'title' => 'get rich!',																// Description
		'full-name' => 'Bitcoin Investment Platform',												// Full name of your ponzi
		'val' => 'BTC',																				// Cryptocurrency abbreviation
		'precision' => 4,
		'confirmations' => 1,																	// Minimum number of confirmations to add transaction
		'min' => 0.001,																				// Minimum pay in
		'max' => 0.55,																				// Maximum pay in
		'income' => 0.5,																			// How much money to send - default: 0.1 - 110%
		'fee' => 0.45,																				// Fee taken from pay in amount
		'payout-check' => 180,																// Time between payouts
		'ownaddress' => '13P99A9qVbZBtsJSwsy81Fa7dpVKNzKvwY', // Your address
		'sendback' => true,																	// What to do with txs that are over maximum or under minimum | true - send back, false - send to your address
		'ponziacc' => 'btc',																	// Name of daemon account
		'address' => '1Hashfm3KyCH8AQXLkQQ3JKh6PcGro2sze',			// Ponzi address
		'privkey' => '5HxWV2saEW1xYG1LwFwMoYT9MBV2RKMqFHYLEXLh7dQuyaJrFYP',																			// Needed in setup, private key of your address
		'blockchain-addr' => 'https://blockchain.info/en/address/',
		'blockchain-tx' => 'https://blockchain.info/en/tx/'
	);
?>
