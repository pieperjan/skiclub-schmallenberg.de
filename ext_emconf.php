<?php

/**
 * Extension Manager/Repository config file for ext "npt3pme".
 */
$EM_CONF[$_EXTKEY] = array(
    'title' => 'JustWebsite Fundament',
    'description' => '',
    'category' => 'templates',
    'author' => 'Jan Pieper',
    'author_email' => 'hallo@pieperjan.de',
    'author_company' => 'netzpepper',
    'state' => 'stable',
    'internal' => '',
    'uploadfolder' => '0',
    'createDirs' => '',
    'modify_tables' => '',
    'clearCacheOnLoad' => true,
    'version' => '10.0.01',
    array(
        'depends' =>
            array(
                'typo3' => '9.5.0-10.4.99',
            ),
        'conflicts' =>
            array(
            ),
        'suggests' =>
            array(
            ),
    ),
);
