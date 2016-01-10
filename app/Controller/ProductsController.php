<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

App::uses('AppController', 'Controller');

/**
 * CakePHP ProductsController
 * @author hedi
 */
class ProductsController extends AppController {

    public $uses = array('Product');
    public $components = array('Paginator');
    public $paginate = array(
        'limit' => 25,
        'order' => array(
            'Product.created' => 'DESC'
        )
    );
    public function admin_index(){
        $products = $this->Product->find('all');
        $this->set(compact('products'));
    }
    public function admin_show($id = null){
        $this->Product->id = $id;
        if(!$this->Product->exists()){
            
        }
    }
    public function index() {
        $this->Paginator->settings = $this->paginate;
        // similaire à un findAll(), mais récupère les résultats paginés
        $data = $this->Paginator->paginate('Product');
        $this->set('products', $data);
    }

    public function show($slug = null) {
        if (!empty($slug)) {
            $product = $this->Product->find('first', array(
                'conditions' => array('Product.slug' => $slug)
            ));
            $this->set(compact('product'));
        } else {
            $this->redirect($this->referer());
        }
    }

    public function is_promoted($id = null) {
        $this->Product->id = $id;
        if (!$this->Product->exists()) {
            $this->Flash->set(__("Ce Produit n'existe pas"), array(
                'element' => 'notif',
                'params' => array('class' => 'error')
            ));
            $this->redirect(array('action' => 'index', 'admin' => true));
        }
        if ($this->Product->saveField('isPromoted', true)) {
            $this->Flash->set(__("Produit Ajouté en Promotion avec succès"), array(
                'element' => 'notif'
            ));
            $this->redirect(array('action' => 'index', 'admin' => true));
        }
    }

}
