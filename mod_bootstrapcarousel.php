<?php
/**
 * 
 * 
 * 
 * 
 */

 
defined('_JEXEC') or die;

require_once(dirname(__FILE__) . '/helper.php');

$captionOne = $params->get('captionOne');
$captionTwo = $params->get('captionTwo');
$captionThree = $params->get('captionThree');
require(JModuleHelper::getLayoutPath('mod_bootstrapcarousel', $params->get('layout', 'default')));

?>