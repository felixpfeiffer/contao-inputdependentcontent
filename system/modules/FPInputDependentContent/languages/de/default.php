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
 * Miscellaneous
 */
$GLOBALS['TL_LANG']['MSC']['fp_input_dependent_content'] = array('Anzeige INPUT-Abhängig','Stellt das Element/Modul in Abhängigkeit von INPUT-Parametern dar.');
$GLOBALS['TL_LANG']['MSC']['fp_input_dependent_content_config'] = array('Konfiguration','Definieren Sie, von welchen Parametern die Anzeige abhängig sein soll.');


$GLOBALS['TL_LANG']['tl_module']['fp_idc_legend'] = 'Input-abhängige Anzeige';
$GLOBALS['TL_LANG']['tl_content']['fp_idc_legend'] = 'Input-abhängige Anzeige';

$GLOBALS['TL_LANG']['MSC']['fp_input_dependent_content_type']['requests'] = array(
    'type'  => array('INPUT-Typ','Der Input-Typ auf den gehört werden soll.'),
    'value'  => array('Variablen-Name','Der Name der Input-Variablen.'),
    'action'  => array('Ein-/Ausblenden','Soll das Element ein- oder ausgeblendet werden, wenn es eine Input-Variable gibt?'),
);
