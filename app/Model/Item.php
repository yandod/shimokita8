<?php
class Item extends AppModel {
    public $belongsTo = array(
        'Shimokita' => array(
            'foreignKey' => 'friendlist_id'
        )
        );
}