<?php

class DeleteAction implements Controller {

    protected $Model;

    protected $params;
    
    public function run(){
        echo 'delete action';
    }

    public function setParam($params){
        $this->params = $params;
    }

    public function getMessages(){}

    public function extractData(){}
    public function validateData(){}
}
