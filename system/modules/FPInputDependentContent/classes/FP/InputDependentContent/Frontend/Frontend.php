<?php
/**
 * Created by PhpStorm.
 * User: felixpfeiffer
 * Date: 22.08.15
 * Time: 11:29
 */

namespace FP\InputDependentContent\Frontend;


use Haste\Input\Input;

class Frontend extends \Frontend
{
    public function checkElement($objElement, $strBuffer, $objModule=null)
    {
        if(TL_MODE == 'BE') return $strBuffer;

        #if($objModule !== null) $objElement = $objModule;

        if($objElement->fp_input_dependent_content) {
            $arrConfig = unserialize($objElement->fp_input_dependent_content_config);

            foreach ($arrConfig as $config) {

                $type = $config['type'];
                $value = $config['value'];
                $action = $config['action'];
                if ($type == 'get') {

                    if (Input::getAutoItem($value, false, true) != '') {
                        if ($action == 'hide') return '';
                    }
                    else
                    {
                        if ($action == 'show') return '';
                    }
                } else {
                    if (\Input::post($value)) {
                        if ($action == 'hide') return '';
                    }
                    else
                    {
                        if ($action == 'show') return '';
                    }
                }

            }
        }

        return $strBuffer;
    }
}