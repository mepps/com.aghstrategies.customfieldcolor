<?php

require_once 'customfieldcolor.civix.php';

/**
 * Implementation of hook_civicrm_alterBadge
 */
function customfieldcolor_civicrm_alterBadge(&$label, &$format, &$participant) {
  $params = array('version' => 3, 'id' => $participant['contact_id'], 'return' => 'custom_1');
  $result = civicrm_api('Contact', 'getsingle', ($params));
  print_r($result);
  $x = $label->pdf->GetAbsX();
  $y = $label->pdf->getY();

  $label->pdf->SetFontSize(10);
  $label->pdf->SetFillColor(250,0, 0.5);
  $label->pdf->SetTextColor(0,0,0);
  $label->pdf->MultiCell($label->pdf->width, 0, "", $label->border, "C", 1, 1, $x + 10 , $y + 75);



}


/**
 * Implementation of hook_civicrm_config
 */
function customfieldcolor_civicrm_config(&$config) {
  _customfieldcolor_civix_civicrm_config($config);
}

/**
 * Implementation of hook_civicrm_xmlMenu
 *
 * @param $files array(string)
 */
function customfieldcolor_civicrm_xmlMenu(&$files) {
  _customfieldcolor_civix_civicrm_xmlMenu($files);
}

/**
 * Implementation of hook_civicrm_install
 */
function customfieldcolor_civicrm_install() {
  return _customfieldcolor_civix_civicrm_install();
}

/**
 * Implementation of hook_civicrm_uninstall
 */
function customfieldcolor_civicrm_uninstall() {
  return _customfieldcolor_civix_civicrm_uninstall();
}

/**
 * Implementation of hook_civicrm_enable
 */
function customfieldcolor_civicrm_enable() {
  return _customfieldcolor_civix_civicrm_enable();
}

/**
 * Implementation of hook_civicrm_disable
 */
function customfieldcolor_civicrm_disable() {
  return _customfieldcolor_civix_civicrm_disable();
}

/**
 * Implementation of hook_civicrm_upgrade
 *
 * @param $op string, the type of operation being performed; 'check' or 'enqueue'
 * @param $queue CRM_Queue_Queue, (for 'enqueue') the modifiable list of pending up upgrade tasks
 *
 * @return mixed  based on op. for 'check', returns array(boolean) (TRUE if upgrades are pending)
 *                for 'enqueue', returns void
 */
function customfieldcolor_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _customfieldcolor_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implementation of hook_civicrm_managed
 *
 * Generate a list of entities to create/deactivate/delete when this module
 * is installed, disabled, uninstalled.
 */
function customfieldcolor_civicrm_managed(&$entities) {
  return _customfieldcolor_civix_civicrm_managed($entities);
}
