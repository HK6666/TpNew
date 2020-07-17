<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
use \think\Env;
return [
    "app_status"            => Env::get('app_status','dev'),
    'auto_bind_module'      => true,
    'url_route_on'          => true,
    'url_route_must'        => false,
    'url_convert'           => false,
    'url_common_param'      => true,
    'view_replace_str'      => [
        '__PUBLIC__'=>'/static',
        '__ADMIN__' =>'/static/admin'
    ],
    'session'                => [
        'prefix'         => 'think',
        'type'           => '',
        'auto_start'     => true,
    ],
];