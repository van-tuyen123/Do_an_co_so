<?php
function block_nav_right()
{
    $xtpl = new XTemplate('global.nav_right.tpl', NV_ROOTDIR . '/themes/phenikaatest/blocks');

    $xtpl->parse('main');
    return $xtpl->text('main');
}
$content = block_nav_right();
