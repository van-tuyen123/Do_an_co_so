<?php
function block_nav_main_top()
{
    $xtpl = new XTemplate('global.nav_main_top.tpl', NV_ROOTDIR . '/themes/phenikaatest/blocks');

    $xtpl->parse('main');
    return $xtpl->text('main');
}
$content = block_nav_main_top();
