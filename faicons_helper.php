<?php
/**
 * Author: brendan@ignitedcoder.com
 * Date: 8/24/15
 * Hope this helps you, please at least leave my name in place
 */
defined('BASEPATH') OR exit('No direct script access allowed');

if ( ! function_exists('fa_icon'))
{

    /**
     * Icon
     *
     * Generates an Font-Awesome icon tag.
     *
     * @param	string icon
     * @param	string attributes
     * @return	string
     */
    function fa_icon($icon = '', $attributes = '')
    {

        

        return '<i class="fa fa-'.$icon.' '.$attributes.'">'.'</i>';

    }
}
