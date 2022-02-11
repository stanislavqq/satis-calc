<?php

	$resources = [
		0 => [
			"name" => 'железный слиток',
			"out" => '30',
			"in" => '30',
			"where" => 'Плавильня'
		],
		1 => [
			"name" => 'Медный слиток',
			"out" => '30',
			"in" => '45',
			"where" => 'Плавильня'
		],
		2 => [
			"name" => 'Стальной слиток',
			"out" => '15',
			"in" => '43',
			"where" => 'Литейня'
		],
		3 => [
			"name" => 'Катерийный слиток',
			"out" => '5',
			"in" => '20',
			"where" => 'Плавильня'
		],
		4 => [
			"name" => 'Катерийный слиток',
			"out" => '5',
			"in" => '20',
			"where" => 'Плавильня'
		],
	];
	
	if ($_POST['submit']){
		$a = $_POST["multiplir"];
		$b = $_POST["thing"];
		
///////////////// Не могу выцепить in
	}
											    function calculate($index, $need, $resources )
												 {
													 $need = $_POST['multiplir'];
													 $selected = $resources[$index];

													 return $selected["in"] * $need;
													 echo calculate();
													 }
	
		
		echo $_POST['multiplir']. '<br>';
		echo $_POST['thing']. '<br>';
		
/////////////////echo $value["name"]. '<br>'; // вот это почему не выводит слиток?
	
	
	

	echo var_dump($_POST);


	

	
?>