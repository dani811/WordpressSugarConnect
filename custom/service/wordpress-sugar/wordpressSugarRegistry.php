<?php
if(!defined('sugarEntry'))define('sugarEntry', true);

/**
  * @copyright    {MobiNet-Year}
  * @license      {MobiNet-License}
  * @version      {MobiNet-Version}
  * @since        File available since Release {MobiNet-Version}
**/


require_once('service/v2/registry.php'); //Extend off of v2 registry

class wordpressSugarRegistry extends registry {
	/**
	* Calling Parent Constructor
	*
	*/
	public function __construct($serviceClass)
	{
		parent::__construct($serviceClass);
	}
	
	/**
	 * This method registers all the functions on the service class
	 *
	 */
	protected function registerFunction() {
		
		$GLOBALS['log']->info('Begin: registry->registerFunction');
		
		parent::registerFunction();
		$this->serviceClass->registerFunction(
			'wordpressSugarWebServiceImpl', 
			array('session'=>'xsd:string'), 
			array('return'=>'xsd:string')
		);	
		
	    $GLOBALS['log']->info('END: registry->registerFunction');
	        
		// END OF REGISTER FUNCTIONS
	}
}