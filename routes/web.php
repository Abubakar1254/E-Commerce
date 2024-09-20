<?php

use Illuminate\Support\Facades\Route;


/*
==================================
======= ADMIN - PANEL  ===========
==================================
*/

Route::view('/admin/index', 'admin.index');
Route::view('/admin/login', 'admin.login');
Route::view('/admin/avatars', 'admin.avatars');
Route::view('/admin/buttons', 'admin.buttons');
Route::view('/admin/charts', 'admin.charts');
Route::view('/admin/datatables', 'admin.datatables');
Route::view('/admin/font-awesome-icons', 'admin.font-awesome-icons');
Route::view('/admin/forms', 'admin.forms');
Route::view('/admin/googlemaps', 'admin.googlemaps');
Route::view('/admin/gridsystem', 'admin.gridsystem');
Route::view('/admin/icon-menu', 'admin.icon-menu');
Route::view('/admin/jsvectormap', 'admin.jsvectormap');
Route::view('/admin/notifications', 'admin.notifications');
Route::view('/admin/panels', 'admin.panels');
Route::view('/admin/sidebar-style-2', 'admin.sidebar-style-2');
Route::view('/admin/simple-line-icons', 'admin.simple-line-icons');
Route::view('/admin/sparkline', 'admin.sparkline');
Route::view('/admin/starter-template', 'admin.starter-template');
Route::view('/admin/sweetalert', 'admin.sweetalert');
Route::view('/admin/tables', 'admin.tables');
Route::view('/admin/typography', 'admin.typography');
Route::view('/admin/widgets', 'admin.widgets');


/*
==================================
============ WEBSITE  ============
==================================
*/

Route::view('/', 'Home');
Route::view('/index', 'index');
Route::view('/404', '404');
Route::view('/details-left-sidebar','blog-details-left-sidebar');
Route::view('/blog-gallery','blog-gallery-format');
Route::view('/blog-left','blog-left-sidebar');
Route::view('/checkout','checkout');
Route::view('/contact','contact');
Route::view('/faq','faq');
Route::view('/login-register','login-register');
Route::view('/shop-left','shop-left-sidebar');
Route::view('/shop-list-left','shop-list-left-sidebar');
Route::view('/shop-list','shop-list');
Route::view('/shopping-cart','shopping-cart');
Route::view('/product-affiliate','single-product-affiliate');
Route::view('/product-gallery-left','single-product-gallery-left');
Route::view('/product-normal','single-product-normal');
Route::view('/product-sale','single-product-sale');
Route::view('/single-product','single-product');
Route::view('/wishlist','wishlist');
