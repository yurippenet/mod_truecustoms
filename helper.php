<?php

defined('_JEXEC') or die;

class modTrueCustomsHelper{
	
	public static function getHTML($params){
		return $params->get("rawhtml");
	}
}


?>