<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

$GLOBALS['TYPO3_CONF_VARS']['FE']['addRootLineFields'] .= ',subtitle,author,keywords,description';