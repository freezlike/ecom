<?php

App::uses('Controller', 'Controller');

class AppController extends Controller {

    public $components = array('Flash', 'Session', 'Auth','Img');

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('home');
    }

    function beforeRender() {
        parent::beforeRender();
//         if ($this->params['prefix'] === 'admin'):
//            Configure::write('debug', 2);
//        else:
//            Configure::write('debug', 0);
//        endif;
        if (isset($this->params['prefix']) && $this->params['prefix'] == 'admin' && !$this->params['isAjax']) {
            $this->layout = 'admin';
        } else {
            // Pour le layout public
            $this->layout = 'default';
        }
    }

}
