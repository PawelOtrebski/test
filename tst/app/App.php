<?php

class App
{
    const METHOD = 'REQUEST_METHOD';
    const ACTION_METHOD = 'action';
    const DELETE_ACTION = 'del_action';
    const ADD_ACTION = 'add_action';

    private $method;
    private $params;
    private $action;
    private $controllerName;
    private $Controller;
    private $messages;
    public function __construct()
    {
           $this->method = $_SERVER[App::METHOD];
           $this->params = $_POST;
    }

    public function run()
    {
        $this->extractActionType();
        $this->actionSwitch();
        $this->loadController();
        
    }

    private function extractActionType()
    {
        if(empty($this->params)){
            $this->action = null;
        }else{
            $this->action = $this->params[App::ACTION_METHOD];
        }    
    }

    private function actionSwitch()
    {   
        $query = '';
        $name = explode('_',$this->action);
        foreach($name as $n){
            $query = $query . ucfirst($n);
        }        
        $this->controllerName = $query;
    }
    //factory should be here to return the appropriate class
    private function loadController()
    {
        if(isset($this->action)){
            $this->Controller = new $this->controllerName();
            $this->Controller->setParam($this->params);
            $this->Controller->run();
            $this->messages = $this->Controller->getMessages();
        }      
    }

}
