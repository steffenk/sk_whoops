<?php
if (!defined('TYPO3_MODE')) die ('Access denied.');
$whoopsInitialized = false;

if (\TYPO3\CMS\Core\Utility\GeneralUtility::getApplicationContext()->isDevelopment()) {
    $whoops = new \Whoops\Run;
    $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
    $whoops->register();
    $whoopsInitialized = true;
}


if (TYPO3_MODE === 'BE') {
    if (!$whoopsInitialized) {
        $whoops = new \Whoops\Run;
        $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
        $whoops->register();
        $whoopsInitialized = true;
    }
}
