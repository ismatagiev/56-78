<?php
require_once 'tag.php';
require_once 'forma.php';
//$sum = 0;
	class Inp extends Tag
	{

		public function __construct(){
			parent::__construct('input');
		}
		public function open(){

			$inputName = $this->getAttr('name');
			if ($inputName){
				if (isset($_REQUEST[$inputName])){
					$value = $_REQUEST[$inputName];
					//global $sum;
					//$sum = $sum + $value;
					$this->setAttr('value', $value);
				}
			}
			return parent::open();

		}
		public function __toString(){
			return $this->open();
		}
	}