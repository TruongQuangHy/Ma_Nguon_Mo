<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'IndexController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//home

$route['danh-muc/(:any)/(:any)']['GET'] = 'IndexController/category/$1/$2';
$route['thuong-hieu/(:any)/(:any)']['GET'] = 'IndexController/brand/$1/$2';
$route['san-pham/(:any)/(:any)']['GET'] = 'IndexController/product/$1/$2';

// Login

$route['login']['GET'] = 'LoginController/index';
$route['login-user']['POST'] = 'LoginController/login';
$route['dang-nhap']['GET'] = 'IndexController/login';
$route['login-customer']['POST'] = 'IndexController/login_customer';
$route['dang-xuat']['GET'] = 'IndexController/dang_xuat';
$route['dang-ky']['POST'] = 'IndexController/dang_ky';

//Dashboard
$route['dashboard']['GET'] = 'DashboardController/index';
$route['logout']['GET'] = 'DashboardController/logout';

//Brand

$route['brand/create']['GET'] = 'BrandController/create';
$route['brand/list']['GET'] = 'BrandController/index';
$route['brand/store']['POST'] = 'BrandController/store';
$route['brand/edit/(:any)']['GET'] = 'BrandController/edit/$1';
$route['brand/update/(:any)']['POST'] = 'BrandController/update/$1';
$route['brand/delete/(:any)']['GET'] = 'BrandController/delete/$1';
//Category

$route['category/create']['GET'] = 'CategoryController/create';
$route['category/list']['GET'] = 'CategoryController/index';
$route['category/store']['POST'] = 'CategoryController/store';
$route['category/edit/(:any)']['GET'] = 'CategoryController/edit/$1';
$route['category/update/(:any)']['POST'] = 'CategoryController/update/$1';
$route['category/delete/(:any)']['GET'] = 'CategoryController/delete/$1';
//Product

$route['product/create']['GET'] = 'ProductController/create';
$route['product/list']['GET'] = 'ProductController/index';
$route['product/store']['POST'] = 'ProductController/store';
$route['product/edit/(:any)']['GET'] = 'ProductController/edit/$1';
$route['product/update/(:any)']['POST'] = 'ProductController/update/$1';
$route['product/delete/(:any)']['GET'] = 'ProductController/delete/$1';


//Cart

$route['gio-hang']['GET'] = 'IndexController/cart';
$route['add-to-cart']['POST'] = 'IndexController/add_to_cart';
$route['delete-all-cart']['GET'] = 'IndexController/delete_all_cart';
$route['delete-item/(:any)']['GET'] = 'IndexController/delete_item/$1';
$route['update-cart-item']['POST'] = 'IndexController/update_cart_item';

//check out

$route['checkout']['GET'] = 'IndexController/checkout';
$route['confirm-checkout']['POST'] = 'IndexController/confirm_checkout';
$route['thanks']['GET'] = 'IndexController/thanks';

//order
$route['order/list']['GET'] = 'OrderController/index';
$route['order/view/(:any)']['GET'] = 'OrderController/view/$1';
$route['order/detele_order/(:any)']['GET'] = 'OrderController/detele_order/$1';
$route['order/process']['POST'] = 'OrderController/process';

//Search
$route['tim-kiem']['GET'] = 'IndexController/tim_kiem';

//Phan trang
$route['pagination/(:num)'] = 'IndexController/index/$1';
$route['pagination'] = 'IndexController/index';

$route['danh-muc/(:any)/(:any)/(:any)']['GET'] = 'IndexController/category/$1/$2';

//email

$route['test-mail'] = 'IndexController/send_mail';

//comment

$route['comment-send']['POST'] = 'IndexController/comment_send';