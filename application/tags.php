<?php
// +----------------------------------------------------------------------
// | ShopXO 国内领先企业级B2C免费开源电商系统
// +----------------------------------------------------------------------
// | Copyright (c) 2011~2019 http://shopxo.net All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: Devil
// +----------------------------------------------------------------------

// 应用行为扩展定义文件
return array (
  'app_init' => 
  array (
  ),
  'app_begin' => 
  array (
  ),
  'module_init' => 
  array (
  ),
  'action_begin' => 
  array (
  ),
  'view_filter' => 
  array (
  ),
  'app_end' => 
  array (
  ),
  'log_write' => 
  array (
  ),
  'plugins_css' => 
  array (
    0 => 'app\\plugins\\distribution\\Hook',
    1 => 'app\\plugins\\freightfee\\Hook',
    2 => 'app\\plugins\\limitedtimediscount\\Hook',
  ),
  'plugins_service_users_center_left_menu_handle' => 
  array (
    0 => 'app\\plugins\\distribution\\Hook',
  ),
  'plugins_service_header_navigation_top_right_handle' => 
  array (
    0 => 'app\\plugins\\distribution\\Hook',
  ),
  'plugins_service_order_status_change_history_success_handle' => 
  array (
    0 => 'app\\plugins\\distribution\\Hook',
  ),
  'plugins_service_order_aftersale_audit_handle_end' => 
  array (
    0 => 'app\\plugins\\distribution\\Hook',
  ),
  'plugins_service_site_extraction_address_list' => 
  array (
    0 => 'app\\plugins\\distribution\\Hook',
  ),
  'plugins_service_buy_order_insert_end' => 
  array (
    0 => 'app\\plugins\\distribution\\Hook',
  ),
  'plugins_service_goods_spec_extends_handle' => 
  array (
    0 => 'app\\plugins\\distribution\\Hook',
  ),
  'plugins_view_admin_user_save' => 
  array (
    0 => 'app\\plugins\\distribution\\Hook',
  ),
  'plugins_service_user_save_handle' => 
  array (
    0 => 'app\\plugins\\distribution\\Hook',
  ),
  'plugins_view_goods_detail_base_buy_nav_min_inside' => 
  array (
    0 => 'app\\plugins\\distribution\\Hook',
  ),
  'plugins_view_goods_detail_photo_within' => 
  array (
    0 => 'app\\plugins\\distribution\\Hook',
  ),
  'plugins_view_goods_detail_base_bottom' => 
  array (
    0 => 'app\\plugins\\distribution\\Hook',
  ),
  'plugins_service_buy_handle' => 
  array (
    0 => 'app\\plugins\\freightfee\\Hook',
  ),
  'plugins_view_goods_detail_title' => 
  array (
    0 => 'app\\plugins\\freightfee\\Hook',
  ),
  'plugins_js' => 
  array (
    0 => 'app\\plugins\\limitedtimediscount\\Hook',
  ),
  'plugins_service_navigation_header_handle' => 
  array (
    0 => 'app\\plugins\\limitedtimediscount\\Hook',
  ),
  'plugins_service_goods_handle_end' => 
  array (
    0 => 'app\\plugins\\limitedtimediscount\\Hook',
  ),
  'plugins_service_goods_spec_base' => 
  array (
    0 => 'app\\plugins\\limitedtimediscount\\Hook',
  ),
  'plugins_view_goods_detail_base_top' => 
  array (
    0 => 'app\\plugins\\limitedtimediscount\\Hook',
  ),
  'plugins_view_home_floor_top' => 
  array (
    0 => 'app\\plugins\\limitedtimediscount\\Hook',
  ),
);
?>