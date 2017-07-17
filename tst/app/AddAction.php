<?php

class AddAction implements Controller{

    protected $Model;

    protected $params;

    public function run(){
        echo 'add action';
    }

    public function setParam($params){
        $this->params = $params;
    }    

    public function getMessages(){}

    public function validateData(){

    }
}
