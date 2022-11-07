<?php
function block_nav_left()
{
    $xtpl = new XTemplate('global.nav_left.tpl', NV_ROOTDIR . '/themes/phenikaatest/blocks');

    $xtpl->parse('main');
    return $xtpl->text('main');
}
$content = block_nav_left();
