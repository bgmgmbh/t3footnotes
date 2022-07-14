<?php
defined('TYPO3') or die();

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'T3footnotes',
            'List',
            'Footnotes'
        );

        /**
         * Add contants and typoscript
         */
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('t3footnotes', 'Configuration/TypoScript', 'T3footnotes Plugin');


    }
);

