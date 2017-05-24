<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	'ESET.' . $_EXTKEY,
	'Eset',
	'ESET widget'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Eset catalog');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_catalog_domain_model_product', 'EXT:catalog/Resources/Private/Language/locallang_csh_tx_catalog_domain_model_product.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_catalog_domain_model_product');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_catalog_domain_model_item', 'EXT:catalog/Resources/Private/Language/locallang_csh_tx_catalog_domain_model_item.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_catalog_domain_model_item');

$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['catalog_eset'] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue('catalog_eset',
    'FILE:EXT:catalog/Configuration/FlexForms/flexform.xml');
