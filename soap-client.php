<?php
		$opt = array('location' => 'http://localhost/soap-server.php', 'uri' => 'http://localhost/');
		$api = new SoapClient (NULL, $opt);
		echo $api -> helloworld();
		echo $api -> addition(21,95);
		echo $api -> enter();
		echo $api -> getData();
?>
