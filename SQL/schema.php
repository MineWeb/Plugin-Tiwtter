<?php

class TwitterAppSchema extends CakeSchema {



    public $file = 'schema.php';



    public function before($event = array()) {

        return true;

    }



    public function after($event = array()) {}



    public $twitter__infos = [

        'id' => ['type' => 'integer', 'null' => false, 'default' => null, 'length' => 8, 'unsigned' => false, 'key' => 'primary'],

        'name_twitter' => ['type' => 'string', 'null' => false, 'default' => null, 'length' => 255, 'unsigned' => false],

    ];

}