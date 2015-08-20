<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Base_Controller {

    protected $controller = __CLASS__;

	public function before()
	{

	}

	public function __construct()
	{
		parent::__construct();
	}

	public function action_index()
	{
        $this->render('index');
	}
}
