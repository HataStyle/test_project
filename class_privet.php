<?php
/**
 * Created by PhpStorm.
 * User: Jeka
 * Date: 26.09.2017
 * Time: 14:10
 */

class privet {

	private $privet;
	function get(){
		return $this->privet;
	}
	function set( $privet ){
		$this->privet = $privet;
	}

	function  show(){
		echo "Privet ".$this->privet;
	}
}