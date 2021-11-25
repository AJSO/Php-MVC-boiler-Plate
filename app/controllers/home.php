<!-- This is a default class -->
<?php

Class Home extends Controller{

    function index(){
        // default method if nothing is provided in the urls
        
        // to load the image resize model. class name in brackets.
        $image_class = $this->loadModel("image_class");
        $data['page_title'] = 'Lifseed - Home';


        $this->view("home", $data);
    }    
}