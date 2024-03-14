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

namespace Woit\WitCleartempfiles\Controller;

use TYPO3\CMS\Core\Http\HtmlResponse;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Resource\ProcessedFileRepository;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class AjaxController
{
    /**
     * Remove all processed files
     *
     * @return ResponseInterface
     */
    public function removeAll(): ResponseInterface
    {
        # log command
        if (is_object($GLOBALS['BE_USER'])) {
            $GLOBALS['BE_USER']->writelog(
                3,
                1,
                0,
                0,
                'User %s has cleared the processed files ',
                array($GLOBALS['BE_USER']->user['username'])
            );
        }

        $repository = GeneralUtility::makeInstance(ProcessedFileRepository::class);
        $repository->removeAll();

        return new HtmlResponse('');
    }

}
