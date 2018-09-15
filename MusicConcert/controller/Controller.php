<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Controller{
    public function  start_site(){
        include_once ('view/start.php');
    }
    public function contact(){
        include_once ('view/contact.php');
    }
    public function error404(){
        include_once ("view/error_404.php");
    }
}
