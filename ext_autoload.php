<?php
/**
 * Created by PhpStorm.
 * User: Christian Wolfram
 * Date: 04.08.14
 * Time: 10:23
 */

$extensionLibary = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('wt_directory') . '/lib/';
$extensionBackend = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('wt_directory') . '/be/';
$extensionPi1 = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('wt_directory') . '/pi1/';
$extensionPi2 = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('wt_directory') . '/pi2/';

$extLoader = array(
	'tx_wtdirectory_dynamicmarkers' => $extensionLibary . 'class.wtdirectory_dynamicmarkers.php',
	'wtdirectory_div' => $extensionLibary . 'class.wtdirectory_div.php',
	'wtdirectory_markers' => $extensionLibary . 'class.wtdirectory_markers.php',
	'tx_wtdirectory_filter_abc' => $extensionLibary . 'class.wtdirectory_filter_abc.php',
	'tx_wtdirectory_filter_search' => $extensionLibary . 'class.wtdirectory_filter_search.php',
	'tx_wtdirectory_filter_cat' => $extensionLibary . 'class.wtdirectory_filter_cat.php',
	'tx_wtdirectory_filter_radialsearch' => $extensionLibary . 'class.wtdirectory_filter_radialsearch.php',
	'tx_wtdirectory_pagebrowser' => $extensionLibary . 'class.wtdirectory_pagebrowser.php',
	'user_wtdirectory_pagebrowser' => $extensionLibary . 'class.user_wtdirectory_pagebrowser.php',
	'tx_wtdirectory_autocomplete' => $extensionLibary . 'class.tx_wtdirectory_eid_autocomplete.php',
	'tx_wtdirectory_powermailreceiver' => $extensionLibary . 'class.tx_wtdirectory_hook_powermailreceiver.php',

	'user_be_abcfields' => $extensionBackend . 'class.user_be_abcfields.php',
	'user_be_address' => $extensionBackend . 'class.user_be_address.php',
	'user_be_fields' => $extensionBackend . 'class.user_be_fields.php',
	'user_be_googlemapmsg' => $extensionBackend . 'class.user_be_googlemapsmsg.php',
	'user_be_powermail' => $extensionBackend . 'class.user_be_powermailmsg.php',

	'tx_wtdirectory_pi1' => $extensionPi1 . 'class.tx_wtdirectory_pi1.php',
	'tx_wtdirectory_pi1_list' => $extensionPi1 . 'class.tx_wtdirectory_pi1_list.php',
	'tx_wtdirectory_pi1_detail' => $extensionPi1 . 'class.tx_wtdirectory_pi1_detail.php',
	'tx_wtdirectory_pi1_vcard' => $extensionPi1 . 'class.tx_wtdirectory_pi1_vcard.php',
	'tx_wtdirectory_pi1_wizicon' => $extensionPi1 . 'class.tx_wtdirectory_pi1_wizicon.php',

	'tx_wtdirectory_pi2' => $extensionPi2 . 'class.tx_wtdirectory_pi2.php',
);

if (\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded('wt_doorman', 0)) {
	$extensionWtDoorman = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('wt_doorman');

	$extLoader['tx_wtdoorman_security'] = $extensionWtDoorman . 'class.tx_wtdoorman_security.php'; // load security class
}

return $extLoader;