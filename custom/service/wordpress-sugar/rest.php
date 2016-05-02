<?php
if(!defined('sugarEntry'))define('sugarEntry', true);
chdir('../..');
require_once('wordpressSugarWebServiceImpl.php');
$webservice_class = 'SugarRestService';
$webservice_path = 'service/core/SugarRestService.php';
$webservice_impl_class = 'wordpressSugarWebServiceImpl';
$registry_class = 'wordpressSugarRegistry';
$registry_path = 'service/wordpress-sugar/wordpressSugarRegistry.php';
$location = 'service/wordpress-sugar/rest.php';
require_once('service/core/webservice.php'); 