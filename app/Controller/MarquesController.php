<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

App::uses('AppController', 'Controller');

/**
 * CakePHP MarquesController
 * @author hedi
 */
class MarquesController extends AppController {

    public $uses = array('Marque');

    //Admin Actions
    public function admin_index() {
        $marques = $this->Marque->find('all');
        $this->set(compact('marques'));
    }

    public function admin_add() {
        if ($this->request->is(array('post'))) {
            if ($this->Marque->save($this->request->data)) {
                $this->Flash->set(__("Marque Ajoutée avec succès"), array(
                    'element' => 'notif'
                ));
                $this->redirect(array('action' => 'index'));
            }
        }
    }

    public function admin_edit($id = null) {
        $this->Marque->id = $id;
        if (!$this->Marque->exists()) {
            $this->Flash->set(__("Marque non existante"), array(
                'element' => 'notif',
                'params' => array('class' => 'error')
            ));
            $this->redirect(array('action' => 'index', 'admin' => true));
        }
        if ($this->request->is(array('put'))) {
            if ($this->Marque->save($this->request->data)) {
                $this->Flash->set(__("Marque Modifiée avec succès"), array(
                    'element' => 'notif'
                ));
                $this->redirect(array('action' => 'index'));
            }
        } else {
            $this->request->data = $this->Marque->read();
        }
    }

    public function admin_delete($id = null) {
        $this->Marque->id = $id;
        if (!$this->Marque->exists()) {
            $this->Flash->set(__("Marque non existante"), array(
                'element' => 'notif',
                'params' => array('class' => 'error')
            ));
            $this->redirect(array('action' => 'index', 'admin' => true));
        }
        if ($this->Marque->delete()) {
            $this->Flash->set(__("Marque Supprimée avec succès"), array(
                'element' => 'notif'
            ));
            $this->redirect(array('action' => 'index'));
        }
    }

}
