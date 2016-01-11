<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

App::uses('AppController', 'Controller');

/**
 * CakePHP CategoriesController
 * @author hedi
 */
class CategoriesController extends AppController {

    public $uses = array('Category');

    //Admin Actions
    public function admin_index() {
        $categories = $this->Category->find('all');
        $this->set(compact('categories'));
    }

    public function admin_add() {
        if ($this->request->is(array('post'))) {
            if ($this->Category->save($this->request->data)) {
                $this->Flash->set(__("Catégorie Ajoutée avec succès"), array(
                    'element' => 'notif'
                ));
                $this->redirect(array('action' => 'index'));
            }
        }
    }

    public function admin_edit($id = null) {
        $this->Category->id = $id;
        if (!$this->Category->exists()) {
            $this->Flash->set(__("Catégorie non existante"), array(
                'element' => 'notif',
                'params' => array('class' => 'error')
            ));
            $this->redirect(array('action' => 'index', 'admin' => true));
        }
        if ($this->request->is(array('put'))) {
            if ($this->Category->save($this->request->data)) {
                $this->Flash->set(__("Catégorie Modifiée avec succès"), array(
                    'element' => 'notif'
                ));
                $this->redirect(array('action' => 'index'));
            }
        } else {
            $this->request->data = $this->Category->read();
        }
    }

    public function admin_delete($id = null) {
        $this->Category->id = $id;
        if (!$this->Category->exists()) {
            $this->Flash->set(__("Catégorie non existante"), array(
                'element' => 'notif',
                'params' => array('class' => 'error')
            ));
            $this->redirect(array('action' => 'index', 'admin' => true));
        }
        if ($this->Category->delete()) {
            $this->Flash->set(__("Catégorie Supprimée avec succès"), array(
                'element' => 'notif'
            ));
            $this->redirect(array('action' => 'index'));
        }
    }

}
