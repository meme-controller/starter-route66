<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Delta extends Application
{

	function __construct()
	{
		parent::__construct();
	}

	/**
	 * Homepage for our app
	 */
	public function index()
	{
		
	}

	public function force()
	{
		$this->show(4);
	}

}
