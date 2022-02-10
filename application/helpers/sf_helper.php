<?php

function activated_menu($menu)
{
    $ci = get_instance();
    $classname = $ci->router->fetch_class();
    return $classname == $menu ? 'active' : '';
}
