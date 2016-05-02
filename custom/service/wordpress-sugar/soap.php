<?php
if(!defined('sugarEntry'))define('sugarEntry', true);
chdir('../..');
require_once('wordpressSugarWebServiceImpl.php');
$webservice_class = 'SugarSoapService2';
$webservice_path = 'service/v2/SugarSoapService2.php';
$registry_class = 'wordpressSugarRegistry';
$registry_path = 'service/wordpress-sugar/wordpressSugarRegistry.php';
$webservice_impl_class = 'wordpressSugarWebServiceImpl';
$location = 'service/wordpress-sugar/soap.php';
require_once('service/core/webservice.php');