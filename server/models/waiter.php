<?php

class Person{

    public $id;
    public $waiter_name;
    public function __construct($id,$waiter_name) {
        $this->id = $id;
        $this->waiter_name = $waiter_name;
    }

}

?>