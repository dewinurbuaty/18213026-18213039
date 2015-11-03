<?php
	class API {
				function helloworld() {
					return "Hello world!<br>";
					}
				function enter(){
					return "<br>";
				}
				function addition ($a,$b) {
					return $a+$b;
					}
					
				function getData(){
					mysql_connect('localhost','root','');
					mysql_select_db('pet_paradise');
					$result = mysql_query('SELECT * FROM customer');
						while ($row = mysql_fetch_array($result, MYSQL_ASSOC)){
							foreach($row as $coloumn){
								echo $var = $coloumn;
								return $var;
							}
							return $var;
						}
					return $var;
					
					}
			}
			
		$opt = array('uri' => 'http://localhost/');
		$server = new SoapServer(NULL, $opt);
		$server -> setclass('API');
		$server -> handle();
?>
				
