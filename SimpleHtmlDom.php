<?php

/**
 * @copyright Copyright &copy; Gogodigital Srls
 * @company Gogodigital Srls - Wide ICT Solutions
 * @website http://www.gogodigital.it
 * @github https://github.com/cinghie/yii2-media
 * @license BSD-3-Clause
 * @package yii2-simplehtmldom
 * @version 1.0.0
 */

namespace cinghie\simplehtmldom;

require_once(dirname(__FILE__) . '/simple_html_dom.php');

/**
 * Class SimpleHtmlDom
 *
 * @see http://simplehtmldom.sourceforge.net/
 */
class SimpleHtmlDom
{
    /**
     * Get HTML from file
     *
     * @return mixed
     */
    public static function file_get_html()
    {
        return call_user_func_array('file_get_html', func_get_args());
    }

    /**
     * Get HTML from string
     *
     * @return mixed
     */
    public static function str_get_html()
    {
        return call_user_func_array('str_get_html', func_get_args());
    }

    /**
     * Dump HTML Tree
     *
     * @return mixed
     */
    public static function dump_html_tree()
    {
        return call_user_func_array('dump_html_tree', func_get_args());
    }
}
