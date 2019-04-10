<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bctest extends CI_Controller {

	/**
	* Controller for index and test pages for codeigniter-simple-breadcrumb
	*
	* Maps to the following URL
	* 		http://example.com/bctest
	*	- or -
	* 		http://example.com/index.php/bctest
	*	- or -
	* 		http://example.com/index.php/bctest/index
	*
	* Originally created by Gavin Brown (http://gavinbrown.ca/) 
	* or @gavbro on twitter!
	* Created on April 10, 2019
	*
	* @see https://codeigniter.com/user_guide/general/urls.html
	*/
	
	public function __construct()
	{
		// Make CI available
		parent::__construct();
		
		// Load the custom breadcrumb library.
		$this->load->library('MY_Breadcrumb');
	}
	
	public function index()
	{	
		//Load the default test view as index
		$this->load->view('bctest');
	}
	
	/**
	* Method to capture 2nd, 3rd and 4th requests after tld/index as tld/index/method/parameter/id 
	*/
	public function bctest2($bctest3 = NULL, $bctest4 = NULL)
	{
			// Load the same view, since it is only the URL we need to change
			// for this demonstration.
			$this->load->view('bctest');
	}
}

