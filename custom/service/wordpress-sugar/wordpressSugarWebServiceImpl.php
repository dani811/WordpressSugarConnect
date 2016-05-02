<?php
/**
* This class is an implemenatation class for all the rest services
*
*
*
*/
if (!defined('sugarEntry')) define('sugarEntry', true);
require_once('service/core/SugarWebServiceImpl.php');

class wordpressSugarWebServiceImpl extends SugarWebServiceImpl{
	
	public function getContactDetails($session){
		global $db;
		$contact_details = array();
		$email_id = $session['email'];
		
		$sql3 = "SELECT 
			c.`first_name`,c.`last_name`,c.`id`,c.`phone_mobile`,c.`phone_work`,c.`department`,c.`phone_fax`,c.`primary_address_street`,
			c.`primary_address_city`,c.`primary_address_state`,c.`primary_address_postalcode`,c.`primary_address_country`,
			eab.`email_address_id`,eab.`bean_id`,ea.`id`,ea.email_address
		FROM 
			contacts c 
		JOIN 
			email_addr_bean_rel eab 
		ON 
			eab.bean_id = c.id
		JOIN 
			email_addresses ea 
		ON 
			eab.email_address_id = ea.id
		WHERE 
			ea.email_address = '".$email_id."' 
		AND 
			eab.bean_module = 'Contacts' 
		AND 
			ea.deleted = 0 
		AND 
			eab.deleted = 0 
		AND 
			c.deleted = 0 ";
		
		$path='upload/';
		$file = 'test.txt'; 
		$filename=$path.$file;
		if(file_exists($filename)){
			unlink($filename);
		}	
		// generate xml file.
		$handle = fopen($filename, 'a');
		fwrite($handle, $sql3);
		
		$query3   = $db->query($sql3);
        $res3     = $db->fetchByAssoc($query3);
		
		
		$contact_details['first_name'] = $res3['first_name'];
		$contact_details['last_name'] = $res3['last_name'];
		$contact_details['phone_mobile'] = $res3['phone_mobile'];
		$contact_details['phone_work'] = $res3['phone_work'];
		$contact_details['department'] = $res3['department'];
		$contact_details['phone_fax'] = $res3['phone_fax'];
		$contact_details['primary_address_street'] = $res3['primary_address_street'];
		$contact_details['primary_address_city'] = $res3['primary_address_city'];
		$contact_details['primary_address_state'] = $res3['primary_address_state'];
		$contact_details['primary_address_postalcode'] = $res3['primary_address_postalcode'];
		$contact_details['primary_address_country'] = $res3['primary_address_country'];
		
		
        return $contact_details;
	}
}