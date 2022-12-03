<?php
defined('TYPO3_MODE') or die();

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

/***************
 *
 */
$card_layout = array(
    'card_layout' => array(
        'exclude' => 1,
        'label' => 'Layout',
        'config' => array(
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [

            ]
        ),
    ),
);

$card_background = array(
    'card_background' => array(
        'exclude' => 1,
        'label' => 'Background Color',
        'config' => array(
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                ['Kein Hintergrund', 'none'],
                ['Primary', 'primary'],
                ['Secondary', 'secondary'],
            ]
        ),
    ),
);

$card_width = array(
    'card_width' => array(
        'exclude' => 1,
        'label' => 'Maße',
        'config' => array(
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                ['Standard', 'standard'],
                ['1x1', '1-1'],
                ['2x2', '2-2'],
                ['1x2', '1-2'],
                ['2x1', '2-1'],
            ]
        ),
    ),
);

ExtensionManagementUtility::addTCAcolumns('tx_bootstrappackage_card_group_item', $card_layout);
ExtensionManagementUtility::addTCAcolumns('tx_bootstrappackage_card_group_item', $card_background);
ExtensionManagementUtility::addTCAcolumns('tx_bootstrappackage_card_group_item', $card_width);
unset($card_layout);
unset($card_background);
unset($card_width);
 
$GLOBALS['TCA']['tx_bootstrappackage_card_group_item']['palettes']['layout']['showitem'] = 'card_layout,card_background,card_width';
$GLOBALS['TCA']['tx_bootstrappackage_card_group_item']['types']['1']['showitem'] .= '--div--;Erscheinungsbild,--palette--;Layout des Inhaltselements;layout'; 