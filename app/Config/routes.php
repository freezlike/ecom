<?php

/**
 * Routage Basic
 */
Router::connect('/', array('controller' => 'pages', 'action' => 'home'));
Router::connect('/product', array('controller' => 'products', 'action' => 'index'));
Router::connect('/login', array('controller' => 'users', 'action' => 'login'));
Router::connect('/logout', array('controller' => 'users', 'action' => 'logout'));
Router::connect('/panier', array('controller' => 'users', 'action' => 'panier'));
Router::connect('/my-account', array('controller' => 'users', 'action' => 'my_account'));
Router::connect('/dashboard', array('controller' => 'pages', 'action' => 'index', 'admin' => true));
/**
 * Routage Users
 */
Router::connect('/gestion-users', array('controller' => 'users', 'action' => 'index', 'admin' => true));
/**
 * Routage Product
 */
//admin
Router::connect('/gestion-products', array('controller' => 'products', 'action' => 'index', 'admin' => true));
Router::connect('/gestion-products/add', array('controller' => 'products', 'action' => 'add', 'admin' => true));
Router::connect('/gestion-products/edit-:id', array('controller' => 'products', 'action' => 'edit', 'admin' => true), array('pass' => array('id'), 'id' => '[0-9]+'));
Router::connect('/gestion-products/show-:id', array('controller' => 'products', 'action' => 'show', 'admin' => true), array('pass' => array('id'), 'id' => '[0-9]+'));
//public
Router::connect('/produit/:slug', array('controller' => 'products', 'action' => 'show', 'admin' => false), array('pass' => array('slug'), 'slug' => '[0-9a-z\-]+'));

/**
 * Routage Category
 */
//admin
Router::connect('/gestion-categories', array('controller' => 'categories', 'action' => 'index', 'admin' => true));
Router::connect('/gestion-categories/add', array('controller' => 'categories', 'action' => 'add', 'admin' => true));
Router::connect('/gestion-categories/edit-:id', array('controller' => 'categories', 'action' => 'edit', 'admin' => true), array('pass' => array('id'), 'id' => '[0-9]+'));
//public
Router::connect('/category-produits/:cat', array('controller' => 'products', 'action' => 'sort_by_cat', 'admin' => false), array('pass' => array('cat'), 'cat' => '[a-z]+'));
Router::connect('/marque-produits/:marque', array('controller' => 'products', 'action' => 'sort_by_marque', 'admin' => false), array('pass' => array('marque'), 'marque' => '[a-z]+'));

/**
 * Routage Marque
 */
Router::connect('/gestion-marques', array('controller' => 'marques', 'action' => 'index', 'admin' => true));
Router::connect('/gestion-marques/add', array('controller' => 'marques', 'action' => 'add', 'admin' => true));
Router::connect('/gestion-marques/edit-:id', array('controller' => 'marques', 'action' => 'edit', 'admin' => true), array('pass' => array('id'), 'id' => '[0-9]+'));


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
