<?php
require_once 'forma.php';
require_once 'inp.php';

class Submit extends Inp{
	public function __construct()
		{
			$this->setAttr('type', 'submit');
			parent::__construct();
		}
	}