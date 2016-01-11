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
        $this->set('product', $this->Product->read());
    }

    public function admin_add() {
        if ($this->request->is(array('post'))) {
            $data = $this->request->data;
            $imageName = $data['Product']['image'];
            debug($imageName);
            $dir = IMAGES . date('Y');
            if (!file_exists($dir))
                mkdir($dir, 0777);
            $dir .= DS . date('m');
            if (!file_exists($dir))
                mkdir($dir, 0777);
            $f = explode('.', $data['Product']['image']['name']);
            $ext = '.' . end($f);
            $filename = Inflector::slug(implode('.', array_slice($f, 0, -1)), '-');
            move_uploaded_file($data['Product']['image']['tmp_name'], $dir . DS . $filename . $ext);
            foreach (Configure::read('Media.formats') as $k => $v) {
                $prefix = substr($k, 0, 1);
                $size = explode('x', $v);
                $this->Img->crop($dir . DS . $filename . $ext, $dir . DS . $filename . '_' . $prefix . $ext, $size[0], $size[1]);
            }
            if ($this->Product->save($this->request->data)) {
                //Save in BDD
                $success = $this->Product->Media->save(array(
                    'name' => $data['Product']['image']['name'],
                    'url' => date('Y') . '/' . date('m') . '/' . $filename . $ext,
                    'product_id' => $this->Product->getLastInsertID(),
                ));
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
        } else {
            $this->request->data = $this->Product->read();
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

    public function sort_by_cat($cat = null) {
        if (!empty($cat)) {
            $c = $this->Product->Category->find('first', array('Category.slug' => $cat));
            $this->Paginator->settings = array(
                'conditions' => array('Product.category_id' => $c['Category']['id']),
                'limit' => 25,
                'order' => array(
                    'Product.created' => 'DESC'
                )
            );
            $data = $this->Paginator->paginate('Product');
            if (!empty($data)) {
                $this->set('products', $data);
            } else {
                $this->redirect(array('action' => 'index'));
            }
        } else {
            $this->redirect(array('action' => 'index'));
        }
    }

    public function sort_by_marque($marque = null) {
        if (!empty($cat)) {
            $m = $this->Product->Marque->find('first', array('Marque.slug' => $marque));
            $this->Paginator->settings = array(
                'conditions' => array('Product.category_id' => $m['Marque']['id']),
                'limit' => 25,
                'order' => array(
                    'Product.created' => 'DESC'
                )
            );
            $data = $this->Paginator->paginate('Product');
            if (!empty($data)) {
                $this->set('products', $data);
            } else {
                $this->redirect(array('action' => 'index'));
            }
        } else {
            $this->redirect(array('action' => 'index'));
        }
    }

    public function sort_by($cat = null, $marque = null) {
        if (!empty($cat) && !empty($marque)) {
            $c = $this->Product->Category->find('first', array('Category.slug' => $cat));
            $m = $this->Product->Marque->find('first', array('Marque.slug' => $marque));
            $this->Paginator->settings = array(
                'conditions' => array('Product.category_id' => $c['Category']['id'], 'Product.marque_id' => $m['Marque']['id']),
                'limit' => 25,
                'order' => array(
                    'Product.created' => 'DESC'
                )
            );
            $data = $this->Paginator->paginate('Product');
            if (!empty($data)) {
                $this->set('products', $data);
            } else {
                $this->redirect(array('action' => 'index'));
            }
        } else {
            $this->redirect(array('action' => 'index'));
        }
    }

}
