<?php
defined('_JEXEC') or die;

require_once dirname(__FILE__) . "/helper.php";

$rawhtml = $params->get("rawhtml");//modTrueCustomsHelper::getHTML($params);
require JModuleHelper::getLayoutPath('mod_truecustoms');
