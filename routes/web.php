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
Route::view('/index-2', 'index-2');
Route::view('/index-3', 'index-3');
Route::view('/index-4', 'index-4');
Route::view('/about-us', 'about-us');
Route::view('/404', '404');
Route::view('/blog-2', 'blog-2-column');
Route::view('/blog-3', 'blog-3-column');
Route::view('/blog-audio', 'blog-audio-format');
Route::view('/details-left-sidebar','blog-details-left-sidebar');
Route::view('/details-right-sidebar','blog-details-right-sidebar');
Route::view('/blog-details','blog-details');
Route::view('/blog-gallery','blog-gallery-format');
Route::view('/blog-left','blog-left-sidebar');
Route::view('/left-sidebar','blog-list-left-sidebar');
Route::view('/right-sidebar','blog-list-right-sidebar');
Route::view('/blog-list','blog-list');
Route::view('/blog-right','blog-right-sidebar');
Route::view('/blog-video','blog-video-format');
Route::view('/cart','cart');
Route::view('/checkout','checkout');
Route::view('/contact','contact');
Route::view('/faq','faq');
Route::view('/login-register','login-register');
Route::view('/product-datails','product-details');
Route::view('/shop-3','shop-3-column');
Route::view('/shop-4','shop-4-column');
Route::view('/shop-left','shop-left-sidebar');
Route::view('/shop-list-left','shop-list-left-sidebar');
Route::view('/shop-right','shop-list-right-sidebar');
Route::view('/shop-list','shop-list');
Route::view('/shop-right-sidebar','shop-right-sidebar');
Route::view('/shopping-cart','shopping-cart');
Route::view('/product-affiliate','single-product-affiliate');
Route::view('/product-carousel','single-product-carousel');
Route::view('/product-gallery-left','single-product-gallery-left');
Route::view('/product-gallery-right','single-product-gallery-right');
Route::view('/product-group','single-product-group');
Route::view('/product-normal','single-product-normal');
Route::view('/product-sale','single-product-sale');
Route::view('/product-tab-style-left','single-product-tab-style-left');
Route::view('/product-tab-style-right','single-product-tab-style-right');
Route::view('/product-tab-style-top','single-product-tab-style-top');
Route::view('/single-product','single-product');
Route::view('/wishlist','wishlist');
