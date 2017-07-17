<?php

interface Controller {
    public function run();
    public function setParam($params);
    public function getMessages();
}
