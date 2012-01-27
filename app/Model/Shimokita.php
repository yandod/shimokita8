<?php
//app/Model/Shimokita.php
class Shimokita extends AppModel {
    public $useTable = 'friendlist';
    //public $primaryKey = 'twitter';
    //public $displayField = 'created';
    public $hasMany = array(
        'Item'
    );
    public $validate = array(
        'twitter' => array(
            'rule' => 'notEmpty',
            'message' => 'Twitter is very important'
        ),
        'name' => array(
            'rule' => 'notEmpty',            
        )
    );
    public function getBestFriend() {
        $option = array(
            'conditions' => array(
                'Shimokita.id' => 4
            )
        );
        return $this->find('all',$option);       
    } 
    
}