<?php

class Imones {

	public static function getlast5($kliento_registravimo_data){

		$db = new Imones();
		$im = $db->select_array("SELECT * FROM imones ORDER BY kliento_registravimo_data DESC LIMIT 5");
		return $im;
	}
}

