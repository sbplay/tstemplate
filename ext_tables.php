<?php
defined('TYPO3_MODE') or die();

if (TYPO3_MODE === 'BE') {
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule(
		'web',
		'ts',
		'',
		'EXT:tstemplate/Modules/TsTemplate/',
		array(
			'script' => '_DISPATCH',
			'access' => 'admin',
			'name' => 'web_ts',
			'labels' => array(
				'tabs_images' => array(
					'tab' => 'EXT:tstemplate/Resources/Public/Icons/module-tstemplate.svg',
				),
				'll_ref' => 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_mod.xlf',
			),
		)
	);

	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::insertModuleFunction(
		'web_ts',
		\TYPO3\CMS\Tstemplate\Controller\TypoScriptTemplateConstantEditorModuleFunctionController::class,
		NULL,
		'LLL:EXT:tstemplate/Resources/Private/Language/locallang.xlf:constantEditor'
	);

	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::insertModuleFunction(
		'web_ts',
		\TYPO3\CMS\Tstemplate\Controller\TypoScriptTemplateInformationModuleFunctionController::class,
		NULL,
		'LLL:EXT:tstemplate/Resources/Private/Language/locallang.xlf:infoModify'
	);

	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::insertModuleFunction(
		'web_ts',
		\TYPO3\CMS\Tstemplate\Controller\TypoScriptTemplateObjectBrowserModuleFunctionController::class,
		NULL,
		'LLL:EXT:tstemplate/Resources/Private/Language/locallang.xlf:objectBrowser'
	);

	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::insertModuleFunction(
		'web_ts',
		\TYPO3\CMS\Tstemplate\Controller\TemplateAnalyzerModuleFunctionController::class,
		NULL,
		'LLL:EXT:tstemplate/Resources/Private/Language/locallang.xlf:templateAnalyzer'
	);

}
