<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2015 Leo Feyer
 *
 * @package   FPInputDependentContent
 * @author    Felix Pfeiffer <info@felixpfeiffer.com>
 * @license   LGPL
 * @copyright 2015 Felix Pfeiffer : Neue Medien
 */


/**
 * Table tl_content palettes
 */
$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][] = 'fp_input_dependent_content';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['fp_input_dependent_content'] = 'fp_input_dependent_content_config';

foreach($GLOBALS['TL_DCA']['tl_content']['palettes'] as $k=> $v)
{
	if($k == '__selector__') continue;

	$GLOBALS['TL_DCA']['tl_content']['palettes'][$k] = str_replace(';{expert_legend:hide}',';{fp_idc_legend},fp_input_dependent_content;{expert_legend:hide}',$v);
}

/**
 * Table tl_content fields
 */
$GLOBALS['TL_DCA']['tl_content']['fields']['fp_input_dependent_content'] = array(
	'label'                   => &$GLOBALS['TL_LANG']['MSC']['fp_input_dependent_content'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('submitOnChange'=>true),
	'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['fp_input_dependent_content_config'] = array(
	'label'                   => &$GLOBALS['TL_LANG']['MSC']['fp_input_dependent_content_config'],
	'exclude'                 => true,
	'inputType'               => 'multiColumnWizard',
	'eval'                    => array(

		'columnFields' => array
		(
			'type' => array
			(
				'label'                 => &$GLOBALS['TL_LANG']['MSC']['fp_input_dependent_content_type']['requests']['type'],
				'exclude'               => true,
				'inputType'             => 'select',
				'options'				=> array('post','get'),
				'eval' 			        => array('nospace'=>true, 'style' => 'width:100px')
			),
			'value' => array
			(
				'label'                 => &$GLOBALS['TL_LANG']['MSC']['fp_input_dependent_content_type']['requests']['value'],
				'exclude'               => true,
				'inputType'             => 'text',
				'eval' 			        => array('nospace'=>true, 'style' => 'width:100px')
			),
			'action' => array
			(
				'label'                 => &$GLOBALS['TL_LANG']['MSC']['fp_input_dependent_content_type']['requests']['action'],
				'exclude'               => true,
				'inputType'             => 'select',
				'options'				=> array('show','hide'),
				'eval' 			        => array('nospace'=>true, 'style' => 'width:100px')
			)
		)

	),
	'sql'   => 'text NULL'
);

