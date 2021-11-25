<!-- This is a default class -->
<?php

Class About extends Controller{

    function index(){
        // default method if nothing is provided in the urls
        $data['page_title'] = 'Lifseed - About';
        $this->view("about", $data);
    }

}