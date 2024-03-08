<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') || die();

(static function () {
    // Icon Registry
    $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(
        \TYPO3\CMS\Core\Imaging\IconRegistry::class
    );

    $iconRegistry->registerIcon(
        'tx-clear-processed-file-logo',
        \TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider::class,
        ['source' => 'EXT:wit_cleartempfiles/Resources/Public/Icons/Extension.svg']
    );

    ExtensionManagementUtility::addUserTSConfig(
        '@import "EXT:wit_cleartempfiles/Configuration/TsConfig/user.tsconfig"'
    );

})();
