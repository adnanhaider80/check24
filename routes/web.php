<?php 

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

// Routes system
$routes = new RouteCollection();
$routes->add('article', new Route(constant('URL_SUBFOLDER') . '/article/{id}', array('controller' => 'ArticleController', 'method'=>'showAction'), array('id' => '[0-9]+')));
$routes->add('article/new', new Route(constant('URL_SUBFOLDER') . '/article/new', array('controller' => 'ArticleController', 'method'=>'index')));

$routes->add('/', new Route(constant('URL_SUBFOLDER') . '/', array('controller' => 'OverviewController', 'method'=>'index')));
$routes->add('overview', new Route(constant('URL_SUBFOLDER') . '/overview', array('controller' => 'OverviewController', 'method'=>'index')));


