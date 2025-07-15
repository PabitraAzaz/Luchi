<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//Web
$routes->match(['get', 'post'], '/', 'Home::index');


// Admin Panel Routes 
$routes->group('admin', function ($routes) {
    // $routes->match(['get', 'post'], '/', 'AdminController\LoginController::index');
    $routes->get('dashboard/', 'AdminController\DashboardController::index');





    // $routes->match(['get', 'post'], 'profile', 'AdminController\DashboardController::profile_update');

    $routes->group('bills', function ($routes) {
        $routes->get('/', 'AdminController\BillsController::index');

        
        // $routes->match(['get', 'post'], 'create/', 'AdminController\PlaceController::create');
        // $routes->match(['get', 'post'], 'edit/(:num)', 'AdminController\PlaceController::edit/$1');
        // $routes->get('delete/(:num)', 'AdminController\PlaceController::delete/$1');
    });


    // $routes->group('documents', function ($routes) {
    //     $routes->get('/', 'AdminController\PlaceController::listDocuments');
    //     $routes->match(['get', 'post'], 'create/', 'AdminController\PlaceController::createDocuments');
    //     $routes->match(['get', 'post'], 'edit/(:num)', 'AdminController\PlaceController::editDocument/$1');
    //     $routes->get('delete/(:num)', 'AdminController\PlaceController::deleteDocuments/$1');
    // });

    // $routes->group('folder', function ($routes) {
    //     $routes->get('/', 'AdminController\FolderController::index');
    //     $routes->match(['get', 'post'], 'create/', 'AdminController\FolderController::createFolder');

    //     $routes->match(['get', 'post'], 'list/(:num)', 'AdminController\FolderController::listFolderFile/$1');


    //     $routes->match(['get', 'post'], '(:num)/file/create', 'AdminController\FolderController::createListFolderFile/$1');




    //     // $routes->match(['get', 'post'], 'edit/(:num)', 'AdminController\FolderController::editDocument/$1');
    //     // $routes->get('delete/(:num)', 'AdminController\FolderController::deleteDocuments/$1');
    // });


    // $routes->group('city-data', function ($routes) {
    //     $routes->get('/', 'AdminController\CityDataController::index');
    //     $routes->match(['get', 'post'], 'create/', 'AdminController\CityDataController::create');
    //     // $routes->match(['get', 'post'], 'edit/(:num)', 'AdminController\TourController::edit/$1');
    //     $routes->get('delete/(:num)', 'AdminController\ServiceController::delete/$1');
    // });


    $routes->get('logout', 'AdminController\DashboardController::logout');

    // $routes->match(['get', 'post'], 'document-upload', 'AdminController\DashboardController::document_up');

});
