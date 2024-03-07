<?php
/*
 *
 *  This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 *  the terms of the GNU General Public License, either version 2
 *  of the License, or any later version.
 *
 *  For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 *
 */

namespace Woit\WitCleartempfiles\EventsListener;

use TYPO3\CMS\Backend\Backend\Event\ModifyClearCacheActionsEvent;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Backend\Routing\UriBuilder;

class ModifyClearCacheActionsEventListener
{
    public function __invoke(ModifyClearCacheActionsEvent $modifyClearCacheActionsEvent): void
    {
        // process for admin users only
        if (!$GLOBALS['BE_USER']->isAdmin()) {
            return;
        }

        // add cache action
        $uriBuilder = GeneralUtility::makeInstance(UriBuilder::class);
        $uriBuilder->buildUriFromRoute('ajax_witcleartemfiles_clear_processed_files');
        $modifyClearCacheActionsEvent->addCacheAction([
            'id' => 'clear-processed-files',
            'title' => 'LLL:EXT:wit_cleartempfiles/Resources/Private/Language/locallang.xlf:backend_clear_cache_title',
            'description' => 'LLL:EXT:wit_cleartempfiles/Resources/Private/Language/locallang.xlf:backend_clear_cache_description',
            'href' => $uriBuilder->buildUriFromRoute('ajax_witcleartemfiles_clear_processed_files'),
            'iconIdentifier' => 'tx-clear-processed-file-logo',
        ]);

    }
}
