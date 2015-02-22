<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Admin
 *
 * @author Adam
 */

class Admin extends Application {

    function __construct()
    {
	parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    function index()
    {
	$this->data['pagebody'] = 'justone';    // this is the view we want shown
        $choice = rand(1, $this->quotes->size());
	$this->data = array_merge($this->data, (array) $this->quotes->get($choice));
        
	$this->data = array_merge($this->data, (array) $this->quotes->last());
        $this->caboose->needed('jrating', 'hollywood');
        
	$this->render();
    }

}