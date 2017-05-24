<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'ESET.' . $_EXTKEY,
	'Eset',
	array(
		'Product' => 'list, ajax',
		
	),
	// non-cacheable actions
	array(
		'Product' => 'ajax',
		
	)
);

$GLOBALS['TYPO3_CONF_VARS']['FE']['eID_include']['esetcatalog'] = \ESET\Catalog\Controller\ProductController::class . '::ajaxAction';