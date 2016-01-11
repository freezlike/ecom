<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

App::uses('AppController', 'Controller');

/**
 * CakePHP UsersController
 * @author hedi
 */
class UsersController extends AppController {

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('add');
    }

    public function login() {
        if ($this->request->is(array('post', 'ajax'))) {
            if ($this->Auth->login()) {
                $prefix = $this->Auth->user('Role.name');
                if ($prefix !== 'admin') {
                    $this->redirect(array('controller' => 'pages', 'action' => 'home'));
                } else {
                    $this->redirect(array('controller' => 'pages', 'action' => 'index', $prefix => true));
                }
            }
        }
    }

    public function add() {
        $user = array(
            'User' => array(
                'username' => 'admin',
                'password' => 'admin',
                'email' => 'tic.hedi@gmail.com',
                'first_name' => 'Hedi',
                'last_name' => 'Riahi',
                'adresse' => '11 Rue Test',
                'phone_number' => '+216 21 868 692',
                'role_id' => 1
            )
        );
        $ifExistUser = $this->User->find('first', array(
            'conditions' => array('User.username' => 'admin')
        ));
        if (empty($ifExistUser)) {
            $this->User->save($user);
            echo "Utilisateur Admin Ajouté";
        } else {
            echo "Utilisateur Admin déjà Ajouté";
        }die();
    }

    public function panier() {
        $user_id = $this->Auth->user('id');
        $commande = $this->User->Commande->find('all');
        $this->set(compact('commande'));
    }

    public function my_account() {
        
    }

    public function logout() {
        $this->Auth->logout();
        $this->redirect(array('controller' => 'pages', 'action' => 'home'));
    }

}
