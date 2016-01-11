<?php

App::uses('AppModel', 'Model');

/**
 * Media Model
 *
 * @property Product $Product
 */
class Media extends AppModel {

    /**
     * Use table
     *
     * @var mixed False or table name
     */
    public $useTable = 'medias';

    /**
     * Display field
     *
     * @var string
     */
    public $displayField = 'name';

    /**
     * Validation rules
     *
     * @var array
     */
    public $validate = array(
        'name' => array(
            'notBlank' => array(
                'rule' => array('notBlank'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'url' => array(
            'notBlank' => array(
                'rule' => array('notBlank'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'product_id' => array(
            'numeric' => array(
                'rule' => array('numeric'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
    );

    // The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
     * belongsTo associations
     *
     * @var array
     */
    public $belongsTo = array(
        'Product' => array(
            'className' => 'Product',
            'foreignKey' => 'product_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        )
    );

    /**
     * Call Media
     */
    public function afterFind($results, $primary = false) {
        parent::afterFind($results, $primary);
        foreach ($results as $k => $d) {
            if (isset($d['Media']['url'])) {
                $filename = implode('.', array_slice(explode('.', $d['Media']['url']), 0, -1));
                foreach (Configure::read('Media.formats') as $kk => $vv) {
                    $d['Media']['url' . $kk] = $filename . '_' . $kk . '.jpg';
                }
            }
            $results[$k] = $d;
        }
        return $results;
    }

}
