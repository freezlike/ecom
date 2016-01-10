<?php
/**
 * Routage Basic
 */
Router::connect('/', array('controller' => 'pages', 'action' => 'home'));
Router::connect('/product', array('controller' => 'products', 'action' => 'index'));
Router::connect('/login', array('controller' => 'users', 'action' => 'login'));
Router::connect('/dashboard', array('controller' => 'pages', 'action' => 'index', 'admin' => true));
/**
 * Routage Users
 */
Router::connect('/gestion-users', array('controller' => 'users', 'action' => 'index', 'admin' => true));
/**
 * Routage Product
 */
Router::connect('/gestion-products', array('controller' => 'products', 'action' => 'index', 'admin' => true));
/**
 * Routage Category
 */
Router::connect('/gestion-categories', array('controller' => 'categories', 'action' => 'index', 'admin' => true));
/**
 * Routage Marque
 */
Router::connect('/gestion-marques', array('controller' => 'marques', 'action' => 'index', 'admin' => true));


/**
 * Load all plugin routes. See the CakePlugin documentation on
 * how to customize the loading of plugin routes.
 */
CakePlugin::routes();

/**
 * Load the CakePHP default routes. Only remove this if you do not want to use
 * the built-in default routes.
 */
require CAKE . 'Config' . DS . 'routes.php';
