<?php
/**
  * @copyright    {MobiNet-Year}
  * @license      {MobiNet-License}
  * @version      {MobiNet-Version}
  * @since        File available since Release {MobiNet-Version}
**/

require_once("modules/ModuleBuilder/Module/StudioModuleFactory.php");
require_once("modules/Administration/QuickRepairAndRebuild.php");

// check if mobinetpro directory exists, delete it
if(is_dir('service/wordpress-sugar')){
	rmdir('service/wordpress-sugar');	
}
$oRepair = new RepairAndClear();
$oRepair->module_list = array("Administration");
$oRepair->clearSmarty();
$oRepair->clearTpls();
LanguageManager::clearLanguageCache("Administration");       

?>

