<?php

/**
 * ECSHOP v2.1.2b 升级程序
 * ============================================================================
 * 版权所有 (C) 2005-2007 北京亿商互动科技发展有限公司，并保留所有权利。
 * 网站地址: http://www.ecshop.com
 * ----------------------------------------------------------------------------
 * 这是一个免费开源的软件；这意味着您可以在不用于商业目的的前提下对程序代码
 * 进行修改、使用和再发布。
 * ============================================================================
 * $Author: paulgao $
 * $Date: 2007-02-07 16:03:51 +0800 (星期三, 07 二月 2007) $
 * $Id: v2.1.2b.php 5342 2007-02-07 08:03:51Z paulgao $
 */

class up_v2_1_2b
{
	var $sql_files = array('structure' => 'structure.sql',
                           'data' => 'data.sql');

    var $auto_match = true;

    function __construct(){}
    function up_v2_1_2b(){}

    function update_database_optionally(){}
	function update_files(){}
}

?>