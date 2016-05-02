<?php
/**
 * manifest file for Wordpress - SugarCRM
 *
 *
 * @author  
 * @copyright  .......
 * @license    .......
 * @version    .......
 * @link       .......
 * @see        .......
 * @since      .......
 * @deprecated .......
 */

$manifest = array(
    'acceptable_sugar_flavors' => array(
        'PRO', 'ENT','ULT','CE','CORP'
    ),
    'acceptable_sugar_versions' => array ( "exact_matches" => array (),
                                          "regex_matches" => array ( 0=>"6\\.*\\.*"),
                                        ),
    
    'author' => 'Subhankar',
    'description' => 'SugarConnect Custom Web Service for Wordpress',
    'icon' => '',
    'is_uninstallable' => true,
    'name' => 'Sugar Connect',
    'published_date' => '2012-08-21 12:00:00',
    'type' => 'module',
    'version' => '1.0',
    'remove_tables' => 'prompt',
    'readme' => '',
);

$installdefs = array(
    'id' => 'sugarconnect',
	'post_uninstall' => array(
            0    => '<basepath>/scripts/post_uninstall.php',
    ),    
        'copy' =>
        array(        
                array(
                    'from' => '<basepath>/custom/service',
                    'to' => 'service',
                ),
               
             ),
        );
