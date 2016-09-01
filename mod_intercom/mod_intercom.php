<?php

defined('_JEXEC') or die;

$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));
$trackLoggedInUsers = $params->get('logged_in', true);
$appId = $params->get('app_id', '');
$user = JFactory::getUser();
$registrationDate = new JDate($user->registerDate);

require JModuleHelper::getLayoutPath('mod_intercom', $params->get('layout', 'default'));
