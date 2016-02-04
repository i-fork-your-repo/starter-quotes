<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class First extends Application {

	function __construct()
	{
		parent::__construct();
	}

	//-------------------------------------------------------------
	//  The normal pages
	//-------------------------------------------------------------

	function index()
	{
		$this->data['pagebody'] = 'justone';	// this is the view we want shown
		// build the list of authors, to pass on to our view
		$source = $this->quotes->all();
		$authors = array();
                
                // gets the id of the first quote from the models
                $record = $this->quotes->get(1);
                $this->data = array_merge($this->data, $record);
                
//		foreach ($source as $record)
//		{
//			$authors[] = array('who' => $record['who'], 'mug' => $record['mug'], 'href' => $record['where']);
//		}
		$this->data['authors'] = $authors;
		$this->render();
	}

}