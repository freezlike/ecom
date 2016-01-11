<?php

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

    // Admin Actions
    public function admin_index() {
        $products = $this->Product->find('all');
        $this->set(compact('products'));
    }

    public function admin_show($id = null) {
        $this->Product->id = $id;
        if (!$this->Product->exists()) {
            $this->Flash->set(__("Produit non existant"), array(
                'element' => 'notif',
                'params' => array('class' => 'error')
            ));
            $this->redirect(array('action' => 'index', 'admin' => true));
        }
    }

    public function admin_add() {
        if ($this->request->is(array('post'))) {
            if ($this->Product->save($this->request->data)) {
                $this->Flash->set(__("Produit Ajouté avec succès"), array(
                    'element' => 'notif'
                ));
                $this->redirect(array('action' => 'index', 'admin' => true));
            }
        }
        $marques = $this->Product->Marque->find('list');
        $categories = $this->Product->Category->find('list');
        $this->set(compact('marques', 'categories'));
    }

    public function admin_edit($id = null) {
        $this->Product->id = $id;
        if (!$this->Product->exists()) {
            $this->Flash->set(__("Ce Produit n'existe pas"), array(
                'element' => 'notif',
                'params' => array('class' => 'error')
            ));
        }
        if ($this->request->is(array('put'))) {
            if ($this->Product->save($this->request->data)) {
                $this->Flash->set(__("Produit Modifié avec succès"), array(
                    'element' => 'notif'
                ));
                $this->redirect(array('action' => 'index', 'admin' => true));
            }
        }
        $marques = $this->Product->Marque->find('list');
        $categories = $this->Product->Category->find('list');
        $this->set(compact('marques', 'categories'));
    }

    public function admin_delete($id = null) {
        $this->Product->id = $id;
        if (!$this->Product->exists()) {
            $this->Flash->set(__("Ce Produit n'existe pas"), array(
                'element' => 'notif',
                'params' => array('class' => 'error')
            ));
        }
        if ($this->Product->delete()) {
            $this->Flash->set(__("Message"), array(
                'element' => 'notif'
            ));
            $this->redirect(array('action' => 'index', 'admin' => true));
        }
    }

    //Public Actions

    public function index() {
        $this->Paginator->settings = $this->paginate;
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
