<?php

/**
 * ECSHOP 商品页
 * ============================================================================
 * 版权所有 (C) 2005-2007 康盛创想（北京）科技有限公司，并保留所有权利。
 * 网站地址: http://www.ecshop.com
 * ----------------------------------------------------------------------------
 * 这是一个免费开源的软件；这意味着您可以在不用于商业目的的前提下对程序代码
 * 进行修改、使用和再发布。
 * ============================================================================
 * $Author: bugii $
 * $Date: 2007-09-25 09:33:50 +0800 (星期二, 25 九月 2007) $
 * $Id: buy.php 12449 2007-09-25 01:33:50Z bugii $
*/

define('IN_ECS', true);

require('./includes/init.php');
$smarty->assign('footer', get_footer());
$smarty->display('buy.wml');

?>