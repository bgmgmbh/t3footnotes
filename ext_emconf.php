<?php

/***************************************************************
 * Extension Manager/Repository config file for ext: "t3footnotes"
 *
 * Auto generated by Extension Builder 2018-01-30
 *
 * Manual updates:
 * Only the data in the array - anything else is removed by next write.
 * "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
	'title' => 'RTE footnotes and references',
	'description' => 'TYPO3 extension to add footnote functionality to TYPO3\'s integrated RTE CKEditor',
	'category' => 'misc',
	'author' => 'Jochen Rieger',
	'author_email' => 'j.rieger@connecta.ag',
	'state' => 'beta',
	'internal' => '',
	'uploadfolder' => '0',
	'createDirs' => '',
	'clearCacheOnLoad' => 0,
	'version' => '1.2.0',
	'constraints' => array(
		'depends' => array(
            'typo3' => '8.7.0-9.5.99',
            'rte_ckeditor' => '8.7.0-9.5.99'
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
);
