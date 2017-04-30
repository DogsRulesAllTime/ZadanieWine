<?php
class Index{

	public static function zapros(){
			
$db = Db::getConnection();
		$List = array();
$selectpicker = 5;
 $d = date('Y-m');

		if (isset( $_POST['selectpicker']) and !empty($_POST['selectpicker'])) {

				$selectpicker = $_POST['selectpicker'];
				$d = "2017-$selectpicker";
				echo "Зарплата за $selectpicker месяц";
			}else{
				echo "Зарплата за $d месяц";
			}

		$result = $db->query("SELECT * FROM workers
INNER JOIN payment on  workers.id_user = payment.user 

INNER JOIN professions on workers.prof = professions.id_prof
WHERE payment.month = '$d-01'");

		$i=0;
		while ($row = $result->fetch()) {

			$List[$i]['id_user'] = $row['id_user'];
			$List[$i]['profession'] = $row['profession'];
			$List[$i]['name'] = $row['name'];
			$List[$i]['surname'] = $row['surname'];
			$List[$i]['money'] = $row['money'];
			$List[$i]['photo'] = $row['photo'];
			$i++;
		}
			return $List;
	}

}