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

$GLOBALS['TL_HOOKS']['getContentElement']['FPInputDependentContent'] = array('FelixPfeiffer\InputDependentContent\Frontend\Frontend','checkElement');
$GLOBALS['TL_HOOKS']['getFrontendModule']['FPInputDependentContent'] = array('FelixPfeiffer\InputDependentContent\Frontend\Frontend','checkElement');