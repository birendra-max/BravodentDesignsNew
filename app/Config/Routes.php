<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('aboutUs.html', 'Home::about');
$routes->get('prodservice.html', 'Home::prodService');
$routes->get('workflow.html','Home::workflow');
$routes->get('join_our_team.html',"Home::join_ourtTeam");
$routes->get('faq.html',"Home::faq");
$routes->get('contactUs.html',"Home::contactUs");